<?php
// Files to be included
  include "db.php";
  include "functions.php";
?>

<?php
 // Function to delete a row. Found in functions.php
  deleteRows();
?>

<?php include 'includes/header.php' ?>

    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>

          <form class="" action="login_delete.php" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
              <select name="id">

                <?php
                // Function ot show the id number of a row. Found in functions.php
                  showAllData();
                ?>

              </select>
            </div>

            <input type="submit" name="submit" value="Delete" class="btn btn-info">

          </form>

      </div>
<?php include 'includes/footer.php'; ?>
