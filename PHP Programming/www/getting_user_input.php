<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <!--To take user input, first we'll need to setup a form.
       A Form is a special element in HTML which allows user input and can allow
       the users to pass the information to the PHP program.-->
     <form action="getting_user_input.php" method="get">
     <!--It tells what we are going to do with the form.-->
       Name: <input type="text" name="name"> <br>
       Age: <input type="number" name="age"> <br>
       <input type="submit">
     </form>
     <br>
     The entered name is:
     <?php
       echo $_GET["name"];
       /*This will allow us to get the information that got submitted.
         It will print the value that got submitted.*/
      ?>
      and the age is:
      <?php
        echo $_GET["age"];
        /*This will allow us to get the information that got submitted.
          It will print the value that got submitted.*/
       ?>
  </body>
</html>
