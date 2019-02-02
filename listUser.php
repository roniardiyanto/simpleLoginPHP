<?php
$namaPengguna = 'roni';
$kataSandi = 'login';

if ( isset($_POST['submit'])) {
    if ($_POST['namaPengguna'] == $namaPengguna && 
    $_POST['kataSandi'] == $kataSandi) {
        echo '<h1>Berhasil Masuk</h1>';
    } else {
        echo '<h1>Gagal masuk, silahkan periksa Nama Pengguna dan Kata Sandi anda<h1>';
    }
    
}
?>