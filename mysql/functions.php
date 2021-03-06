<?php

  include 'db.php';

  // Create an entry in the Database
  function createRows(){
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Used to escape all the data inside the field, it helps prevent SQL injection.
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "INSERT INTO users(username,password) VALUES('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('query FAILED' . mysqli_error($connection));
    } else {
      echo "Record Created";
    }
  }

  // Functions to read the rows of the Database.
  function readRows(){
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('query FAILED' . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) {
      print_r($row);
    }
  }

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
    if(isset($_POST['submit'])) {
      global $connection;
      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];

      // Used to escape all the data inside the field, it helps prevent SQL injection.
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);
      $id = mysqli_real_escape_string($connection, $id);

      $query = "UPDATE users SET ";
      $query .= "username = '$username', ";
      $query .= "password = '$password' ";
      $query .= "WHERE id = $id";

      $result = mysqli_query($connection, $query);

      if(!$result) {
        die('Query FAILED' . mysqli_error($connection));
      } else {
        echo "Record Updated";
      }
    }
  }

  // Function to delete a row in the table database.
  function deleteRows() {
    if(isset($_POST['submit'])) {
      global $connection;
      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];

      // Used to escape all the data inside the field, it helps prevent SQL injection.
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);
      $id = mysqli_real_escape_string($connection, $id);

      $query = "DELETE FROM users ";
      $query .= "WHERE id = $id";

      $result = mysqli_query($connection, $query);

      if(!$result) {
        die('Query FAILED' . mysqli_error($connection));
      } else {
        echo "Record Deleted";
      }
    }
  }


?>
