<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>

    <?php

    $name = array('Sheena', 'Bob', 'Sian');

    print_r($name);

    echo "<br/>";

    // echo $name[2] . "<br>";

    $names = array('first_name' => 'Sheena', 'last_name' => 'Takkenberg');

    print_r($names);

    echo "<br/>";

    echo $names['first_name'];

    echo "<br>";

    echo $names['first_name'] . ' ' . $names['last_name'];


     ?>

  </body>
</html>
