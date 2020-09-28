var fs = require('fs'); //importing the file system
var data = fs.readFileSync('text.txt'); //reading the data from the file
console.log(data.toString()); //appending the data
console.log('End Here');