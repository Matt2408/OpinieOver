<?php
include('connection.php');
session_start();

$isadmin = $_SESSION['isadmin'];

if(!isset($isadmin))
{
header("Location: index.php");
}

include('includes/admindashboardheader.php');
include('includes/paginacontent/admindashboardpagecontent.php');
include('includes/footer.php');
?>