<?php

include('db_connect.php');

$stmt = $conn->prepare("SELECT penulis,gambar,judul,isi FROM berita");

$stmt ->execute();
$stmt -> bind_result($penulis,$gambar,$judul,$isi);

$berita = array();

while($stmt ->fetch()){

    $temp = array();
	
	$temp['penulis'] = $penulis;
	$temp['gambar'] = $gambar;
	$temp['judul'] = $judul;
	$temp['isi'] = $isi;

	array_push($berita,$temp);
	}

	echo json_encode($berita);

?>