<?php
// Catatan:
// Jika perlu, sesuaikan nama user dan password
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'myweb';
	$cnn = myweb_connect($host, $user, $pass);
	if (!$cnn) {
	exit('Koneksi Gagal');
	}
	$db = myweb_select_db($db);
	if (!$db) {
	exit('Gagal Memilih Database');
	}
?>