<?php

include('db_connect.php');

$stmt = $conn->prepare("SELECT namaWisata, deskripsi, alamat, gambar, fasilitas, kategori, koordinat,jamBuka,jamTutup FROM wisata");

$stmt ->execute();
$stmt -> bind_result($namaWisata, $deskripsi, $alamat, $gambar, $fasilitas, $kategori, $koordinat,$jamBuka,$jamTutup);

$wisata = array();

while($stmt ->fetch()){

    $temp = array();
	
	$temp['namaWisata'] = $namaWisata;
	$temp['deskripsi'] = $deskripsi;
	$temp['alamat'] = $alamat;
	$temp['gambar'] = $gambar;
	$temp['fasilitas'] = $fasilitas;
	$temp['kategori'] = $kategori;
	$temp['koordinat']= $koordinat;
	$temp['jamBuka']= $jamBuka;
	$temp['jamTutup']= $jamTutup;	

	array_push($wisata,$temp);
	}

	echo json_encode($wisata);

?>