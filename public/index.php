<?php
if ((include 'helper/console.php') == TRUE) {
	debug_to_console('console.php included into index.php');
}
if ((include 'controller/homePage.php') == TRUE) {
	debug_to_console('homePage.php included into index.php');
}
