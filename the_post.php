<?php

  echo $_POST['name'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>

    <form action="the_post.php" method="post">
      <input type="text" name="name" value="name">
      <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>
