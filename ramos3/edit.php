<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Factory</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getapplicantByID = getapplicantByID($pdo, $_GET['id']); ?>
	<h1>Edit the applicant!</h1>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getapplicantByID['firstName']; ?>">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getapplicantByID['lastName']; ?>">
		</p>
		<p>
			<label for="firstName">Position</label> 
			<input type="text" name="position" value="<?php echo $getapplicantByID['position']; ?>">
		</p>
		<p>
			<label for="firstName">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getapplicantByID['gender']; ?>">
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="text" name="email" value="<?php echo $getapplicantByID['email']; ?>">
		</p>
		<p>
			<label for="firstName">Address</label> 
			<input type="text" name="address" value="<?php echo $getapplicantByID['address']; ?>">
		</p>
		<p>
			<label for="firstName">Nationality</label> 
			<input type="text" name="nationality" value="<?php echo $getapplicantByID['nationality']; ?>">
            <input type="submit" value="Save" name="editapplicantBtn">
		</p>
	</form>
</body>
</html>