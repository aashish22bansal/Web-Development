<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Return_Statements.php" method="post">
      Enter a number: <input type="number" name="num">
      <input type="submit">
    </form>
    <?php
      function cube($num){
        return ($num * $num * $num);
      }

      $cubeResult = cube($_POST["num"]);

      echo "The cube of the number is: $cubeResult<br>";
     ?>
  </body>
</html>
