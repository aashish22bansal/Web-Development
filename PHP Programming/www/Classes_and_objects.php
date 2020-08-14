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
        var $title;
        var $author;
        var $pages;
      }

      $book1 = new Book;// This is an object.
      // An object is an instance of a class.
      $book1->title = "Harry Potter";
      $book1->$author = "JK Rowling";
      $book1->pages = 400;

      $book2 = new Book;// This is an object.
      $book2->title = "Lord of the Rings";
      $book2->$author = "Tolkien";
      $book2->pages = 700;

      echo $book1->title;
      echo $book1->author;
     ?>
  </body>
</html>
