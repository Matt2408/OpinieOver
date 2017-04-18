<?php
include('connection.php');
session_start();

$isadmin = $_SESSION['isadmin'];

if(!isset($isadmin))
{
header("Location: index.php");
}

?>
<?php
	include('includes/admindashboardheader.php');
?>
<?php
	include('includes/paginacontent/reserveringenpagecontent.php');
?>
<?php
	include('includes/footer.php');