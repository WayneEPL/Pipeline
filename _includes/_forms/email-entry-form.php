<div class="row">
	<div class="large-8 medium-10 small-12 columns text-center small-centered">
		<h1>Pipeline</h1>
		<p>Free From docoument management system</p>
		<form action="upload.php" method="post" data-abide>
			<fieldset>
				<legend>Applicant Details</legend>
				<div class="row">
					<div class="large-12 columns text-left">
						<?php 
							if(empty($errors) == false):
								output_errors($errors);
							endif;
						?>
					</div>
					<div class="small-12 medium-10 columns">
						<input name="email" type="text" <?php if(isset($_POST['email'])) echo "value=\"".$_POST['email']."\"" ?> required placeholder="Enter your email address to continue.">
					</div>
					<div class="small-12 medium-2 columns">
						<input type="submit" class="button expand tiny" value="Submit">
					</div>
			</fieldset>
		</form>
	</div>
</div>
