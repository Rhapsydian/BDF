	<section>
		<form action="/userAdmin/edit?id=<?php echo $user->userid; ?>" method="post">
			<input type="hidden" name="userid" id="userid" value="<?php echo $user->userid; ?>">
			<label for="firstname">First name</label><input type="text" name="firstname" id="firstname" value="<?php echo $user->firstname; ?>"><br>
			<label for="lastname">Last name</label><input type="text" name="lastname" id="lastname" value="<?php echo $user->lastname; ?>"><br>
			<label for="username">Username</label><input type="text" name="username" id="username" value="<?php echo $user->username; ?>"><br>
			<label for="password">Password</label><input type="password" name="password" id="password" value=""><br>
			<label for="dob">Dob</label><input type="text" name="dob" id="dob" value="<?php echo $user->dob; ?>"><br>
			<label for="userStatusID">User Status</label><input type="text" name="userStatusID" id="userStatusID" value="<?php echo $user->userStatusID; ?>"><br>
			<label for="userTypeId">User Level</label><input type="text" name="userTypeId" id="userTypeId" value="<?php echo $user->userTypeId; ?>"><br>		
			<input type="submit" value="submit">
		</form>
	</section>