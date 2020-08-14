<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Movie{
        public $title;//openly accessible anywhere in the entire program
        private $rating;//can be accessed only inside the class
        /* A visibility attribute is what that helps us make sure
          of what variables should be accessible by the user or
          not.
        */

        function __construct($title,$rating){
          $this->title = $title;
          $this->setRating($rating) = $rating;
        }

        function getRating(){
          return $this->rating;
        }

        function setRating($rating){
          if($rating=="G"||$rating=="PG"||$rating=="PG-13"||$rating=="R"||$rating=="NR"){
            $this->rating = $rating;
          }
          else {
            $this->rating = "NR";
          }
        }
      }

      $avengers = new Movie("Avengers","PG-13");
      $avengers->setRating("R");
      echo $avengers->getRating();
     ?>
  </body>
</html>
