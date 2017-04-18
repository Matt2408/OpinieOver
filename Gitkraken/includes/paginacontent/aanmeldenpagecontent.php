      <div class="jumbotron">
		<div class="container">

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
                    <input id="form_lastname" type="text" name="postcode" class="form-control" placeholder="Postcode" required="required" data-error="Postcode is verplicht.">
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
                    <input id="form_name" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Email is verplicht.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			
                   <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" name="submit" value="Registeren">
        </div>
				  <div class="col-md-12">
                <?php
				echo $error;
				?>
        </div>
		
	   </div>
		
      </div>
	  
    </form></div> <!-- /container -->
	   