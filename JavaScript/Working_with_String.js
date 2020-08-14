// Most basic string
document.write('JavaScript is fun.')
document.write("<br>");
document.write("Strings are fun.");

// Storing a string inside a variable
var phrase = "This is a string.";

// Printing the string stored in a variable
document.write("<br>");
document.write(phrase);

// Getting the length of the string
document.write("<br>");
document.write(phrase.length);

// Method to turn the string to uppercase
document.write("<br>");
document.write(phrase.toUpperCase());

// Method to check the character at a specific index
document.write("<br>");
document.write(phrase.charAt(2));

// Method to check the index position of the specified character
// Returns a -1 if the character is not present in the string
document.write("<br>");
document.write(phrase.indexOf("s"));

// Method used to check the position of the character from the end of the string
document.write("<br>");
document.write(phrase.lastIndexOf("a"));

// Method used to check for the substring
/*It takes two parameters where first one is a number which indicates from where 
  we need to start grabbing the string and the second parameter is also a number
  till where we need to stop grabbing the string. */
document.write("<br>");
document.write(phrase.substring(0,3));
document.write("<br>");
document.write(phrase.indexOf("s"),phrase.length);

// Method to check the ending of the string
document.write("<br>");
document.write(phrase.endsWith("string"));

// Method used to check if the string includes a particular part or not as it returns a boolean value.
document.write("<br>");
document.write(phrase.includes("is"));
text = "is";
document.write("<br>");
document.write(phrase.includes("is"));

// We can easily concatenate 2 strings buy just adding them
document.write("<br>");
document.write(phrase+text+".");