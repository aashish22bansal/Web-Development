<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $title = "My First Post";
      $author = "Aashish";
      $wordCount = 10000;
      include "article_header.php"
     ?>

     <?php
      include "useful_tools.php";
      sayHi("Aashish");
      echo("<br>");
      echo $feetinMile;
      ?>
  </body>
</html>
