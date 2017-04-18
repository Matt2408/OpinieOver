
<?php

$sqldomein = "SELECT uid,username, password, email, voornaam, tussenvoegsel, achternaam, straatnaam, huisnummer, postcode, woonplaats, land, bedrijfsnaam, telefoonnummer, domein.domeinnaam, users.klantid, domein.betaald, domein.live FROM users JOIN domein ON users.klantid = domein.klantid";

$resultdomein = mysqli_query($db,$sqldomein);

while($row = mysqli_fetch_array($resultdomein,MYSQLI_BOTH)) {
$klantenid[] = $row['klantid'];
$klantendomeinnamen[] = $row['domeinnaam'];
$klantenbetaald[] = $row['betaald'];
$klantenlive[] = $row['live'];
}
?>

<div class="bd-example">
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
	
	<div id="checkbox-container">
    <tbody>
	  <tr class="table-active">
        <th scope="row">1</th>
        <td><?php echo $klantenid[$i] ?></td>
        <td><?php echo $klantendomeinnamen[$i] ?></td>
		<td><input type="checkbox" id="option1<?php echo $i;?>" data-toggle="toggle" data-on="Wachtend" data-off="Betaald" data-onstyle="danger" data-offstyle="success" data-size="mini"></td>
		<td><input type="checkbox" id="option2<?php echo $i;?>" data-toggle="toggle" data-on="Wachtend" data-off="Betaald" data-onstyle="danger" data-offstyle="success" data-size="mini"></td></tr>
		</div>
		</tbody>  </div>
	<?php
}
	?>
  </table>
</div>



  
<script>
var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {},
    $checkboxes = $(":checkbox");

$checkboxes.on("change", function(){
  $checkboxes.each(function(){
    checkboxValues[this.id] = this.checked;
  });
  
  localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
});

// On page load
$.each(checkboxValues, function(key, value) {
  $("#" + key).prop('checked', value);
});
</script>