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
					<?php 
						if(empty($errors) == true):
					?>
					<div class="large-12 columns text-left">
						<?php if(isset($_GET['new']) == true) : ?>
						<div class="small-9 large-10 columns">
							<p>Application Uploaded Successfully</p>
						</div>
						<?php endif; ?>
					</div>
					<div class="small-12 columns">
						<div class="row collapse">
							<div class="small-3 large-2 columns">
								<span class="prefix">E-mail</span>
							</div>
							<div class="small-9 large-10 columns">
								<input name="email" type="text" <?php if(isset($thread_data['EMAIL'])) echo "value=\"".$thread_data['EMAIL']."\"" ?> readonly placeholder="Enter your email address to continue.">
							</div>
							
						</div>
					</div>
					<?php 
						endif;
					?>
				</div> 
			</fieldset>
		</form>
	</div>
</div>