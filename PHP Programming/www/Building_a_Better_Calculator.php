<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Building_a_Better_Calculator.php" method="post">
      First Number:  <input type="number" step="0.000000000001" name="num1"><br>
      Operator:      <input type="text" name="Operator"><br>
      Second Number: <input type="number" step="0.00000000000s1" name="num2"><br>
      <input type="submit">
    </form>
    <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["Operator"];
      function cal_result($num1,$num2,$op)
      {
        if($op=="+")
        {
          return $num1+$num2;
        }
        elseif($op=="-")
        {
          return ($num1-$num2);
        }
        elseif($op=="*")
        {
          return ($num1*$num2);
        }
        elseif($op=="/")
        {
          if($num2==0)
          {
            echo "Division by 0 is not possible";
            return;
          }
          else
          {
            return ($num1/$num2);
          }
        }
        elseif($op=="%")
        {
          return ($num1%$num2);
        }
        else
        {
          echo("Error: Not a valid operator!");
          return;
        }
      }

      echo("Result: ");
      echo cal_result($num1,$num2,$op);

     ?>
  </body>
</html>
