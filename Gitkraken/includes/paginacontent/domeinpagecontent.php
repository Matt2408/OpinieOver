<?php
			$error = $_SESSION['error_session'];
		
?>
      <div class="jumbotron">
	<h2>Domein/Hosting</h2>
	<h4>Op deze pagina kunt u zien of u domein beschikbaar is en kunt u direct het domein + hosting reserveren </br></br>
	
	De prijs voor een domein verschilt, maar de hosting is altijd maar 8 euro! </br></br>
	Reserveer nu! En ontvang direct een facature!
	</h4>


	  <h2>Domein check:</h2>
		
   <form id="contact-form" method="post" action="" novalidate="true" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row"> 
            <div class="col-md-6">
                <div class="form-group">
                    
                    <input id="form_email" type="text" name="domein" class="form-control" placeholder="Het domein zonder extensie " value="<?php if(isset($_POST['domein'])) echo $_POST['domein']; ?>" required="required">
					
					<label for="exampleSelect1">Kies je extensie</label>
					<select class="form-control" id="Select1" name="extensieselect">
					  <option value="nl">.nl</option>
					  <option value="com">.com</option>
					  <option value="be">.be</option>
					  <option value="uk">.uk</option>
					</select>
                </div>
            </div>
			
			<div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success btn-send" value="Bekijk beschikbaarheid">
				<input type="submit" name="reserveer" class="btn btn-primary btn-sm" value="Reserveer">
            </div>

				
				
				<h3><div class="col-md-6">
				<?php
				if (preg_match('/bezet/',$error)) {
				echo '				<div class="alert alert-danger" role="alert">
				<strong></strong> '. $error .'
				</div>';
				} else {
					echo '				<div class="alert alert-success" role="alert">
				<strong></strong> '. $error .'
				</div>';
				}
				
				?>

				
				</div></h3>
				
        </div>
    </div>

</form>
</div>
