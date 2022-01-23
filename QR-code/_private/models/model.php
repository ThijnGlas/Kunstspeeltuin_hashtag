<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getUsers() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `users`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function getBerichten(){
	$connection = dbConnect();
	$sql        = "SELECT * FROM `berichten`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function getBericht($code){
	$connection = dbConnect();
	$sql        = "SELECT * FROM `berichten` WHERE code = '" . $code . "'";
	$statement  = $connection->query( $sql );

	return $statement->fetch();
}

function bewaarBericht($code,$bericht){
	$connection = dbConnect();
	$sql        = "INSERT INTO `berichten` (code, bericht) VALUES (?,?)";
	$statement  = $connection->prepare( $sql );
	$result = $statement->execute([$code, $bericht]);
	return $result;
}