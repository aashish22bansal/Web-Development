<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="URL_Parameters.php" method="post">
      Name: <input type="text" name="name"><br>
      <input type="submit">
    </form>
    <br><br>

    <?php
      echo $_GET["name"];
     ?>
  </body>
</html>
