<?php 	define("TITLE","Staff | Vagolia Coffee Shop");
		include("includes/header.php");
 ?>

 	<div id="staffbody">
 		<br>
 		<?php foreach ($staff as $member) {?>

 			<center><div class="st">
 				<ul>
 					<li>Name : <?php echo $member["name"]; ?></li>
 					<li>Age : <?php echo $member["age"]; ?></li>
 					<li>Job : <?php echo $member["job"]; ?></li>
 				</ul><br></div></center><br><br>

 		<?php } ?>



 	</div>


 <?php include("includes/footer.php") ?>