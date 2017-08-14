<?php 
	define("TITLE","Menu| Vagolia Coffee Shop");

	include("includes/header.php");
 ?>

 <div id="menubody">
 	
	 <center><div id="carosal">
	 	<?php 
	 		foreach ($menu as $item) { ?>

	 		<a href="dish.php?item=<?php echo $item["image"]?>"><div><img src="images/<?php echo $item["image"];?>.jpg "/></div></a><br>
	 		<!--<span><?php echo $item["name"]; ?></span><br>
	 		<span><?php echo $item["price"]; ?></span><br>-->
	 			
	 	<?php	} ?>
	 </div></center>

	 
 </div>



 <?php include("includes/footer.php"); ?>