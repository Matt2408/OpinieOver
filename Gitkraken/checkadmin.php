<?php
include('connection.php');
session_start();

if ($_SESSION['username'] = "test") {

$user_check=$_SESSION['username'];

$ses_sql = mysqli_query($db,"SELECT username FROM users WHERE username='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['username'];

} else {
header("Location: http://opinie-over.nl/index.php");
}
?>