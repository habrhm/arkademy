<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
	include "koneksi.php";
	$id=$_POST['id'];
	$hobby_id = $_POST['hobby_id'];
	$category_id = $_POST['category_id'];
	$name=$_POST['name'];
	$hobby = $_POST['hobby'];
	$category = $_POST['category'];
	
	mysqli_query($koneksi,"UPDATE nama SET name= '$name' WHERE id = $id");
	mysqli_query($koneksi,"UPDATE hobi SET name= '$hobby' WHERE id_hobby = $hobby_id");
	mysqli_query($koneksi,"UPDATE kategori SET name= '$category' WHERE id_category = $category_id");

	
	header('location:index.php');
?>