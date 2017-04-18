<?php
	include("connection.php"); //Establishing connection with our database
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"])|| empty($_POST["email"])|| empty($_POST["voornaam"])|| empty($_POST["tussenvoegsel"])|| empty($_POST["achternaam"])|| empty($_POST["straatnaam"])|| empty($_POST["huisnummer"])|| empty($_POST["postcode"])|| empty($_POST["woonplaats"])|| empty($_POST["land"])|| empty($_POST["bedrijfsnaam"])|| empty($_POST["telefoonnummer"]))
		{
			$error = "All fields are required.";
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
			$klantid = uniqid();
			
			// To protect from MySQL injection
			$username = mysqli_real_escape_string($db, $username);
			$email = mysqli_real_escape_string($db, $email);
			$password = mysqli_real_escape_string($db, $password);
			$password = md5($password);
			
			//Check username and password from database
			$sql="SELECT username FROM users WHERE username='$username' and password='$password'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			$sql = "SELECT username FROM users WHERE username='$username'";
			$result = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			 
			if(mysqli_num_rows($result) == 1)
			{
			$error = "Sorry...This username already exist..";
			}
			else
			{
			$query = mysqli_query($db, "INSERT INTO users (username, email, password,voornaam,tussenvoegsel,achternaam,straatnaam,huisnummer,postcode,woonplaats,land,bedrijfsnaam,telefoonnummer, klantid)VALUES ('$username', '$email', '$password', '$voornaam', '$tussenvoegsel', '$achternaam', '$straatnaam', '$huisnummer', '$postcode', '$woonplaats', '$land', '$bedrijfsnaam', '$telefoonnummer', '$klantid')");
			if($query)
			{
			$error = "Thank You! you are now registered.";
			}
			}

		}
	}

?>