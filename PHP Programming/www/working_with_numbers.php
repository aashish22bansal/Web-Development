<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // You can print numbers directly on screen using the function
      echo 40;
      echo ("<br>");
      echo -10;
      echo ("<br>");
      echo 2.34;
      echo ("<br>");

      // We can also perform some math operation
      echo 5+4; // Instead of printing the same thing it will print the calculated value.
      echo ("<br>");
      echo 5.3 * 6; // We can perform an operation of any integer with a floating point number.
      echo ("<br>");
      /*PHP uses the BODMAS rule to make calculations for any complex expression.*/
      echo 5+4*10;
      echo ("<br>");
      echo (5+4)*10;
      echo ("<br>");

      // We can increment a number using the increment operator.
      $num = 10;
      $num++;
      echo $num;
      echo ("<br>");

      // We can decrement a number using the decrement operator.
      $num = 10;
      $num--;
      echo $num;
      echo ("<br>");

      // We can even use the shorthand form inoder to add some value to the same number.
      $num = 10;
      $num+=25;
      echo $num;
      echo ("<br>");

      /*In PHP, we have something called function which are just some snippets
        of code which can be used to perform certain operations on the */
      // We can find the absolute value of a number using the abs function
      echo abs(-100);
      echo ("<br>");
      // We can calculate the square root of any number using the sqrt function
      echo sqrt(144);
      echo ("<br>");
      // We can compare two numbers and calculate the maximum of two numbers using
      // the max function
      echo max(2,19);
      echo ("<br>");
      // We can compare two numbers and calculate the minimum of two numbers using
      // the min function
      echo min(2,19);
      echo ("<br>");
      // We can even round-off our numbers up/down using the round function using
      // the standard rounding rules.
      echo round(3.2);
      echo ("<br>");
      // We can use another function which will always round-off a number to the
      // higher value no matter what.
      echo ceil(3.2);
      echo ("<br>");
      // We can use another function which will always round-off a number to the
      // lower value no matter what.
      echo floor(3.9);
      echo ("<br>");
     ?>
  </body>
</html>
