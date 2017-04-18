<?php
$username = $_SESSION['username'];

$sql = "SELECT uid,username, password, email, voornaam, tussenvoegsel, achternaam, straatnaam, huisnummer, postcode, woonplaats, land, bedrijfsnaam, telefoonnummer, klantid FROM users WHERE username='$username'";
			$result = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			?>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
      <div class="jumbotron">
<div class="bd-example" style="overflow-x: scroll;   
overflow-y: hidden;   
white-space: nowrap;">
  <table class="table table-md">
    <thead>
      <tr>
        <th></th>
        <th>Klant-ID</th>
		<th>Gebruikersnaam</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Straatnaam</th>
		<th>Huisnummer</th>
        <th>Postcode</th>
        <th>Woonplaats</th>
        <th>Land</th>
        <th>Bedrijfsnaam</th>
		<th>Telefoonnummer</th>
		<th>Email</th>

      </tr>
    </thead>
    <tbody>
      <tr class="table-active">
        <th scope="row">1</th>
        <td><?php echo $row['klantid']; ?></td>
        <td><?php echo $row['username']; ?></td>
		<td><?php echo $row['voornaam']; ?></td>
		<td><?php echo $row['achternaam']; ?></td>
		<td><?php echo $row['straatnaam']; ?></td>
		<td><?php echo $row['huisnummer']; ?></td>
		<td><?php echo $row['postcode']; ?></td>
		<td><?php echo $row['woonplaats']; ?></td>
		<td><?php echo $row['land']; ?></td>
		<td><?php echo $row['bedrijfsnaam']; ?></td>
		<td><?php echo $row['telefoonnummer']; ?></td>
		<td><?php echo $row['email']; ?></td>
		
      </tr>
    </tbody>
  </table>
</div>
</br>
<button id = "gegevensbutton" class="btn btn-success btn-send">Verander gegevens</button>
<button id = "domeinbutton" class="btn btn-success btn-send">Mijn domeinen</button>
</div>

<script>
$("#gegevensbutton").click(function() {
    $("#gegevens").toggle();
});

$("#domeinbutton").click(function() {
    $("#mijndomein").toggle();
});
</script>

    <div id = "gegevens" class="row marketing" style="display: none;">
    <form id="contact-form" method="post" action="" novalidate="true" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Username</label>
                    <input id="form_name" type="text" name="username" class="form-control" placeholder="Username" required="required" data-error="Username is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			<div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Password</label>
                    <input id="form_lastname" type="password" name="password" class="form-control" placeholder="Password" required="required" data-error="Password is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Voornaam</label>
                    <input id="form_name" type="text" name="voornaam" class="form-control" placeholder="Voornaam" required="required" data-error="Voornaam is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			<div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Tussenvoegsel</label>
                    <input id="form_lastname" type="text" name="tussenvoegsel" class="form-control" placeholder="Tussenvoegsel" required="required" data-error="Tussenvoegsel is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

		 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Achternaam</label>
                    <input id="form_name" type="text" name="achternaam" class="form-control" placeholder="Achternaam" required="required" data-error="Achternaam is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			<div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Straatnaam</label>
                    <input id="form_lastname" type="text" name="straatnaam" class="form-control" placeholder="Straatnaam" required="required" data-error="Straatnaam is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

		 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Huisnummer</label>
                    <input id="form_name" type="number" name="huisnummer" class="form-control" placeholder="Huisnummer" required="required" data-error="Huisnummer is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			<div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Postcode</label>
                    <input id="form_lastname" type="text" name="postcode"class="form-control" placeholder="Postcode" required="required" data-error="Postcode is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>		

		 <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Woonplaats</label>
                    <input id="form_name" type="text" name="woonplaats" class="form-control" placeholder="Woonplaats" required="required" data-error="Woonplaats is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			<div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Land</label>
                    <input id="form_lastname" type="text" name="land" class="form-control" placeholder="Land" required="required" data-error="Land is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>				

		<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Bedrijfsnaam</label>
                    <input id="form_name" type="text" name="bedrijfsnaam" class="form-control" placeholder="Bedrijfsnaam" required="required" data-error="Bedrijfsnaam is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			<div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Telefoonnummer</label>
                    <input id="form_lastname" type="tel" name="telefoonnummer" class="form-control" placeholder="Telefoonnummer" required="required" data-error="Telefoonnummer is verplicht." pattern="[0-9]*>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>	
		
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Email</label>
                    <input id="form_name" type="text" name="email" class="form-control" placeholder="Email" required="required" data-error="Email is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success btn-send" value="Submit" >
            </div>
						<div class="col-md-12">
                <?php
				echo $error;
				?>
            </div>
        </div>

		</form>
		</div>
	
<?php
$sqldomein = "SELECT uid,username, password, email, voornaam, tussenvoegsel, achternaam, straatnaam, huisnummer, postcode, woonplaats, land, bedrijfsnaam, telefoonnummer, domein.domeinnaam, users.klantid, domein.betaald, domein.live FROM users JOIN domein ON users.klantid = domein.klantid WHERE username='$username'";

$resultdomein = mysqli_query($db,$sqldomein);

while($row = mysqli_fetch_array($resultdomein,MYSQLI_BOTH)) {
$klantenid[] = $row['klantid'];
$klantendomeinnamen[] = $row['domeinnaam'];
$klantenbetaald[] = $row['betaald'];
$klantenlive[] = $row['live'];
}
?>

	
	<div id = "mijndomein" style="display: none;">
	<div class="bd-example" style="overflow-x: scroll;   
overflow-y: hidden;   
white-space: nowrap;">
  <table class="table table-md">
    <thead>
      <tr>
        <th></th>
        <th>Klant-ID</th>
		<th>Domeinnaam</th>
        <th>Betaald</th>
        <th>Live</th>


      </tr>
    </thead>

	<?php 
	// meerdere domeinen*
	$max = sizeof($klantenid);
	for($i = 0; $i < $max;$i++)
	{
	?>
    <tbody>
      <tr class="table-active">
        <th scope="row">1</th>
        <td><?php echo $klantenid[$i] ?></td>
        <td><?php echo $klantendomeinnamen[$i] ?></td>
		<td><?php echo $klantenbetaald[$i] ?></td>
		<td><?php echo $klantenlive[$i] ?></td>
      </tr>
    </tbody>
	<?php
}
	
	?>
  </table>
</div>
	</div>
