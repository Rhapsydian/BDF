	<section>
		<div class="welcome">Welcome <?php echo $user['firstname'] . " " . $user['lastname'] ?>! Click here to <a href="logout.php">logout</a>.</div>
		<table>
			<thead>
				<th>Species</th><th>Edible</th><th>Planted</th><th>Harvest</th>
			</thead>
			<?php
			foreach($plants as $key => $plant)
			{
				echo '<tr><td><a href="/plant.php?id=' . htmlspecialchars($plant['plantId']) . '">' . htmlspecialchars($plant['species']) . '</a></td><td>' . htmlspecialchars($plant['edible']) . '</td><td>' . htmlspecialchars($plant['planted']) . '</td><td>' . htmlspecialchars($plant['harvestDate']) . '</td></tr>';
			}
			?>
		</table>
	</section>