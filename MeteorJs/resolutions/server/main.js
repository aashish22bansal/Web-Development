import { Meteor } from 'meteor/meteor';
import { Resolutions } from '../imports/api/tasks.js'

Meteor.startup(() => {
    // code to run on server at startup
    /*
    if(Resolutions.find().count() <=0 ){
        for(let i = 0 ; i < Resolutions.find().count(); i++){
            Tasks.insert({_id: `${i}`, text: `text ${i}`})
        }
    }*/
});
