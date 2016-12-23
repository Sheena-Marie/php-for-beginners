<?php
// Files to be included
  include "db.php";
  include "functions.php";
  include 'includes/header.php';
?>

<?php
// Function to Update the Table - Found in functions.php
  UpdateTable();
?>

    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Update</h1>

          <form class="" action="login_update.php" method="post">
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
                // Function to show all the data. Found in functions.php
                  showAllData();
                ?>

              </select>
            </div>

            <input type="submit" name="submit" value="Update" class="btn btn-info">

          </form>

      </div>
<?php include 'includes/footer.php'; ?>
