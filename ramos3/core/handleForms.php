<?php  

require_once 'dbConfig.php';
require_once 'models.php';


if (isset($_POST['insertApplicantBtn'])) {
	$insertapplicant = insertNewapplicant($pdo,$_POST['firstName'], $_POST['lastName'], $_POST['position'], $_POST['gender'], $_POST['email'], $_POST['address'], $_POST['nationality']);

	if ($insertapplicant) {
		$_SESSION['message'] = "Successfully inserted!";
		header("Location: ../index.php");
	}
}


if (isset($_POST['editApplicantBtn'])) {
	$editapplicant = editapplicant($pdo,$_POST['firstName'], $_POST['lastName'], $_POST['position'], $_POST['gender'], $_POST['email'], $_POST['address'], $_POST['nationality'], $_GET['id']);

	if ($editapplicant) {
		$_SESSION['message'] = "Successfully edited!";
		header("Location: ../index.php");
	}
}

if (isset($_POST['deleteApplicantBtn'])) {
	$deleteapplicant = deleteapplicant($pdo,$_GET['id']);

	if ($deleteapplicant) {
		$_SESSION['message'] = "Successfully deleted!";
		header("Location: ../index.php");
	}
}

if (isset($_GET['searchApplicantBtn'])) {
	$searchForAapplicant = searchForAapplicant($pdo, $_GET['searchInput']);
	foreach ($searchForAapplicant as $row) {
		echo "<tr> 
				<td>{$row['id']}</td>
				<td>{$row['firstName']}</td>
				<td>{$row['lastName']}</td>
				<td>{$row['position']}</td>
				<td>{$row['gender']}</td>
				<td>{$row['email']}</td>
				<td>{$row['address']}</td>
				<td>{$row['nationality']}</td>
			  </tr>";
	}
}

?>
