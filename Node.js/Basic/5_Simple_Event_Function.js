// Import events module
var events = require('events');

// Create an eventEmitter object
var eventEmitter = new events.EventEmitter();

// Create an event Handler function
var connectHandler = function connected(){
    console.log('Connection Successful!');

    // Fire up the data_received event
    eventEmitter.emit('data_received');
}

// Binding the connection event with the handler
eventEmitter.on('connection',connectHandler);

// Bind the data_received event with the anonymous function
eventEmitter.on('data_received',function(){
    console.log('data received successfully.');
});

// Fire up the connection event
eventEmitter.emit('connection');

console.log("Program Ended.");