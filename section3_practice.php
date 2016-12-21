<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
*/

if (2 > 3) {
  echo "Nope, try again, Dummy!";
} elseif (3 > 6) {
  echo "Seriously? Work on your coding";
} else {
  echo "I love PHP!";
}

echo "<hr>";

/*
	Step 2: Make a forloop  that displays 10 numbers
*/

for ($loop=0; $loop < 11; $loop++) {
  echo $loop . "<br>";
}

echo "<hr>";

/*
	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

$number = 100;

switch($number){
  case $number < 20:
    echo "It's less than 20";
    break;
  case $number < 30:
    echo "It's less than 30";
    break;
  case $number < 40:
    echo "It's less than 40";
    break;
  case $number == 50:
    echo "It's equal to 50";
    break;
  case $number > 200:
    echo "It's over 200!";
    break;

  default:
    echo "It's actually 100!";
    break;
}



?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
