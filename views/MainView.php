<?php

	class MainView {
		public function show($inc,$data = array())
		{
			include "views/html/${inc}.inc";
		}
	}

?>