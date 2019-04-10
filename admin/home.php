<?php include("header.php"); ?>
<div class='blue-container'>
	<div class="container">
		
	</div>
</div>
<div class="container">
	
	<?php
		if(isset($_GET['m'])) {
			$m=$_GET['m'];
			if($m=='s') {
				echo "<div class='msg smsg'>Successfully Saved. </div>";
			} else if($m=='n') {
				echo "<div class='msg nmsg'> Not Saved. Please try agian. </div>";
			}
			

		} 
	?>

	
</div>
