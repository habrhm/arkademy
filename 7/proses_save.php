<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->	
<?php
include "koneksi.php";
$name = $_POST['name'];
$hobby = $_POST['hobby'];
$category = $_POST['category'];
$result1 = mysqli_query($koneksi,"Select * from kategori where name = '$category'");
if (mysqli_num_rows($result1) < 1){
	mysqli_query($koneksi,"INSERT INTO kategori (id_category, name) VALUES (NULL, '$category')");
	$result1 = mysqli_query($koneksi,"Select * from kategori where name = '$category'");
}
$category_id = null;
if($r = mysqli_fetch_array($result1))
	$category_id = $r['id_category'];

$result2 = mysqli_query($koneksi,"Select * from hobi where name = '$hobby'");
if (mysqli_num_rows($result2) < 1){
	mysqli_query($koneksi,"INSERT INTO hobi (id_hobby, name, id_category) VALUES (NULL, '$hobby', $category_id)");
	$result2 = mysqli_query($koneksi,"Select * from hobi where name = '$hobby'");
}

$hobby_id = null;
if($r = mysqli_fetch_array($result2))
	$hobby_id = $r['id_hobby'];

mysqli_query($koneksi,"INSERT INTO nama (id, name, id_hobby) VALUES (NULL, '$name', $hobby_id)");

header('location:index.php');
?>