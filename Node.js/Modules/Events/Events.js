var fs = require('fs');
var event = require('events'); // Import Events Module

const myEmitter = new event.EventEmitter(); // Creating Object of EventEmitter

fs.readFile('test1.txt',(err,data)=>{
    console.log(data.toString());
    myEmitter.emit('readFile'); // Emitting Event
});

myEmitter.on('readFile',()=>{
    console.log('\nRead Event Occured!');
}); // Registering Listener and defining event handler