<?php
require_once "views/MainView.php";
	
$view = new MainView();
$view->showHeader("Your Community Garden");

?>
	<section>
		Hello World
	</section>
<?php
	
$view->showFooter();
?>