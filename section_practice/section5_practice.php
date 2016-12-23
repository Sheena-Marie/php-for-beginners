<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php


/*  Step1: Use a pre-built math function here and echo it */

$test1 = sqrt(300);

echo round($test1);
echo "<hr>";

/*
	Step 2:  Use a pre-built string function here and echo it */

$myString = "Hi, How's things going??!!";

echo strlen($myString);

echo "<hr>";

/*
	Step 3:  Use a pre-built Array function here and echo it

 */

 $myArray = ['bob', 'Hi', 'angie', 34, '59', 200, $myString];

 print_r($myArray);

 echo "<br>";

 echo "The size of the array is: " . "<br>" . sizeof($myArray) . " items";

 echo "<hr>";

 // added in while watching the video
 $found = in_array($myString, $myArray);

 if($found) {
	 echo "w00t, it worked!";
 } else {
 	echo "Nope, didn't work";
 }

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
