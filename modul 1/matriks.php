<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Matriks Cell</title>
</head>

<body>
<?php


function Tabel($baris, $kolom) 
{ 
	echo '<h2 align="center">Tabel '. $baris .' baris dan ' . $kolom . ' kolom</h2>'; 
	echo '<table align="center" width = 50% border=5>'; 

for($b = 0; $b < $baris; $b++) { 
echo "<tr>\n"; 

for($k = 0; $k < $kolom; $k++) { 
echo "<td height=30 width=10%></td>\n"; 
} 
echo "</tr>\n"; 
} 
echo "</table>\n"; 
} 
Tabel(4,8); //memanggil fungsi Tabel

?>
</body>
</html>
