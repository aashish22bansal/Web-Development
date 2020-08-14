<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="If_Statement.php" method="post">
       Num1: <input type="number" name="num1"> <br>
       Num2: <input type="number" name="num2"> <br>
       <input type="submit">
     </form>
    <?php
      function checkGenderHeight($isMale,$isTall)
      {
        if($isMale && $isTall)
        {
          echo "You are a Tall Male!";
        }
        elseif($isMale && !$isTall)
        {
          echo "You are a Short Male!";
        }
        elseif(!$isMale && $isTall){
          echo "You are Tall Female!";
        }
        else
        {
          echo "You are a Short Female!";
        }
      }

      function getMax($num1, $num2)
      {
        if($num1>$num2)
        {
          return $num1;
        }
        elseif($num2>$num1)
        {
          return $num2;
        }
        elseif($num1==$num2)
        {
          echo("Both the numbers are equal.");
          return;
        }
      }
      $isMale = true;
      $isTall = false;
      echo checkGenderHeight($isMale,$isTall);
      echo("<br>");
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      echo "The maximum number is: ";
      echo getMax($num1,$num2);
     ?>
  </body>
</html>
