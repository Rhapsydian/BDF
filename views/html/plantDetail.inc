	<section>
		<?php
			if(count($plant) === 1)
			{
				echo '<h2>' . $plant[0]['species'] . '</h2>';
				echo '<p>' . 
					'Edible: ' . $plant[0]['edible'] . '<br>' .
					'Planted: ' . $plant[0]['planted'] . '<br>' .
					'Estimated Havest Date: ' . $plant[0]['harvestDate'] . '<br>' .
				'</p>';
			}
			else
			{
				echo '<p>We\'re sorry, there has been a mistake.  <a href="/index.php">Please click here to return to the home page.</a></p>';
			}
		?>
	</section>