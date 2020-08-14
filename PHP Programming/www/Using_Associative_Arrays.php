<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Using_Associative_Arrays.php" method="post">
      Enter the name of the student: <input type="text" name="student">
      <input type="submit">
    </form>

    <?php
      $grades = array("A"=>"A+","B"=>"C+","C"=>"B-","D"=>"F");
      echo $grades[$_POST["student"]];
     ?>
  </body>
</html>
