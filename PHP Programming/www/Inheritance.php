<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /* Inheritance is basically where a class can inherit
      */
      class Chef{
        function makeChiken(){
          echo "The Chef is cooking the Chicken.<br>";
        }
        function makeSalad(){
          echo "The Chef is making Salad.<br>";
        }
        function makeSpecialDish(){
          echo "The Chef is making bbq ribs.<br>";
        }
      }

      class ItalianChef extends Chef{
        function makePasta(){
          echo "The Chef is cooking the Pasta.<br>";
        }
        function makeSpecialDish(){
          echo "The Chef is making chicken parm.<br>";
        }
      }
      $chef = new Chef();
      $chef->makeChiken();

      $chef = new Chef();
      $chef->makeSpecialDish();

      $italianChef = new ItalianChef();
      $italianChef->makeChiken();

      $italianChef = new ItalianChef();
      $italianChef->makePasta();

      $italianChef = new ItalianChef();
      $italianChef->makeSpecialDish();
     ?>
  </body>
</html>
