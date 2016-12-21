<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>

    <?php

    $list = [343, 34, 323, 23, 54, 232, 453];

    //sorting Array into order
    sort($list);
    // Prints entire array.
    print_r($list);

    echo "<hr>";

    // Maximum value in the array
    echo max($list);
    echo "<hr>";

    // Minimum value in the array
    echo min($list);
    echo "<hr>";

    ?>

  </body>
</html>
