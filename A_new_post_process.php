<?php

if(isset($_POST['submit'])){
	include('A_config.php');

	$judul = $_POST['judul'];
	$tanggal = $_POST['tanggal'];
	$konten = $_POST['konten'];

	$query = mysql_query("insert into post values('', '$judul', '$tanggal', '$konten')") or die(mysql_error());
	if ($query) {
		header('location:A_index.php');
	}

}
?>