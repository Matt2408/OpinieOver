      <div class="jumbotron">
		<div class="container">

    <form id="contact-form" method="post" action="" novalidate="true" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row"> 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Username *</label>
                    <input id="form_email" type="text" name="username" class="form-control" placeholder="Please enter your username *" required="required" data-error="Valid username is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Password</label>
                    <input id="form_phone" type="password" name="password" class="form-control" placeholder="Please enter your password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success btn-send" value="submit">
            </div>
						<div class="col-md-12">
                <?php
				echo $error;
				if (isset($_GET['error'])) {
				echo "Je gegevens zijn aangepast";
				}
				?>
            </div>
        </div>
    </div>

</form>
</div>
      </div>