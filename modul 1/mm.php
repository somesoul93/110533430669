<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN” “http://www.w3.org/TR/html4/loose.dtd“>
<html>
<head>
<title>HASIL GENERATE</title>
<meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1?>
</head>
<body>
<?php
$rows = 1;
$columns = 1;
$cells = 1;
?>

<?php $rows = (int) $_POST["RowsTotal"]; ?>
<?php $columns = (int) $_POST["ColumnsTotal"]; ?>
<?php $cells = (int) $_POST["CellsTotal"]; ?>

JUMLAH BARIS <?php echo $rows; ?> rows,<br />
JUMLAH KOLOM <?php echo $columns; ?> columns,<br />
DAN MEMERLUKAN TABEL <?php echo $cells; ?> cells,<br />
<br /><br />
<?php
 $width = $columns * 75;
 echo “<table width=”.$width.” border=1>”;
 $rw = 0;
 $cel = 1;
 while ($rw < $rows && $cel <= $cells)
 {
  echo “<tr>”;
  $cl = 0;
  while ($cl < $columns)
  {
   if ($cel <= $cells)
   {
    echo “<td><div align=center>”.$cel.”</div></td>”;
    $cel++;
   }
   $cl++;
  }
  echo “</tr>”;
  $rw++;
 }
 echo “</table>”;
?>
</body>
</html>
