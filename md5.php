<?php 

// Generate an md5of a random number in order to test your WAMP and introduce you to seeded random //numbers
// All you have to do is find the code by setting the seed number to 1234


// set the seed

$a = 1234; 

srand($a);

//convert the random number into a string then convert into an md5 hash

$b = rand();
$c = strval($b);  // Note the md5 function only works on strings not numbers.
$d = md5($c);

// Echo " ", $d;

if ($d != "af6da7288a0c1656c52c17af8f0c27d4"){
      Echo  "You need to change the seed number!";
  // Echo " ", $d;
  }
  else {

Echo " ", "SUCCESS!!. ","  ";
echo "<br>";
}
?>
