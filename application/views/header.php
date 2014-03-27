<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/main.css">
	<title><?php echo $data['pageTitle']; ?></title>
</head>
<body>
	<header>
		<h1><a href="/index.php">Your Community Garden</a></h1>
		<?php
			if($data['user'])
			{
			?>
			<nav>
				<ul>
					<li>Welcome <?php echo $data['user']['firstname'] . " " . $data['user']['lastname']; ?>!</li>
					<li><a href="/plants.php">Plants</a></li>
					<?php
						if((int)$data['user']['userTypeId'] > 1) {
							echo '<li><a href="/userAdmin.php">User Admin</a></li>';
						}
					?>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
			<?php
			}
		?>
	</header>
	