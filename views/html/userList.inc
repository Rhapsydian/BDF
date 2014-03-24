	<section>
		<table>
			<thead>
				<th>Name</th>
				<th>Username</th>
				<th>Dob</th>
				<th>Status</th>
				<th>User Level</th>
				<th>Date Added</th>
				<th>Options</th>
			</thead>
		<?php
			foreach($data['users'] as $key => $user) {
				echo '<tr>' . '<td>' . $user['firstname'] . ' ' . $user['lastname'] . '</td>' .
					'<td>' . $user['username'] . '</td>' .
					'<td>' . $user['dob'] . '</td>' .
					'<td>' . $user['userStatusID'] . '</td>' .
					'<td>' . $user['userTypeId'] . '</td>' .
					'<td>' . $user['createdDate'] . '</td>' .
					'<td><a href="/userEdit.php?id=' . $user['userid'] . '">Edit</a> <a href="/userRemove.php?id=' . $user['userid'] . '">Remove</a></td>' .
					'</tr>';
			}
		?>
		</table>
		<a href="/userAdd.php">+ Add User</a>
	</section>