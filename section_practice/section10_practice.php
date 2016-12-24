<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">


	<?php

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll




	*/

	class Dog {

		// elements that make up the dog:
		var $breed;
		var $eyeColour = "brown";
		var $legs = 4;
		var $tail;
		var $furColour = "brown";
		var $nose = "wet, black nose";
		var $size;

		function showPug(){
			$this -> breed = "Pug";
			$this -> tail = "small and curly";
			$this -> furColour = "brown and black";
			$this -> size = "small";
		}
	}

	// checking to see if the class has been created.
	if(class_exists("Dog")) {
		echo "Woof! Class 'Dog' has been created!";
	} else {
		echo "Meow!";
	}

	echo "<hr>";

	// Creating the object 'pug'.
	$pug = new Dog();

	// using the showPug method to build the object pug on the screen.
  $pug -> showPug();
	echo "<h4>Breed " . $pug -> breed . "</h4>";
  echo "The eye colour is: " . $pug -> eyeColour . "<br>";
	echo "It has: " . $pug -> legs . " legs<br>";
	echo "It has: " . $pug -> tail . " tail<br>";
	echo "It has: " . $pug -> furColour . " fur<br>";
	echo "It has a " . $pug -> nose . " nose<br>";
	echo "It is a " . $pug -> size . " dog";

	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
