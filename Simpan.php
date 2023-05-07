<?php





//memanggil file koneksi.php

include "koneksi.php";
//menerima data inputan dari form di index.php

$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$satuan=$_POST['satuan'];
$harga=$_POST['harga'];
//menyimpan data kedalam tabel
$simpan=mysqli_query($koneksi,"INSERT INTO tb_harga (kode_barang,nama_barang,satuan,harga) VALUES('$kode_barang',
'$nama_barang','$satuan','$harga')") or die(mysqli_error($koneksi));

       
            
    

if ($simpan)



{
?>
<script>
window.alert('Data berhasil disimpan');
window.location.href="index.php";
</script>
<?php
}
?>