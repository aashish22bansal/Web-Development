<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /*A function is a container which stores a bunch of code designed to perform
        a specific task.*/
      // defining the code.
      function sayHello($name,$age){
        echo "Hello $name, you are $age years old!<br>";
      }

      // calling the function.
      sayHello("A",20);
      sayHello("B",21);
      sayHello("C",22);
     ?>
  </body>
</html>
