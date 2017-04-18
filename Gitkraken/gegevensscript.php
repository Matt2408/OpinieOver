<?php
	include("connection.php"); //Establishing connection with our database
	$error = ""; //Variable for storing our errors.
	
	session_start();
		
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"])|| empty($_POST["email"])|| empty($_POST["voornaam"])|| empty($_POST["tussenvoegsel"])|| empty($_POST["achternaam"])|| empty($_POST["straatnaam"])|| empty($_POST["huisnummer"])|| empty($_POST["postcode"])|| empty($_POST["woonplaats"])|| empty($_POST["land"])|| empty($_POST["bedrijfsnaam"])|| empty($_POST["telefoonnummer"]))
		{
			$error = "Voer een nieuwe username en password";
		}else
		{
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$voornaam=$_POST['voornaam'];
			$tussenvoegsel=$_POST['tussenvoegsel'];
			$achternaam=$_POST['achternaam'];
			$straatnaam=$_POST['straatnaam'];
			$huisnummer=$_POST['huisnummer'];
			$postcode=$_POST['postcode'];
			$woonplaats=$_POST['woonplaats'];
			$land=$_POST['land'];
			$bedrijfsnaam=$_POST['bedrijfsnaam'];
			$telefoonnummer=$_POST['telefoonnummer'];			
			
			$oldusername = $_SESSION['username'];
			$id = 0;
			
			// To protect from MySQL injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($db, $username);
			$password = mysqli_real_escape_string($db, $password);
			$password = md5($password);
			
			
			$query1 = mysqli_query($db, "SELECT users.uid, domein.domeinnaam FROM users INNER JOIN domein ON users.klantid = domein.klantid WHERE username='$oldusername'");
			while ($query1results = mysqli_fetch_assoc($query1))
			{
			$id = $query1results['uid'];
			$domein = $query1results['domeinnaam'];
			}	
			
			// Alles hierboven hier toevoegen 
			$query2="UPDATE users SET username='$username' , password= '$password', email= '$email', voornaam= '$voornaam' , tussenvoegsel= '$tussenvoegsel', achternaam= '$achternaam', straatnaam= '$straatnaam', huisnummer= '$huisnummer', postcode= '$postcode', woonplaats= '$woonplaats', land= '$land', bedrijfsnaam= '$bedrijfsnaam', telefoonnummer= '$telefoonnummer' WHERE uid='$id'";
			$query2result = mysqli_query($db,$query2);
			
		session_destroy();
		header("Location: login.php?error=gegevensaangepast");
		
		}
	}

?>