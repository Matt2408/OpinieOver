<?php
	include('loginscript.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: dashboard.php');
	}	
	

?>
<?php
	include('includes/header.php');
?>
<?php
	include('includes/paginacontent/loginpagecontent.php');
?>
<?php
	include('includes/footer.php');
?>