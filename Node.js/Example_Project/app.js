// Importing all dependencies
var express = require('express');
var routes = require('./routes');
var http = require('http');
var path = require('path');
var urlencoded = require('url');
var bodyParser = require('body-parser');
var json = require('json');
var logger = require('logger');
var methodOverride = require('method-override');

var nano = require('nano')('http://localhost:5984');// getting connected to couchdb

var db = nano.use('address'); // for working with couchdb, we nano and specify/pass the name of the database as the parameter
var app = express; // creating an app using express framework

// Setting up the Environment
app.set('port',process.env.PORT || 3000); // we specify the port to run the application
app.set('views',path.join(__dirname,'views')); // we specify the views folder
app.set('view engine','jade'); // we specify the view engine

// Specifying all the used modules
app.use(bodyParser.json()); // we import this module for parsing
app.use(bodyParser.urlencoded()); // for passing the data in our urls
app.use(methodOverride());
app.use(express.static(path.join(__dirname,'public')));

// Seleting Root
app.get('/',routes.index);

// Creating all the functions
app.post('/createdb',function(req,res){
    nano.db.create(req.body.dbname,function(err){
        if(err){
            res.send("Error creating Database"+res.body.dbname);
            return;
        }
        res.send("Database "+req.body.dbname+" created successfully!");
    });
});

app.post('/new_contact',function(req,res){
    var name = req.body.name;
    var phone = req.body.phone;

    db.insert({name:name,phone:phone,crazy:true},phone, function(err,body,header){
        if(err){
            res.send("Error creating contact");
            return;
        }
        res.send("Contact created successfully");
    });
});

app.post('/view_contact',function(req,res){
    var alldoc = "Following are the contacts";
    db.get(req.body.phone,{revs_info:true},function(err,body){
        if(err){
            console.log(body);
        }
        if(body){
            alldoc += "Name: " + body.name + "<br/>Phone Number: "+body.phone;
        }
        else{
            alldoc = "No records found";
        }
        res.send(alldoc);
    });
});

app.post('/delete_contact',function(req,res){
    db.get(req.body.phone,{revs_infor:true},function(err,body){
        if(err){
            db.destroy(req.body.phone,body.__rev, function(err,body){
                if(err){
                    res.send("Error deleting contact");
                }
            });
            res.send("Contact deleted successfully");
        }
    });
});

http.createServer(app).listen(app.get('port'),function(){
    console.log('Express Server listening on port '+app.get('port'));
});