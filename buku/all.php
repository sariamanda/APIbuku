<?php
include '../koneksi.php';
/**
 * @var $connection PDO
 */
//Prepare query
$query = "SELECT * FROM buku";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
//jalankan query
$results = $statement->fetchAll();
//output JSON
header('Content-Type: application/json');
echo json_encode($results);
