<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Student{
        var $name;
        var $major;
        var $gpa;

        function __construct($name,$major,$gpa){
          $this->name = $name;
          $this->major = $major;
          $this->gpa = $gpa;
        }

        function hasHonors(){
          if($this->gpa > 8.0){
            return "true";
          }
          return "false";
        }
      }

      $student1 = new Student("A","Business",8.0);
      $student2 = new Student("B","Art",8.1);

      echo $student1->hasHonors();
      echo("<br>");
      echo $student2->hasHonors();
     ?>
  </body>
</html>
