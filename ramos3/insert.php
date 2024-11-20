<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>factory</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Edit the applicant!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName">
		</p>
		<p>
			<label for="position">Position</label> 
			<input type="text" name="position">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="text" name="email">
		</p>
		<p>
			<label for="address">Address</label> 
			<input type="text" name="address">
		</p>
		<p>
			<label for="nationality">Nationality</label> 
			<input type="text" name="nationality">
            <input type="submit" name="insertABtn">
		</p>
	</form>
</body>
</html>