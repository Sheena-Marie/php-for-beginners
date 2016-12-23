<?php

  include 'db.php';

  // To show the data in the table on the page
  function showAllData() {
    global $connection;
    // Remember if you're using a global variable inside a function, call it as a GLOBAL element (otherwise, it thinks that it's a LOCAL variable).
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('query FAILED' . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];

      echo "<option value='$id'>$id</option>";
    }
  }


  // To be able to update the table
  function UpdateTable() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result) {
      die('Query FAILED' . mysqli_error($connection));
    }
  }

?>
