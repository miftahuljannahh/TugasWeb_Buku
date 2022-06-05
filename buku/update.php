<?php

include '../koneksi.php';
/**
 * @var $connection PDO
 */
//Prepare query
$isbn = $_POST['ISBN'];
$jumlah = $_POST['Jumlah'];


$query = "UPDATE buku SET Jumlah = ('$jumlah') WHERE ISBN = ('$isbn')";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
//jalankan query
$results = $statement->fetchAll();
//output JSON
header('Content-Type: application/json');
echo json_encode($results);