<ul>
	<?php
		foreach ($navItems as $item) {
			$temp = $item["title"];
			$temp1 = $item["slug"];
			echo "<li><a href=\"$temp1\">$temp</a></li>";
		}
	?>
</ul>
