<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /*An Array is a container or a structure which can store multiple pieces
        of information.*/
      // We can store information inside an array using the array() function.
      $friends = array("A","B","C","D");

      // We can access the individual elements by the following way:
      echo $friends[0];
      echo("<br>");

      // You can modify information inside the array by this method:
      $friends[1] = 100;
      echo $friends[1];
      echo("<br>");

      // We can add elements to the array by using the index position one more than the total.
      $friends[4] = "E";
      echo $friends[4];
      echo("<br>");

      // We can find the number of elements in an array using the count function.
      echo count($friends);
      echo("<br>");

     ?>
  </body>
</html>
