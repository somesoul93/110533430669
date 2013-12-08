<!DOCTYPE html>
<html>
	<head>
	<title>DEMO LOGIN</title>
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
	<?php 
		if(isset($_POST['user'])&&isset($_POST['pass'])){
			if($_POST['user']=='melin'&&$_POST['pass']=='melin'){
				echo "
				<script>
					alert('Selamat Datang Melin');
				</script> ";
			}else{
				echo "
				<script>
					alert('Username atau Password Salah!!!');
				</script>";
			}
		}
	?>
	
	<form name="loginform" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
		<div class="isi">
			<div class="dalam">
				<h1>LOGIN</h1>
			</div>
			<hr color="#00008e" />
			<div class="dalam">
				<label>Username</label>
				<input type="text" name="user" id="user" autofocus />
				<label>Password</label>
				<input type="password" name="pass" />
				<input type="submit" value="Login" />
			</div>
		</div>
	</form>
	
	<script>
		function validateForm(){
			var us=document.forms["loginform"]["user"].value;
			if (us==null || us==""){
				alert("Username Belum Diisi");
				document.getElementById("user").focus();
			  	return false;
			}
			var pas=document.forms["loginform"]["pass"].value;
			if (pas==null || pas==""){
				alert("Password Belum Diisi");
				document.getElementById("pass").focus();
			  	return false;
			}
			var alphaExp = /^[a-zA-Z]+$/;
				if(us.match(alphaExp)){
					if(pas.match(alphaExp)){
					return true;
				}else{
					alert("Password Harus Berupa Huruf");
					document.getElementById("user").focus();
				return false;
				}
			}else{
				alert("Username Harus Berupa Huruf");
				document.getElementById("user").focus();
				return false;
			}
		}
	</script>
	</body>
</html>