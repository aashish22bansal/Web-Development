import { Template } from 'meteor/templating';
import { ReactiveVar } from 'meteor/reactive-var';
import { Mongo } from 'meteor/mongo';
import { Tasks } from '..imports//api/tasks.js';

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
Resolutions = new Mongo.Collection('resolutions');

if(Meteor.isClient){
    Template.body.helpers({
        resolutions: function(){
            return Resolutions.find();
        }
    });
    Template.body.events({
        'submit .new-resolution': function(event){
            var title = event.target.title.value;

            Resolutions.insert({
                title: title,
                createdAt: new Date()
            });
            event.target.title.value = "";

            return false;
        }
    });
}

if(Metero.isServer){
    Meteor.startup(function(){
        //code
    });
}