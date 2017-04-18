<?php
			include("connection.php"); //Establishing connection with our database
			session_start();
			$domein = "";
			$extensieselectie = "";
			$error = "";
			$username = $_SESSION['username'];
			
			// EMAIL sectie (Bij reservering) 
			
			$to = '';
			$subject = 'Reservering voor sebbie';
			$message = 'Er is een reservering geplaats';
			
			$toklant = '';
			$subjectklant = 'Reservering voor klant';
			$messageklant = 'U heeft een reservering geplaats';
			
			
			
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["domein"]) )
		{
			$error = "Vul alstublieft het formulier in";
		}else
		{
			// Define variable
			$domein=$_POST['domein'];
			$extensieselectie = $_POST["extensieselect"];			
			}
	}		
			$url = "https://api.oxxa.com/command.php?apiuser=sebbie&apipassword=BW72VDD&command=domain_check&tld=$extensieselectie&sld=$domein";
			$xml = simplexml_load_file($url);
			
			$domeinnaam = $xml->order[0]->sld;
			$domeinnaamresultaat = $xml->order[0]->status_description;
			
			if (preg_match('/bezet/',$domeinnaamresultaat)) {
			$error = $domeinnaam .'.'.$extensieselectie .' is bezet';
			}
			if (preg_match('/vrij/',$domeinnaamresultaat)) {
			$error = $domeinnaam .'.'. $extensieselectie . ' is mogelijk als domeinnaam, klik op reserveer om te betalen'; 
			}		
			$_SESSION['error_session'] = $error;
	
	
	
	if(isset($_POST["reserveer"]))
	{
		if(empty($_POST["domein"]) )
		{
			$error = "Vul alstublieft een domein in";
		}else
		{
			// Define variable
			$domein=$_POST['domein'];
			$extensieselectie = $_POST["extensieselect"];

			$domeinresult = $domein .'.'. $extensieselectie;
			
			$url = "https://api.oxxa.com/command.php?apiuser=sebbie&apipassword=BW72VDD&command=domain_check&tld=$extensieselectie&sld=$domein";
			$xml = simplexml_load_file($url);
			
			$domeinnaam = $xml->order[0]->sld;
			$domeinnaamresultaat = $xml->order[0]->status_description;
			
			if (preg_match('/bezet/',$domeinnaamresultaat)) {
			$error = $domeinnaam .'.'.$extensieselectie .' is bezet en kan niet worden gereserveerd'; 
			}
			if (preg_match('/vrij/',$domeinnaamresultaat)) {
			
			$query1 = mysqli_query($db, "SELECT klantid FROM users WHERE username='$username'");		
			while ($query1results = mysqli_fetch_assoc($query1))
			{
			$klantid = $query1results['klantid'];

			$query = mysqli_query($db, "INSERT INTO domein (klantid, domeinnaam, date)VALUES ('$klantid','$domeinresult', CURRENT_TIMESTAMP)");
			
			$succes = mail($to, $subject, $message, 'matthew.turkenburg1@hotmail.com');
			$succes = mail($toklant, $subjectklant, $messageklant, 'matthew.turkenburg1@hotmail.com');
			
			if($query) {
			$error = "Het domein is gereserveerd, het proces kunt u bij mijn gegevens inzien.";
			} else {
			$error = "Het domein is al door iemand anders gereserveerd";
			}
			
			}

			
			
			}
			$_SESSION['error_session'] = $error;	
			
			
			
			}
	}


	 
?>
