<?php

	// echo statement
	echo "Starting PHP!";
	echo "Another Statement!";
	echo "<h1>Testing!</h1>";

	// Two type of Comments: Singline Line, Multiple Line

	// Multiple Line Comments
	
	/*
		This is the multiple lines comment!
		Another Lines.
	*/

	// ----- variables ------

	// $variable_name = value;
	$name = "Shajeel Afzal";
	$education;
	$education = "Software Engineer;";
	$name = "Muhammad Afzal";

	/* Variable Naming Rules
	1- All variables have $ sign in the 
	start

	2- A variable name must start with a
	letter or understore

	3- A variable name cannot start with 
	a number!

	4- A variable name can only contain
	alpha-numeric characters and 
	underscore ( _ )

	5- Variable names are case sensitive
	$name | $NAME
	
	Examples:
	$course; < Valie 
	$0patient; < invalid
	$person type; < Inavlid
 
	*/

	// ---- constants ----
	// define(name, value);

	define(PI, 3.14);
	echo PI;

	define(distancetomoon, 384400, true);
	echo distancetomoon;
	echo "<br>";
	echo DISTANCETOMOON;

	echo "<br>";
	echo DISTANCETOmoon;

	// ----- Data Types -----
	$string1 = "Hello World!"; // string data type
	$moonDistance = 384400; // number data type

?>