<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/main.css">
	<title><?php echo $pageTitle; ?></title>
</head>
<body>
	<header>
		<h1><a href="/index.php">Your Community Garden</a></h1>
		<?php
			if($user)
			{
			?>
			<nav>
				<ul>
					<li>Welcome <?php echo $user->firstname . " " . $user->lastname; ?>!</li>
					<li><a href="/plants">Plants</a></li>
					<?php
						if((int)$user->userTypeId > 1) {
							echo '<li><a href="/userAdmin">User Admin</a></li>';
						}
					?>
					<li><a href="logout">Logout</a></li>
				</ul>
			</nav>
			<?php
			}
		?>
	</header>
	