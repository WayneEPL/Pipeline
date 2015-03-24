<div class="row">
	<div class="large-8 medium-10 small-12 columns text-center small-centered">
		<h1>Pipeline</h1>
		<p>Free From docoument management system</p>
		<form action="processor.php" method="post" enctype="multipart/form-data" data-abide>
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
					<div class="small-12 columns">
						<div class="row collapse">
							<div class="small-3 large-2 columns">
								<span class="prefix">E-mail</span>
							</div>
							<div class="small-9 large-10 columns">
								<input name="email" type="text" <?php if(isset($_POST['email'])) echo "value=\"".$_POST['email']."\"" ?> readonly placeholder="Enter your email address to continue.">
							</div>
						</div>
					</div>
					<div class="small-12 columns text-center">
						<div id="drop-box">
							<p>Select Files</p>
						</div>
						<input type="file" name="image" id="upl" />
					</div>
					<div class="large-12 columns">
				      <input type="submit" value="Submit" class="button expand" style="visiblity:hidden" id="submitbutton">
				    </div>	
				</div> 
			</fieldset>
		</form>
	</div>
</div>