<?php
// Nav menu items
$isadmin = $_SESSION['isadmin'];

if(isset($isadmin))
{
$navItems = array(
	array(
		'slug' => "index.php",
		'title' => "Home"
	),
		array(
		'slug' => "artikelkopen.php",
		'title' => "Artikelkopen"
	),
		array(
		'slug' => "domeinpage.php",
		'title' => "Domein/Hosting"
	),	
		array(
		'slug' => "mijngegevens.php",
		'title' => "Mijn gegevens"
	),
		array(
		'slug' => "admindashboard.php",
		'title' => "Admin-Dashboard"
	),
);
} else {

$navItems = array(
	array(
		'slug' => "index.php",
		'title' => "Home"
	),
		array(
		'slug' => "artikelkopen.php",
		'title' => "Artikelkopen"
	),
		array(
		'slug' => "domeinpage.php",
		'title' => "Domein/Hosting"
	),	
		array(
		'slug' => "mijngegevens.php",
		'title' => "Mijn gegevens"
	),
		array(
		'slug' => "logout.php",
		'title' => "Logout"
	),
);
}
?>