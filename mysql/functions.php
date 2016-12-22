<?php

  include 'db.php';

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

?>
