<?php
	

$baris = 10;

$kolom = 3;

	
echo"
	BARIS: $baris
	
<br/>
	
KOLOM: $kolom
	
<br/> 
	";
	

$s = $baris/$kolom;
	
$w = $baris%$kolom;
	
echo"<table>";
	
$num = 1;	
	
	for($i=1; $i<=$s; $i++){
	
		echo"<tr>";	
		
	for($j=1; $j<=$kolom; $j++){
		echo"<td> $num <td>";
			
$num++;	
		
}
echo"</tr>";
	}
	
	if($w>0)
{		
		echo"<tr>";
		
	
	for($j=1; $j<=$w; $j++){
	
		echo"<td> 
$num <td>";
		
	$num++;	
		}
	
	echo"</tr>";
	}
		

	echo"</table>";
?>

<style>


td{
	
border: solid 1px;
	
padding: 1px 15px 1px 15px; 

}
</style>
