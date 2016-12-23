<?php
// Files to be included
  include 'db.php';
  include 'functions.php';
?>

<?php include 'includes/header.php'; ?>

    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Reading the Rows</h1>

    <pre>
      <!-- Shows each entry individually -->
      <?php readRows(); ?>
    </pre>

      </div>
<?php include 'includes/footer.php'; ?>
