// Import events module
var events = require("events");

// Create an eventEmitter Object
var eventEmitter = new events.eventEmitter();

// Binding the event and the Event Handler
eventEmitter.on('eventName',eventHandler);

// Fire an event
eventEmitter.emit('eventName');