// IMPORTING ONLY A FUNCTION
const sum = require("./8_Working_with_Modules_Function_File");

// To include the file containing the function, we will give a path for it
const function_path = require('./8_Working_with_Modules_Function_File');

// We can see what is inside the file using the console as
console.log(function_path);

// Calling the external function
console.log(function_path(1,1));


// IMPORTING CLASS, FUNCTION AND VARIABLES as
const import_everything = require('./8_Working_with_Modules_Class_File');

console.log("The new file contains the following properties: \n");
console.log(import_everything);

// Using invididual entities from the file properties
//Using the Function
console.log(import_everything.sum(1,1));

//Using the Variable
console.log(import_everything.PI);


//Calling the class - useless
console.log(import_everything.someMathObject);


//Calling the class constructor - better
console.log(new import_everything.someMathObject());