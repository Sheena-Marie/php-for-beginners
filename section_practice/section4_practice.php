<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php

/*  Step1: Define a function and make it return a calculation of 2 numbers
*/

function exercise1() {
	$number1 = 4;
	$number2 = 4;
	$sum = $number1 + $number2;

	return "The result is: " . $sum;
}

$result = exercise1();
echo $result;

echo "<hr>";


/*
	Step 2: Make a function that passes parameters and call it using parameter values
 */

function exercise2($num1, $num2){
	$answer = $num1 + $num2;
  echo "The result is: " . $answer;
}

exercise2(3, 3);

?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>
