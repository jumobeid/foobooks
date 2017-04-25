<?php
      $name = $_GET["name"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Greeting Page</title>
  </head>
  <body>
    <?php
    if ($name) {
      echo("<h1>Hello, $name!</h1>");
    } else {
      echo('<h1><label for="input_name">Enter name:</label></h1>');
      echo('<form method="get">');
      echo('<input type="text" name="name" id="input_name"/>');
      echo('<br /><input type="submit" />');
      echo('<br /><input type="reset" />');
    }
?>
  </body>
</html>