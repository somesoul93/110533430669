<!DOCTYPE HTML PUBLIC �-//W3C//DTD HTML 4.01 Transitional//EN�
�http://www.w3.org/TR/html4/loose.dtd�>
<html>
<head>
<title>Generate Tabel</title>
<meta http-equiv=�Content-Type� content=�text/html; charset=iso-8859-1?>
</head>
<body>
<form method=�post� action=�generate.php�>
  <p><strong>GENERATE TABEL</strong></p>
  <table width=�277? border=�0?>
          <tr>
            <td width=�89?>BARIS</td>
            <td width=�172?><strong>:  </strong><input name=�RowsTotal� type=�text� id=�RowsTotal� onKeyUp=�getmax();� onfocus=�this.select();�></td>
          </tr>
          <tr>
            <td><label>KOLOM</label></td>
            <td><strong>:  </strong><input name=�ColumnsTotal� type=�text� id=�ColumnsTotal� onKeyUp=�getmax();� onfocus=�this.select();�></td>
          </tr>
          <tr>
            <td>JUMLAH KOTAK </td>
            <td><strong>:  </strong><input name=�CellsTotal� type=�text� id=�CellsTotal� onKeyUp=�getmax();� onFocus=�this.select();�></td>
          </tr>
          <tr>
            <td>KOTAK MAKSIMUM </td>
            <td><strong>:  </strong><input name=�maxcells� type=�text� id=�maxcells� readonly=�readonly� style=�background-color:#0F9?>
   </td>
          </tr>
          <tr>
            <td>
              <div align=�center�>
     <br />
                <input type=�reset� name=�Reset� value=�Reset�>
                </div></td>
            <td>
              <div align=�right�>
     <br />
                <input type=�submit� name=�Generate� value=�Generate!�>
              </div></td>
        </tr>
  </table>
</form>
  
<script language=�JavaScript� type=�text/javascript�>
<!�
function getmax() {
 var R = parseInt(document.getElementById(�RowsTotal�).value);
    var C = parseInt(document.getElementById(�ColumnsTotal�).value);
 var X = parseInt(document.getElementById(�CellsTotal�).value);
 var cellmax = document.getElementById(�maxcells�);
 var total = �N/A�;
 total = R * C; 
 cellmax.value = new String(total);
 if (X > total)
 {
  alert(�Limit Exceed, max cells is � + total);
  document.getElementById(�CellsTotal�).value = new String();
 }
}
//�>
</script>

</body>
</html>