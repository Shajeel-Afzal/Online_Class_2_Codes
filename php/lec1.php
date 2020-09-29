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

	echo "<br><br>";
	echo "------ Arrays ------";
	echo "<br><br>";

	$student1 = "Rida";
	$student2 = "Hamid";
	$student3 = "Nabila";
	$student4 = "Aqsa";

	// $participents = array();
	// $participents[0] = "Rida";
	// $participents[1] = "Hamid";

	// Note: indexes in array starts from 0 not 1;

	$lectureParticipents = array("Rida", "Hamid", "Nabila", "Aqsa");

	echo "<br>";
	echo $lectureParticipents[2];

	echo "<br><br>";
	echo "------ Associative Arrays ------";
	echo "<br><br>";

	$courses = array("technical" => "HTML<br>CSS<br>Bootstrap<br>PHP<br>MySQL<br>WordPress<br>Fiverr<br>Upwork<br>Freelancer.com<br>", "non-technical" => "Digital Marketing<br>SEO<br>Content Writing");

	$courses["creative"] = "Photoshop<br>illustrator";

	echo "<br>";
	echo $courses["technical"];

	echo "<br>";
	echo $courses["non-technical"];

	echo "<br><br>";
	echo "------ Conditional Statements ------";
	echo "<br><br>";

	// if(condition){
	// 	executes when the condition is true
	// 	// statements;	
	// } else {
	//	executes when the condition is false
	//	// statements
	// }

	$liveStudentsCount = 9;

	if($liveStudentsCount > 10){
		echo "More than 10 students are live!";
	} else if($liveStudentsCount > 20) {
		echo "More than 20 students are live!";
	} else if($liveStudentsCount > 30){
		echo "More than 30 students are live!";
	} else if($liveStudentsCount > 40){
		echo "More than 40 students are live!";
	} else {
		echo "Less than or equal to 10 students are live!";
	}

	echo "<br><br>";
	echo "------ While Loop ------";
	echo "<br><br>";

	// while loop
	// while(condition){
	// 	// loop statement(s)
	// }

	$count = 0;
	while($count < 5){
		echo "<br>Hello World!";
		$count++;
	}

	echo "<br><br>";
	echo "------ Do While Loop ------";
	echo "<br><br>";

	/*
		Syntax: 

		do {
			// code statements;
		} while(condition);
	*/

	$z = 0;
	do{
		echo "Hello World<br>";
		$z++;
	}while($z < 10);

	echo "<br><br>";
	echo "------ For Loop ------";
	echo "<br><br>";

	/*

		for(statement1; statement2; statement3){
			// body: statements
		}

		statement1: executes one time at start.
		statement2: before execution of each iteration
		statement3: after execution of each iteration

		Execution: 	1- statement1, 
					2- statement2, 
					3- body,
					4- statement3,
					5- statement2,

	*/	

	for($a = 0; $a < 10; $a++){
		echo "For Loop".$a."<br>";
	}

	echo "<br><br>";

	for($a = 0; false; $a++){
		echo "For Loop".$a."<br>";	
	}

	echo "<br><br>";

	// for(print("Statement 1<br>"); print("Statement 2<br>"); print("Statement 3")){
	// 	echo "Body";	
	// }

	echo "<br><br>";

	// for($a=0; $b=1; $c=2){
	// 	echo $a;
	// }

	$zz = 0;
	for(;$zz < 20;){
		echo $zz;
		$zz++;
	}

	echo "<br><br>";
	echo "------ For Each Loop ------";
	echo "<br><br>";

	/*
		Syntax:
		foreach(arrayName as $value){
			// statements
		}

		foreach(arrayName as $key => $value){
			// statements
		}
	*/

	$namesList = array("Shahar Bano", "Sanaullah Khan", "Amna Awais");

	foreach($namesList as $n){
		echo $n."<br>";
	}

	echo "<br><br>";

	foreach($namesList as $key => $value){
		echo $key." ".$value."<br>";
	}

	echo "<br><br>";
	echo "------ Switch Statement ------";
	echo "<br><br>";

	/*
		Syntax: 
			switch(expression){
				case 1:
					statements;
					break;
				case 2: 
					statements;
					break;
				default:
					statements;
					break;
			}
	*/

	$age = 1;
	switch($age){
		case 1:
		case 3:
			echo "Age is 1.";
			break;
		case 2:
			echo "Age is 2.";
			break;
		case 20:
			echo "Age is 20.";
			break;
		default:
			echo "No case matched.";
			break;
	}

	// Note that it also works on strings as well.

	echo "<br><br>";
	echo "------ break Statement ------";
	echo "<br><br>";

	$xy = 0;
	while(true){

		if($xy == 10){
			break;
		}

		echo $xy."<br>";
		$xy++;
	}

	echo "<br><br>";
	echo "------ continue Statement ------";
	echo "<br><br>";

	$xyz = 0;
	while(true){
		$xyz++;

		if($xyz == 4){
			continue;
		}

		if($xyz == 10){
			break;
		}

		echo $xyz."<br>";
	}

	echo "<br><br>";
	echo "------ include ------";
	echo "<br><br>";

	/*
		Syntax:
		include 'file path and file name';
	*/

	include 'header.php';

	echo "<br><br>";
	echo "------ require ------";
	echo "<br><br>";

	/*
		require statement is also used for the same purpose.
		But the only difference is that it does not execute 
		the remaining script if the file is missing.
	*/

	echo "<br><br>";
	echo "------ functions ------";
	echo "<br><br>";

	/*

		function functionName(){
			// body: statements
		}
	
	*/

	// creating a new function named sayHello
	function sayHello(){
		echo "Hello!<br>";
		sayHi();
	}

	function sayHi(){
		echo "Hi!<br>";
	}

	// calling the function
	sayHello();
	sayHello();
	sayHello();

	// creating a function that add two numbers
	function addNumbers($num1, $num2){
		echo $num1 + $num2;
		echo "<br>";
	}

	addNumbers(2, 4);
	addNumbers(10, 20);

	function multiplyNumbers($num1, $num2){
		return $num1 * $num2;
		echo "statement after return!";
	}

	$result = multiplyNumbers(2, 4);
	echo $result."<br>";

	echo multiplyNumbers(5, 10);

	echo "<br><br>";
	echo "------ Pre Defined Variables ------";
	echo "<br><br>";

	/*
		$_SERVER, $GLOBALS, $_REQUEST, $_POST, $_GET,
		$_FILES, $_ENV, $_COOKIES, $_SESSION

	*/

	// $_SERVER
	echo $_SERVER['SCRIPT_NAME'];

	// read more: https://www.php.net/manual/en/reserved.variables.server.php

	/* 
		$_GET
	 	- information of the form is stored in this superglobal
	 	- The information of the form submitted with get method is public in the URL
	 	- GET also sets the limit on the amount of information that can be sent (2000 characters)
	 	- GET is not used when form is collecting sensitive information.
	*/

	/* 
		$_POST
	 	- information of the form is stored in this superglobal
	 	- The information of the form submitted with post method is private and secure.
	 	- There is no limit on POST like GET.
	 	- supports advance functionality such as multi-part binary.
	 	- POST method is used when form is collecting sensitive information.
	 	- However the bookmark is not available
	*/

	

?>