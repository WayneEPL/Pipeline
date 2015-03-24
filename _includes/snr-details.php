<div class="row">
	<div class="large-10 medium-12 small-12 columns text-center small-centered">
		<h1>SRN Entry for</h1>
		<p><?php echo $_POST['email']; ?></p>
		<form action="" method="post" data-abide>
			<fieldset>
				<legend>SRN Entries</legend>
				<div class="row">
					<div class="large-12 columns text-left">
						<?php 
							if(empty($errors) == false):
								output_errors($errors);
							endif;
						?>
					</div>
					<?php 
						if($thread_list):
					?>
					<table width="100%">
						<thead>
							<tr>
								<th>
									SL NO
								</th>
								<th>
									ENTRY NO
								</th>
								<th>
									SRN
								</th>
								<th>
									Upload Date
								</th>
								<th>
									Last Mod Date
								</th>
								<th>
									****
								</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$i = 1;
							foreach ($thread_list as $key) {
								$thread_data = thread_data($key);
								$request_data = request_data($thread_data['SRN'],'SRN');
						?>
							<tr <?php if($thread_data['STATUS'] == 1) echo "class=\"build-success\""; elseif($thread_data['STATUS'] == 2) echo "class=\"build-inprocess\"";  ?>>
								<th><?php echo $i; $i++; ?></th>
								<th><?php echo $thread_data['SL_NO']; ?></th>
								<th><?php echo $thread_data['SRN']; ?></th>	
								<th><?php echo date("d-M-Y H:i",strtotime($thread_data['UPLOAD_TIME'])) ?></th>	
								<th><?php if(strtotime($request_data['MOD_TIME'])>0) echo date("d-M-Y  H:i",strtotime($request_data['MOD_TIME'])); else echo "N.A";?></th>	
								<th><?php if($thread_data['STATUS'] == 1) echo "<a href=\"SRR/".$request_data['FILE_NAME']."\" class=\"lable success\" >Download</a>"; else echo "<span class=\"lable secondary\" >***</span>";?></th>
							</tr>
						<?php
							}
						?>
						</tbody>
					</table>
				<?php else: ?>
					<p>No SRN Entries found for the given email address.</p>
				<?php endif; ?>
			</fieldset>
		</form>
	</div>
</div>
