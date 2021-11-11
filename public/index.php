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
