<?php
	require_once './koneksi.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seleksi</title>
</head>

<body>
<?php
	$sql = 'SELECT * FROM mahasiswa';
	$res = mysql_query($sql);
	if ($res) {
		if (mysql_num_rows($res)) { ?>
		<table border="1" cellspacing="1" cellpadding="5">
	    	<tr>
            	<th> No </th>            
    			<th width="100"> NIM </th>
            	<th width="150"> Nama </th>
            	<th> Alamat </th>
        	</tr>
			<?php
			$i = 1;
			while ($row = mysql_fetch_row($res)) { ?>
        		<tr>
            		<td>
                		<?php echo $i; ?>
                	</td>
                	<td>
                		<?php echo $row[0]; ?>
                	</td>
                	<td>
                		<?php echo $row[1]; ?>
                	</td>
                	<td>
                		<?php echo $row[2]; ?>
                	</td>
             	</tr>
             	<?php 
			 	$i++;
			}
			 ?>
		</table>
    <?php
	} else {
		echo 'Data Tidak Di Temukan';
	}
	mysql_close($res);
	}
?>
</body>
</html>
