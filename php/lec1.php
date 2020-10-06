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

	echo "<br><br>";
	echo "------ SESSION Super Global------";
	echo "<br><br>";

	/*
		- uses to store information across multiple pages
		- information is not stored on user's computer
		- information is stored on server side
		- information lasts until the browser is closed or we can set the session timeout.
		- session is secure because the information is stored on server side.
		- session_start(); function used to start the session
		- $_SESSION PHP global is used to set session variables.
		- you can remove your session variables manually using the session_unset(); function.
		- session_destroy() can also be used for the same purpose
		- Documentation Link: https://www.php.net/manual/en/reserved.variables.session.php
	*/

	session_start();

	$_SESSION['name'] = "Shajeel Afzal";
	$_SESSION['color'] = "Black";

	echo "<br><br>";
	echo "------ Cookies Super Global------";
	echo "<br><br>";

	/*
		- Cookies are often used to identify users.
		- Cookies are stored on the browser side (in the user computer)
		- Cookies are not secure.
		- Cookies are not meant to store sensitive information.
		- When you visit a website, it can send the cookies as well on the server.
		- Using PHP, we can store and retreive Cookies.
		- To create Cookies we use the function "setcookie();"
		- $_COOKIE superglobal is used to manage cookies in PHP


		sytax:
		setcookie(
			name: to specify the cookie, 
			
			value: to specify the cookie value,
			
			expire: to specify the expiry time (in seconds) of the cookie,
			
			path: specifies the server path of the cookie. "/" then cookie will be available in the entire website.

			domain: specifies the domain of the cookie. For example, abc.com

			secure: to specify whether the cookie should be transmitted on a secure HTTP connection or not.

			httponly: if set to True, the cookie will be accessible through the HTTP protocol only.
		);

		Note: The name parameter is the only one that's required.

		Note: The setcookie function must appear before the 
		<html>

	*/

	$value = "Shajeel Afzal";
	setcookie(
		"user", 
		$value,
		time() + (60 * 60),
		"/"
	);

	if(isset($_COOKIE['user'])){
		echo "Value is:".$_COOKIE['user'];
	} else {
		echo "Cookie is not set!";
	}

	echo "<br><br>";
	echo "------ Objects Oriented Programming (OOP) ------";
	echo "<br><br>";

	/*

		- It is a Programming Style.
		- Objects are created using classes.
		- Class describes what the Object will be
		- Objects are created from classes.
		- You can think of the class a blueprint for creaging multiple different objects.

		PHP Classes:
		- A class can include member variables
		- member variables are also called properties.
		- member variables defines the features of an object.
		- class methods: are used for defining the functions of the object.

		Example: Car Class
			- properties:
				color
				type
				year
				company
				number of seats
			- functions (behaviours)
				accelerate
				stop
				reverse
				turn on lights
				turn off lights
				open door
				close door

	*/

	// creating person classes
	class Person {
		// defining the properties of the class
		public $gender;
		public $age;
		public $height;
		public $education;
		public $occupation;

		// creating the behaviours (functions) of the class
		public function speak(){
			echo "I am speaking!";
		}

		public function sleep(){
			echo "I am sleeping!";
		}

		public function walk(){
			echo "I am walking!";
		}

		public function printProperties(){
			echo "Gender: ".$this->gender."<br>";
			echo "Age: ".$this->age."<br>";
			echo "Height: ".$this->height."<br>";
			echo "Education: ".$this->education."<br>";
			echo "Occupration: ".$this->occupation."<br>";
		}

	}

	// Note: It is a bad practice to make public member variables.

	$zeeshanJaved = new Person();
	
	$zeeshanJaved->gender = "male";
	$zeeshanJaved->age = 24;
	$zeeshanJaved->height = 5.7;
	$zeeshanJaved->education = "BSCS";
	$zeeshanJaved->occupation = "freelancer";

	echo $zeeshanJaved->gender."<br>";
	echo $zeeshanJaved->speak()."<br>";
	echo $zeeshanJaved->printProperties();

	class Student {
		private $name;
		private $semester;
		private $course;
		private $gender;

		public function setName($name){
			$this->name = $name;
		}

		public function getName(){
			return $this->name;
		}
	}

	$rizwanAli = new Student();
	$rizwanAli->setName("Rizwan Ali");

	echo "<br>".$rizwanAli->getName();

	/*

		Constructor and Destructor
		- Both are functions
		- Constructor fuction is called when an object is created;
		- Desctructor function is called when an object is destroyed
		- You can manually destroy the object using the unset function.
		- To create a constructor we use __construct
		- To create a destructor we use __destruct
		- Domentation: https://www.php.net/manual/en/language.oop5.decon.php
		- Constructor is usually used to initialize the member variables. 

	*/

	class Food{
		private $color;

		function __construct($color){
			echo "<br><br>Constructor is called!<br><br>";
			$this->color = $color;
		}

		function __destruct(){
			echo "<br><br>Destructor is called!<br><br>";
		}

		public function getColor(){
			return $this->color;
		}

		public function setColor($color){
			$this->color = $color;
		}
	}

	$orange = new Food("Orange");
	echo $orange->getColor();

	unset($orange);

	echo "<br><br>";
	echo "------ Inheritance in PHP ------";
	echo "<br><br>";

	class Human {
		private $name;
		protected $age;
		public $height;

		public function getName(){
			return $this->name;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function sayHi(){
			echo "<br><br>Hi<br><br>";
		}


	}

	class Doctor extends Human{
		private $speciality;

		public function getSpeciality(){
			$this->speciality;
		}

		public function setSpeciality($name){
			$this->speciality = $name;
		}

		public function showName(){
			echo $this->name;
		}

		public function setAge($age){
			$this->age = $age;
		}

		public function getAge(){
			return $this->age;
		}
	}

	$doctor = new Doctor();
	$doctor->setName("Ahmed Ali");

	echo $doctor->getName();
	$doctor->sayHi();

	/*

		For member variables visibility, we can use three visibility controls:

		1- public:  Makes members accessible within the class, by inheriting, and directly.
		
		2- private: Makes members accessible only by the class that defines them.

		3- protected: Makes members accessible online within the class itself, by inheriting, and by parent class.


	*/

	$doctor->showName();
	$doctor->setAge(30);
	echo "<br>".$doctor->getAge();

	echo "<br><br>";
	echo "------ PHP Interfaces ------";
	echo "<br><br>";

	/*

		An interface specifies a list of methods that a class must implement.

		The interface itself does not contain any method implementation.

		This is the important aspect of interfaces because it allows a method to be handled differently in each class that uses the interface.

		The "interface" keyword is used to define an interface;

		The "implements" keyword is used in a class to implement an interface.

		A class can implement multiple interfaces

		An interface can extend another interface!

		All the methods specified in an interface require public visibility.

	*/

	interface HumanInterface {
		public function eat();
		public function sleep();
		public function shopping();
	}

	interface developerInterface extends HumanInterface{
		public function code();
	}

	class Male implements HumanInterface, developerInterface{
		public function eat(){
			echo "<br>Eating!";
		}

		public function sleep(){
			echo "<br>Sleeping";
		}

		public function shopping(){
			echo "<br>Shopping in 5 minutes!";
		}

		public function code(){
			echo "<br>coding!";
		}
	}

	class Female implements HumanInterface{
		public function eat(){
			echo "<br>Eating!";
		}

		public function sleep(){
			echo "<br>Sleeping";
		}

		public function shopping(){
			echo "<br>Shopping in 5 hours!";
		}
	}

	echo "<br><br>";
	echo "------ PHP Abstract Classes! ------";
	echo "<br><br>";

	/*

		Abstract classes can be inherited but they cannot be instantiated. Meaning that we cannot create object of an Abstract Class!

		A class inheriting from an abstract class must implement all the abstract methods.

		The "abstract" keyword is used to create an abstract class or an abstract method.

		Abstract functions can only appear in an abstract class!

	*/

	abstract class Fruit{
		private $color;

		abstract public function eat();

		public function setColor($color){
			$this->color = $color;
		}
	}

	class Apple extends Fruit{

		public function eat(){
			echo "Eating Apple<br>";	
		}
	}

	$apple = new Apple();
	$apple->eat();

	echo "<br><br>";
	echo "------ static Keyword ------";
	echo "<br><br>";

	/*

		The PHP "static" keyword defines static properties and static methods.

		A static property or method of a class can be accessed without creating an object of that class.

		A static property or method is accessed by using the scope resolution operator (::) between the class name and the property name.

		The "self" keyword is needed to access a static property from a static method in a class definition.

		Objects of a class cannot access static properties in the class but they can access static methods.

	*/

	class MyClass {
		static $myStaticProperty = 10;

		static function printStaticPropertyValue(){
			echo "<br>".self::$myStaticProperty."<br>";
		}
	}

	echo MyClass::$myStaticProperty;
	echo MyClass::printStaticPropertyValue();

	echo "<br><br>";
	echo "------ final Keyword ------";
	echo "<br><br>";

	/*

		The PHP "final" keyword defines method that cannot be overridden in the child class.

		Classes that are defined final cannot be inherited.

	*/

	class ParentClass {
		final function myFunction(){
			echo "<br>Parent Class<br>";
		}
	}

	/*
	
		The following class will produce Fatal error: Cannot override final method ParentClass::myFunction() 
		because myFunction is declared final in the parent class.

	*/

	// class ChildClass extends ParentClass{
	// 	function myFunction(){
	// 		echo "<br>Child Class<br>";
	// 	}
	// }

	final class MyFinalClass {

	}

	/*
		Fatal error: Class TestClass may not inherit from final class
	*/

	// class TestClass extends MyFinalClass{

	// }


?>