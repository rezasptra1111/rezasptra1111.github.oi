<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>
</head>
<body>
 <h1>DATA HARGA BARANG</h1>
 <h2>Dibuat oleh : Rezasaputra</h2>
 <form action="simpan.php" method="POST">
 <table>
 <tr>
 <td>Kode Barang</td>
 <td><input type="text" name="kode_barang" required></td>

 </tr>

 <tr>
 <td>nama barang</td>
 <td><input type="text" name="nama barang" required></td>
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
   <td><input type="text" name="harga" required>
 </td>
 </tr>
 <tr>
 <td></td>
 <td>
 <input type="submit" value="simpan">
 <input type="reset" value="batal"> 
 </td>
 <td>
 </tr>
 </table>
 </form>
 <hr>

<fieldset>

<legend><h2>List Data Siswa</h2></legend>
<table border="1">
<thead>
  <th>No</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Satuan</th>
<th>Harga</th>
<th>Aksi</th>
</thead>
<tbody>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from tb_harga");
while($d = mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['kode_barang']; ?></td>
<td><?php echo $d['nama_barang']; ?></td>
<td><?php echo $d['satuan']; ?></td>
<td><?php echo $d['harga']; ?></td>
<td>
<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
<a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('yakin mau d hapus !?')">HAPUS</a>

</td>
</tr>
<?php
}
?>
</tbody>
</table>
</fieldset>
</body>
</html>
</body>
</html>