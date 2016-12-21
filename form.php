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

$names = array('Sheena', 'Edwin', 'Peter', 'Samid', 'Mohad', 'Maria', 'Jane', 'Tom');

$minimum = 5;
$maximum = 10;

// echo "Hello, " . $username . '. ';
// echo "Your password is: " . $password;

// if (strlen($username) < $minimum) {
//   echo "Username has to be longer than 5 characters";
// }
//
// if (strlen($username) > $maximum) {
//   echo "Username must be less than 10 characters";
// }
//
// if (!in_array($username, $names)) {
//   echo "Sorry, you're not allowed to log in";
// } else {
//   echo "Welcome!" . $username;
// }

if(strlen($username) < $minimum) {
  echo "Username has to be longer than 5 characters";
} elseif (strlen($username) > $maximum) {
  echo "Username has to be 10 characters or less";
} elseif (!in_array($username, $names)) {
  echo "Sorry, that Username was not found";
} else {
  echo "Welcome, " . $username;
}

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
