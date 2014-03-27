	<section>
		<form action="userEdit.php?id=<?php echo $data['user']['userid']; ?>" method="post">
			<input type="hidden" name="userid" id="userid" value="<?php echo $data['user']['userid']; ?>">
			<label for="firstname">First name</label><input type="text" name="firstname" id="firstname" value="<?php echo $data['user']['firstname']; ?>"><br>
			<label for="lastname">Last name</label><input type="text" name="lastname" id="lastname" value="<?php echo $data['user']['lastname']; ?>"><br>
			<label for="username">Username</label><input type="text" name="username" id="username" value="<?php echo $data['user']['username']; ?>"><br>
			<label for="password">Password</label><input type="password" name="password" id="password" value=""><br>
			<label for="dob">Dob</label><input type="text" name="dob" id="dob" value="<?php echo $data['user']['dob']; ?>"><br>
			<label for="userStatusID">User Status</label><input type="text" name="userStatusID" id="userStatusID" value="<?php echo $data['user']['userStatusID']; ?>"><br>
			<label for="userTypeId">User Level</label><input type="text" name="userTypeId" id="userTypeId" value="<?php echo $data['user']['userTypeId']; ?>"><br>		
			<input type="submit" value="submit">
		</form>
	</section>