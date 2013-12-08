<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Passing By Value</title>

</head>


<body>

<?php

function angka(&angka1++) {
	$angka1++;
}

$angka2=15;

angka(&angka2);
echo &angka2;

?>


</html>

