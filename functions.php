<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>

    <?php

    function say_Something(){
      echo "Hello, Sheena, is this working?";
    }

    // say_Something();
    // THIS WILL RUN THE CODE!!!! Very similar to Javascript.

    function calculate(){
      echo 456 + 345;
    }

    function init(){
      say_Something();
      echo "<hr>";
      calculate();
    }

    init();




    ?>

  </body>
</html>
