	<section>
		<?php
			if(count($data['plant']) === 1)
			{
				echo '<h2>' . $data['plant'][0]['species'] . '</h2>';
				echo '<p>' . 
					'Edible: ' . $data['plant'][0]['edible'] . '<br>' .
					'Planted: ' . $data['plant'][0]['planted'] . '<br>' .
					'Estimated Havest Date: ' . $data['plant'][0]['harvestDate'] . '<br>' .
				'</p>';
			}
			else
			{
				echo '<p>We\'re sorry, there has been a mistake.  <a href="/plants.php">Please click here to return to the home page.</a></p>';
			}
		?>
	</section>