<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Choose your favorite fruits:<br>
    <form action="Using_Checkboxes.php" method="post">
      <input type="checkbox" name="fruit[]" value="apples">Apples<br>
      <input type="checkbox" name="fruit[]" value="oranges">Oranges<br>
      <input type="checkbox" name="fruit[]" value="pears">Pears<br>
      <input type="submit">
    </form>
    <?php
      $fruits = $_POST["fruit"];
      echo $fruits[0];
     ?>
  </body>
</html>
