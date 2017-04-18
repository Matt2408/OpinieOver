<?php
include('connection.php');
session_start();

echo $_SESSION['isadmin'];

$isadmin = $_SESSION['isadmin'];

$user_check=$_SESSION['username'];
$ses_sql = mysqli_query($db,"SELECT username FROM users WHERE username='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['username'];

if(isset($isadmin))
{
header("Location: http://opinie-over.nl/admindashboard.php");
}

if(!isset($user_check))
{
header("Location: index.php");
}
?>