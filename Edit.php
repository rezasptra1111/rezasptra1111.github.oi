<?php

include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_harga WHERE id='$id'") or die(mysql_error());
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Rezasaputra</title>
</head>
<body>
<h2>Form Edit Data Siswa</h2>
<form action="update.php?id=<?php echo $id; ?>" method="POST">
<table>
<tr>
<td>kode_barang</td>
<td><input type="text" name="kode_barang" required value="<?=$data['kode_barang'];?> ">
</td>
</tr>
<tr>
<td>nama_barang</td>
<td><input type="text" name="nama_barang" required value="<?=$data['nama_barang'];?> ">
</td>
</tr>
<tr>
   <td>satuan</td>
   <td><Select id="satuan" name="satuan" required>
     <option value="pcs">pcs</option>
     <option value="pack">pack</option>
     <option value="lusin">lusin</option>
     </td>
 </tr>
<tr>
<td>harga</td>
<td><input type="text" name="harga" required value="<?=$data['harga'];?> ">
</td>
</tr>

</tr>
<tr>
<td></td>
<td>
  <input type="submit" value="Update">
<input type="reset" value="Batal">
</td>
</tr>
</table>
<script>
  document.querySelector('option[value="<?php echo $data['satuan'];?>"]').selected = true;
</script>
</form>