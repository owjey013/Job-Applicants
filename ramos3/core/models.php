<?php  

require_once 'dbConfig.php';

function getAllapplicants($pdo) {
	$sql = "SELECT * FROM factory 
			ORDER BY id ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getapplicantByID($pdo, $id) {
	$sql = "SELECT * from factory WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function searchForAapplicant($pdo, $searchQuery) {
	
	$sql = "SELECT * FROM factory WHERE 
			CONCAT(firstName,lastName,position,gender,
				email,address,nationality,date_added) 
			LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$searchQuery."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}



function insertNewapplicant($pdo, $firstName, $lastName, $position, 
	$gender, $email, $address, $nationality) {

	$sql = "INSERT INTO factory 
			(
				firstName,
				lastName,
				position,
				gender,
				email,
				address,
				nationality,
				date_added
			)
			VALUES (?,?,?,?,?,?,?,?)
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([
		$firstName, $lastName, $position, 
		$gender, $email, $address, 
		$nationality,
	]);

	if ($executeQuery) {
		return true;
	}

}

function editapplicant($pdo, $firstName, $lastName, $position, $gender, 
	$email, $address, $nationality, $id) {

	$sql = "UPDATE factory
				SET firstName = ?,
					lastName = ?,
					position = ?,
					gender = ?,
					email = ?,
					address = ?,
					nationality = ?,
					date_added = ?
				WHERE id = ? 
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$firstName, $lastName, $position, $gender, 
		$email, $address, $nationality, $id]);

	if ($executeQuery) {
		return true;
	}

}


function deleteapplicant($pdo, $id) {
	$sql = "DELETE FROM factory 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}
}




?>