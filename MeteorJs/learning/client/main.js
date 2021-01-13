import { Template } from 'meteor/templating';
import { ReactiveVar } from 'meteor/reactive-var';

import './main.html';
/*
Template.hello.onCreated(function helloOnCreated() {
  // counter starts at 0
  this.counter = new ReactiveVar(0);
});

Template.hello.helpers({
  counter() {
    return Template.instance().counter.get();
  },
});

Template.hello.events({
  'click button'(event, instance) {
    // increment the counter when button is clicked
    instance.counter.set(instance.counter.get() + 1);
  },
});
*/
if(Meteor.isClient){
    Template.body.helpers({
        paragraphs: [
            {text: "This is paragraph 1..."},
            {text: "This is paragraph 2..."},
            {text: "This is paragraph 3..."},
            {text: "This is paragraph 4..."},
            {text: "This is paragraph 5..."},
            {text: "This is paragraph 6..."},
            {text: "This is paragraph 7..."}
        ]
    });
    myData = {
        key1: "value1",
        key2: "value2"
    }
    Session.set('mySession',myData);
    var sessionDataLog = Session.get('mySession');
    console.log(sessionDataLog);
}