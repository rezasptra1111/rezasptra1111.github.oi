<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $simpan = "DELETE FROM tb_harga WHERE id=$id";
    $query = mysqli_query($koneksi, $simpan);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: index.php');
    } else {
        die("gagal menghapus");
    }

} else {
    die("akses dilarang");
}

?>