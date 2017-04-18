<ul class="nav nav-pills pull-right">
<?php
foreach ($navItems as $item) {
	echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
}


?>


</ul>