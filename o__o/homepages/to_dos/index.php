<?php
	$page_slug = substr(dirname($_SERVER["PHP_SELF"]),16); // 16 to start after /o__o/homepages/
	require_once($page_slug.".php");
?>
