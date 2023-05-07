<?php

//panggil file untuk menghubungkan ke server database

include('koneksi.php');
//tangkap data dari form
$id=$_GET['id'];
$kode_barang= $_POST['kode_barang'];
$nama_barang= $_POST['nama_barang'];
$satuan= $_POST['satuan'];
$harga= $_POST['harga'];
//simpan data ke database JIKA data sudah terisi semua
$query = mysqli_query($koneksi,"UPDATE tb_harga set kode_barang='$kode_barang', nama_barang='$nama_barang',satuan='$satuan',harga='$harga'where id='$id'") or die(mysqli_error());
if ($query)
{
?>
<script>
window.alert('Data berhasil diUpdate');
window.location.href="index.php";
</script>
<?php
}
?>