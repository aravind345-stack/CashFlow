<?php
	define("TITLE", "Team");
	
	include('includes/header.php');
?>
	
	<div id="team-members" class="cf">
	
		<h1>SEE 360 Team at Penn State</h1>
		<p> <strong>We are Industrial Engineers</strong></p>
	

		<hr>
		
		<?php foreach ($teamMembers as $member) { ?>
			
			<div class="member">
				
				<h2><?php echo $member["name"]; ?></h2>
				<p><?php echo $member["position"]; ?></p>
			</div><!-- member -->
		
		<?php } ?>
		
	</div><!-- team-members -->
	
	<hr>
			







<?php
include('includes/footer.php');

?>
