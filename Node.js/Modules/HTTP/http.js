// import all the required modules
var http = require('http');
var fs = require('fs');
var url = require('url');

http.createServer(function(request, response){ //creating the server
    var pathname = url.parse(request.url).pathname; // Parse the fetched URL to get the pathname

    console.log("Request for "+pathname+" received");

    fs.readFile(pathname.substr(1),function(err,data){ //request file to be read by the file system(index.html)
        if(err){
            console.log(err);
            response.writeHead(404,{'Content-Type':'text/html'}); // Creating header with content type as html or text
        }
        else{ // Generating Response
            response.writeHead(200, {'Content-Type':'text/html'});
            response.write(data.toString());
        }
        response.end();
    });
}).listen(3000); // LISTEN TO PORT 3000
console.log('Server running at localhost:3000');