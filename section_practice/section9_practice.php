<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<?php
// setting the cookie
$cookieName = '9PracticeSession';
$value = 100;
$expiration = time() + (60*60*24*7);

setcookie($cookieName, $value, $expiration);

// creating the session
session_start();

$_SESSION['name'] = "This is the name of the session";
?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">



	<?php

  // Creating a link with an id
	$id= 42;
	$link = 'The meaning of life, the universe and everything is...';

	/*  Create a link saying Click Here, and set
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

	?>

<a href="9.php?id=<?php echo $id; ?>">
	<?php echo $link; ?>
</a>
<br>
<?php print_r($_GET); ?>

<?php
// Showing the cookie on the screen
echo "<hr>";
if(isset($_COOKIE['9PracticeSession'])) {
	echo $_COOKIE['9PracticeSession'];
}

echo "<hr>";
echo $_SESSION['name'];
?>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
