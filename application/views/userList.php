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
			foreach($users as $key => $user) {
				echo '<tr>' . '<td>' . $user->firstname . ' ' . $user->lastname . '</td>' .
					'<td>' . $user->username . '</td>' .
					'<td>' . $user->dob . '</td>' .
					'<td>' . $user->userStatusID . '</td>' .
					'<td>' . $user->userTypeId . '</td>' .
					'<td>' . $user->createdDate . '</td>' .
					'<td><a href="/userAdmin/edit?id=' . $user->userid . '">Edit</a> <a href="/userAdmin/remove?id=' . $user->userid . '">Remove</a></td>' .
					'</tr>';
			}
		?>
		</table>
		<a href="/userAdmin/add">+ Add User</a>
	</section>