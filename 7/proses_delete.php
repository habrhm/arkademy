<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$modal=mysqli_query($koneksi,"Delete FROM nama WHERE id='$id'")or die(mysql_error());
	header('location:index.php');
?>