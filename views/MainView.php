<?php

	class MainView {
		
		public function showHeader($pageTitle) {
			include "views/html/header.inc";
		}
		
		public function showFooter() {
			include "views/html/footer.inc";
		}
		
		public function showIndexPlants($plants) {
			include "views/html/indexPlants.inc";
		}
		
		public function showPlantDetail($plant) {
			include "views/html/plantDetail.inc";
		}
	}

?>