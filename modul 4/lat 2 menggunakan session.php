<html>
	<head>
		<title>Set Session</title>
	</head>
	
	<body>
		<?php
			//inisialisasi data sesion
			session_start();
			
			//set session jika belum ada
			if (!isset($_SESSION['test'])){
				$_SESSION['test'] = 'value'
			} else {
				echo 'Session nilai session di-set <br />';
				//mencetak nilai sesson test
				echo 'Nilai : ' . $_SESSION['test'] . '<br />';
				
				//mencetak semua elemen session
				print_r($_SESSION);
			}
		?>
	<p>
	Tekan Refresh (F5);
	</body>
</html>