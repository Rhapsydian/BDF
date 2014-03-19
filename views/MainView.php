<?php

	class MainView {
		
		public function showHeader($pageTitle) {
			include "views/html/header.inc";
		}
		
		public function showFooter() {
			include "views/html/footer.inc";
		}
		
		public function showIndex($errorMessage = '') {
			include "views/html/login.inc";
		}
		
		public function showPlants($user,$plants) {
			include "views/html/plants.inc";
		}
		
		public function showPlantDetail($plant) {
			include "views/html/plantDetail.inc";
		}
		
	}

?>