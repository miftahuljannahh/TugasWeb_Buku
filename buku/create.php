<?php
include '../koneksi.php';
/**
 * @var $connection PDO
 */
//Prepare query
$isbn = $_POST['ISBN'];
$judul = $_POST['Judul'];
$pengarang = $_POST['Pengarang'];
$jumlah = $_POST['Jumlah'];
$tanggal = $_POST['Tanggal'];
$abstrak = $_POST['Abstrak'];

$query = "INSERT INTO buku (ISBN, Judul, Pengarang, Jumlah, Tanggal, Abstrak) 
VALUES ('$isbn', '$judul', '$pengarang', '$jumlah', '$tanggal', '$abstrak')";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
//jalankan query
$results = $statement->fetchAll();
//output JSON
header('Content-Type: application/json');
echo json_encode($results);
