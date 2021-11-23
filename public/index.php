<?php
if ((include 'helper/console.php') == TRUE) {
	debug_to_console('console.php included into index.php');
}

$section = $_GET['section'] ?? 'home';
debug_to_console('Get parameter passed by url: ' . $section);

if ($section == 'about-us') {
	include 'controller/aboutUsPage.php';
	debug_to_console('aboutUsPage.php CONTROLLER included into index.php');
} else if ($section == 'contact-us') {
	include 'controller/contactPage.php';
	debug_to_console('contactPage.php CONTROLLER included into index.php');
} else {
	include 'controller/homePage.php';
	debug_to_console('homePage.php CONTROLLER included into index.php');
}


class Customer
{
	/*Props - Those can be seted default or only declared*/

	//PUBLIC	-	All access
	//PRIVATE	-	Class access
	//PROTECTED	-	Extennds class access

	public $id;
	public $name;
	public $email;
	public $balance;


	/*Meths*/

	//Example Magical Functions	-
	public function __construct()
	{
		echo ' >>Constructor';
		debug_to_console('This constructor will always initialize in FIRST place when we instance a class');
	}
	public function __destruct()
	{
		echo ' >>Destructor';
		debug_to_console('This destructor will always initialize at ENDING place when we instance a class');
	}


	//Example Interaction with Class	-	Acces to a prop of a class.
	public function getCustomer($id)
	{

		$this->id = $id;
		return ' >>Einar';
		// return $this->id;
	}
}


$customer = new Customer;

/*Instance the class prop*/
// echo $customer->id;

/*Instance the class meth*/
echo $customer->getCustomer(3);
