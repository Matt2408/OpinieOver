<?php
include("connection.php"); //Establishing connection with our database	
	
$order = $_GET['action'];
	
if ($order === "pending") {
			$query2="UPDATE users SET username='pending' WHERE uid='24'";
			$query2result = mysqli_query($db,$query2);
			
} 

if ($order === "cancel") {
		$query2="UPDATE users SET username='cancel' WHERE uid='24'";
		$query2result = mysqli_query($db,$query2);
}

if ($order === "new_ppt") {
		$query2="UPDATE users SET username='paid' WHERE uid='24'";
		$query2result = mysqli_query($db,$query2);
}

		echo "true";

?>
