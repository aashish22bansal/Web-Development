const sum = (num1 ,num2) => num1 + num2;

const PI = 3.14;

class someMathObject{
    constructor(){
        console.log("Object Created!");
    }
}

/*
We can all the class function and the variable to another file using properties. */
/*
module.exports.sum = sum;
module.exports.PI = PI;
module.exports.someMathObject = someMathObject;
*/

// We can even create a single entity instead of creating all these
module.exports = {sum: sum, PI: PI, someMathObject: someMathObject};