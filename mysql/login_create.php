<?php
// Files to be included
  include 'db.php';
  include 'functions.php';
  include 'includes/header.php'
?>

<?php
  // Function to create a new row in the table. Found in functions.php
  createRows();
?>



    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Create</h1>
        <form class="" action="login_create.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">

          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">

          </div>

          <input type="submit" name="submit" value="Create" class="btn btn-info">

        </form>
      </div>
<?php include 'includes/footer.php'; ?>
