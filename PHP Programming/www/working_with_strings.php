<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Prining the information stored in a variable
      $phrase = "Hello";
      echo $phrase;
      echo "<br>";

      // COnverting a given string to lowercase
      echo strtolower($phrase);
      echo("<br>");
      echo strtoupper($phrase);
      echo strtoupper(" dog");
      echo("<br>");

      // We can find the number of characters inside a string using the given function.
      echo strlen($phrase);
      echo ("<br>");

      // We can find the different characters present in our string using the function.
      /*We can find a specific character in any string located at a specific location
        using the string indcies.*/
      echo $phrase[0]; // This will print the first character of the string.
      echo ("<br>");

      // We can even do that with a non-variable string as well.
      echo "Name"[0];
      echo ("<br>");

      // We can even replace certain parts of the string
      $phrase[0] = "B";
      echo $phrase;
      echo ("<br>");

      // We can even replace certain substrings using the function
      echo str_replace("Bello","Bye",$phrase);
      echo("<br>");

      // We can replace a small part of the actual string with another string.
      echo str_replace("B","H",$phrase);
      echo("<br>");

      // We can describe a small substring of a string using the function and
      // grab the substring till the end from the starting from the starting index mentioned.
      echo substr($phrase,3/*Starting index for the substring in the string*/);
      echo ("<br>");
      echo substr($phrase,3,1/*Length till what we want to grab the string*/);
      echo ("<br>");
     ?>
  </body>
</html>
