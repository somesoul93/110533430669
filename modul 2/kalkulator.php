<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml : lang="en" lang="en">
<head>
	<title>Kalkulator Sederhana</title>
	<style>
		body{
			background-color: #f6cdcd;
		}
		.isi{
			font-family : comic sans MS;
			size : 12px;
			background-color: #fceefb;
			margin: 100px auto;
			padding: 5px 20px 40px 20px;
			width: 350px;
			border: solid 5px #00008e;
		}
		.isi h1{
			font-family : comic sans MS;
			size : 12px;
			color: #00008e;
		}
		.isi label{
			display:block;
		}
		.isi input{
			display:block;
			margin: 5px 0 0 0;
			padding: 5px;
		}
		.dalam{
			margin: 0px auto;
			width: 250px;
		}
			
	</style>
</head>

	<body>
	<form name="kalkul" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
		<div class="isi">
			<div class="dalam">
				<h1>LOGIN</h1>
			</div>
			<hr color="#00008e" />
			<div class="dalam">
				<label>Nilai 1</label>
				<input type="text" name="nilai1" autofocus />
				<select name="operator">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
				</select>
				<label>Nilai 2</label>
				<input type="text" name="nilai2" />
				<input type="submit" value="=" />
			</div>
		</div>
	</form>
	
	<?php  
		$nilai1 = $_POST['nilai1'];  
		$nilai2 = $_POST['nilai2'];  
		$operator = $_POST['operator'];
		
		if ($operator == "+")  {  
			$hasil = $nilai1 + $nilai2;  
			$tanda = "+";
			echo $_POST['$hasil'];   
		}  
		else if ($operator == "-")  {  
			$hasil = $nilai1 - $nilai2;  
			$tanda = "-";
			echo $_POST['$hasil'];
		}  
		else if ($operator == "*")  {  
			$hasil = $nilai1 * $nilai2;  
			$tanda = "*"; 
			echo $_POST['$hasil'];
		}  
		else if ($operator == "/")  {  
			$hasil = $nilai1 / $nilai2;  
			$tanda = "/";
			echo $_POST['$hasil'];
		} 
			
	?>
</body>
</html>