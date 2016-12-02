<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>


    <?php

    $number = 38;

    // switch (variable) {
    //   case 'value':
    //     # code...
    //     break;
    //
    //   default:
    //     # code...
    //     break;
    // }

    switch($number){
      case 34:
        echo "it is 34";
        break;
      case 37:
        echo "it is 37";
        break;
      case 28:
        echo "it's 28";
        break;
      case 40:
        echo "it's 40";
        break;

      default:
        echo "couldn't find anything";
        break;
    }

    ?>

  </body>
</html>
