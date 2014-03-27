	<section>
		<h2>Plant List:</h2>
		<table>
			<thead>
				<th>Species</th><th>Edible</th><th>Planted</th><th>Harvest</th>
			</thead>
			<?php
			foreach($plants as $key => $plant)
			{
				echo '<tr><td><a href="/plant?id=' . htmlspecialchars($plant->plantId) . '">' . htmlspecialchars($plant->species) . '</a></td><td>' . htmlspecialchars($plant->edible) . '</td><td>' . htmlspecialchars($plant->planted) . '</td><td>' . htmlspecialchars($plant->harvestDate) . '</td></tr>';
			}
			?>
		</table>
	</section>