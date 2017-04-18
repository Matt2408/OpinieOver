<?php
	include('loginscript.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) 
	{
		
	} else {
		header('Location: index.php');
	}
	

?>
<?php
	include('includes/dashboardheader.php');
?>
<?php
	include('includes/paginacontent/artikeldashboardpagecontent.php');
?>
<?php
	include('includes/footer.php');
?>

