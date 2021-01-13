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
}