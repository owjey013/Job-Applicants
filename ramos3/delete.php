<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Are you sure you want to delete this applicant?</h1>
	<?php $getapplicantByID = getapplicantByID($pdo, $_GET['id']); ?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: 500px;">
		<h2>First Name: <?php echo $getapplicantByID['firstName']; ?></h2>
		<h2>Last Name: <?php echo $getapplicantByID['lastName']; ?></h2>
		<h2>position: <?php echo $getapplicantByID['position']; ?></h2>
		<h2>Gender: <?php echo $getapplicantByID['gender']; ?></h2>
		<h2>email: <?php echo $getapplicantByID['email']; ?></h2>
		<h2>address: <?php echo $getapplicantByID['address']; ?></h2>
		<h2>Nationality: <?php echo $getapplicantByID['nationality']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<input type="submit" name="deleteapplicantBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
			</form>			
		</div>	

	</div>
</body>
</html>