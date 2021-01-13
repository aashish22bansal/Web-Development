import { Template } from 'meteor/templating';
import { ReactiveVar } from 'meteor/reactive-var';
import { Mongo } from 'meteor/mongo';
import { Tasks } from '..imports//api/tasks.js';

import '../main.html';
import { Resolutions } from '../imports/api/tasks';
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
            reso = Resolutions.find();
            console.log('The obtained resolutions are: ');
            console.log(reso);
            return reso;
        }
    });
    Template.body.events({
        'submit .new-resolution': function(event){
            var title = event.target.title.value;
            console.log('Checking the events function');
            Resolutions.insert({
                title: title,
                createdAt: new Date()
            });
            event.target.title.value = "";
            console.log('Checking the events function');
            return false;
        }
    });/*
    Tracker.autorun(function () {
        console.log(newColl.find().fetch());
      });*/
}

if(Metero.isServer){
    Meteor.startup(function(){
        //code
    });
}