<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Switch_Statement.php" method="post">
      What is your grade?
      <input type="text" name="grade"><br>
      <input type="submit">
    </form>
    <?php
      $grade = $_POST["grade"];
      function grade_comment($grade)
      {
        switch($grade)
        {
          case "A": echo("You did amazing!");
                    break;
          case "B": echo("You did good!");
                    break;
          case "C": echo("Well, you could do better.");
                    break;
          case "D": echo("Well, that it isn't good.");
                    break;
          case "E": echo("That isn't good at all.");
                    break;
          case "F": echo("You failed!");
                    break;
          default:  echo("Invalid Grade Input!");
                    break;
        }
      }
      grade_comment($grade);

     ?>
  </body>
</html>
