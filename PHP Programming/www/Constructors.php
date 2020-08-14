<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Book{
        // now we are going to break this into several attributes.
        // A constructor is a function which will be called whenever we create
        // an object of the class.
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages){
          // $this is a key word in php which is going to refer to the current object.
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }
      }

      $book1 = new Book("Harry Potter","JK Rowling",400);// This is an object.
      // An object is an instance of a class.
      $book1->title = "Hunger Games";
      $book2 = new Book("Lord of the Rings","Tolkien",700);// forming with the constructor

      echo $book1->title;
      echo $book1->author;
     ?>
  </body>
</html>
