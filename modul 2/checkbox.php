<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml : lang="en" lang="en">
<head>
	<title>Data Checkbox</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Hobi
		<input type="checkbox" name="hobby[]" value="Membaca" />Membaca
		<input type="checkbox" name="hobby[]" value="Olahraga" />Olahraga
		<input type="checkbox" name="hobby[]" value="Menyanyi" />Menyanyi
		<br />
		
		<input type="submit" value="ok" />
	</form>

<?php
//Ekstraksi nilai
	if (isset($_POST['hobby'])){
		foreach ($_POST['hobby'] as $key => $val) {
			//echo $key . ' ' .$val . '<br />'; 
			echo $val . '<br />'; 
		}
	}
?>

</body>
</html>