<?php
	define("TITLE", "Menu");
	
	include('includes/header.php');
?>
	
	<div id="menu-items">
	
		<h1>Our  Menu</h1>
		
		<p><em>Click any menu item to learn more about it.</em></p>
		
		<hr>
		
		<ul>
			<!--
				syntax: foreach ($array as $key => $value)
				http://www.tuxradar.com/practicalphp/5/3/0
			-->
			<?php foreach ($menuItems as $dish => $item) { ?>
				
				<li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?></a> </li>
			
			<?php } ?>
		</ul>
		
	</div><!-- team-members -->
	
	<hr>
			
<?php include('includes/footer.php'); ?>