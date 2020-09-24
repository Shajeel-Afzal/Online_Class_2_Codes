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
	$radius = 5.5;
	$isPassed = true; // Boolean

	// ------ String Contactination ------

	echo "<br><br><br>";
	echo "------ String Contactination ------";

	$firstName = "Shajeel";
	$lastName = "Afzal";

	echo "<br>";

	$fullName = $firstName." ".$lastName;
	echo $fullName;

	$str = "100";
	$int = 200;

	$sum = $str + $int; 
	echo "<br>";
	echo $sum;

	// ------ Variable Variables ------

	echo "<br><br><br>";
	echo "------ Variable Variables ------";

	$a = "hi";
	$hi = "bye";
	echo "<br>";
	echo $$a; 

	// ------ Arithmetic Operations ------

	echo "<br><br><br>";
	echo "------ Arithmetic Operations ------";
	echo "<br><br><br>";

	$num1 = 7;
	$num2 = 10;

	echo $num1 + $num2;
	echo "<br>";
	echo $num1 - $num2;
	echo "<br>";
	echo $num1 * $num2;
	echo "<br>";
	echo $num1 / $num2;
	echo "<br>";
	echo $num2 % $num1;

	echo "<br><br><br>";
	echo "------ Increment Operations (++) ------";
	echo "<br><br><br>";

	$i = 0;
	$i++; // post increment
	$i++; // post increment

	echo $i;
	echo "<br>";
	echo $i++; // post increment (This will output 2)
	echo "<br>";
	echo $i; // 3

	++$i; // pre increment 

	echo "<br>";
	echo $i; // 4

	echo "<br>";
	echo ++$i; // 5

	echo "<br><br><br>";
	echo "------ Decrement Operator (--) ------";
	echo "<br><br><br>";

	$y = 0;
	$y--; // -1;

	echo "<br>";
	echo $y--; // -1

	echo "<br>";
	echo $y; // -2

	echo --$y; // -3

	echo "<br><br><br>";
	echo "------ Assignment Operator (=) ------";
	echo "<br><br><br>";

	$z = 0;
	$z = $z + 20; // 20
	$z += 20; // $z = $z + 20;
	$z -= 20; // $z = $z - 20;
	$z *= 20; // $z = $z * 20;
	$z /= 20; // $z = $z / 20;
	$z %= 20; // $z = $z % 20;

	echo "<br><br><br>";
	echo "------ Comparision Operator ------";
	echo "<br><br><br>";

	// == (Equal to Operator)
	// != (Not equal to)
	// <> (Not equal to)
	// === (Equal to Opreator, Compares value and Data Type)

	$ab = "20";
	$c = 20;

	echo "<br>";
	echo $ab == $c; // true

	echo "<br>";
	echo $ab === $c; // false

	echo $ab != $c; // false
	echo $ab !== $c; // true

	echo "<br><br><br>";
	echo "------ Logical Operator ------";
	echo "<br><br><br>";

	// AND : && (Rerturns true if both variables are true)
	// OR  : || (Returns trueif either one of the variable is true)
	// NOT : !
	// XOR : Xor (Return true if either of the operand is true, but not both)

	echo "<br>";
	echo true && true; // 
	echo true || false; // true
	echo !true; // false
	echo true xor false; // true
	echo true xor true; // false


?>