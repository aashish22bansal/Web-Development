<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /*In Associative Array functions we can no just store simple values but
        also key-value Associative pairs.

        We are mapping one value to another value.

        Make sure that the keys are unique because if you try to echo a value
        with the same key then it will cause a confusion and will not work. the
        values can be same however.*/
      $grades = array("A"=>1,"B"=>2,"C"=>3);

      // We can access information as:
      echo $grades["C"];
      echo("<br>");

      // We can modify the information for the key-value pair as:
      $grades["B"] = 4;
      echo $grades["B"];
      echo("<br>");

      // We can count the number of elements using the count() function.
      echo count($grades);
      echo("<br>");
     ?>
  </body>
</html>
