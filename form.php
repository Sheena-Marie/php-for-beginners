<?php

if(isset($_POST['submit'])) {
//   echo "It worked!";
// }
// echo "<br>";
// if(isset($_POST['password'])) {
//   echo "Found the password!";
// }
// echo "<br>";
// if(isset($_POST['username'])) {
//   echo "Found the text!!";

$username = $_POST['username'];
$password = $_POST['password'];

echo "Hello, " . $username . '. ';
echo "Your password is: " . $password;

}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forms</title>
  </head>
  <body>

    <form action="form.php" method="post">
      <input type="text" placeholder="Enter Your Username" name="username">
      <br>
      <input type="password" placeholder="Enter Your Password" name="password">
      <br>
      <input type="submit" name="submit">
    </form>

  </body>
</html>
