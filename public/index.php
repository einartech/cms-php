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

	private $id;
	private $name;
	protected $email;
	private $balance;


	/*Meths*/

	//Example Magical Functions	-
	public function __construct($id, $name, $email, $balance)
	{
		$this->id 		= $id;
		$this->name 	= $name;
		$this->email 	= $email;
		$this->balance 	= $balance;
	}

	public function getEmail()
	{
		return $this->email;
	}
}


// $customer = new Customer(1, 'Einar Sanchez', 'einartech@gmail.com', 0);

// // echo $customer->name;
// echo $customer->getEmail();

class Subscriber extends Customer
{
	/*Props*/
	public $plan;

	/*Meths*/
	public function __construct($id, $name, $email, $balance, $plan)
	{
		parent::__construct($id, $name, $email, $balance);
		$this->plan = $plan;
	}

	public function getEmail()
	{
		return $this->email;
	}
}
