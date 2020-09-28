var fs = require('fs');
fs.readFile('text.txt',function(err,data){
    if(err){ // checking if there is any error or not
        console.log(err); //printing the error
    }
    setTimeout(()=>{
        console.log("Display after 2 seconds.")
    },2000); // this functionwill call a one time callback function aftersome delay.
});

console.log('Start Here.');
/*
Till the time the readFile function gets executed, the further statements are executed and when the readFile
execution is complete, then the result will be displayed.
*/