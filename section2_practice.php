<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>


		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">


<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative


			 */


		$number1 = 10;
		$number2 = 20;

		echo 'The result is '; echo $number1 + $number2;

		echo "<br>";

		$first_array = array(1, 2, 3);
		$second_array = array('first_number' => 1, 'second_number' => 2, 'third_number' => 3);

		print_r($first_array);
		echo "<br>";
		print_r($second_array);
		echo "<br>";
		echo $second_array['first_number'] . $second_array['second_number'] . $second_array['third_number'];


		?>



		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
