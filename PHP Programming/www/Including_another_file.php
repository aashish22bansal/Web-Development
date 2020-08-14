<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /*
        If we want to include some other files then we can just use the include
        function and then we have use the content stored in those files in this
        file.
      */
      include "header.html"
    ?>
    <p>Hello World</p>
    <!--This part of the file will include HTML code which will come between
        the header and the footer.-->
    <?php
      include "footer.html"
     ?>
  </body>
</html>
