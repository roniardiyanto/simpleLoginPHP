<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Keuangan</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Archivo|Carme|Gudea|Jockey+One|Staatliches" rel="stylesheet"> 
</head>
<body>
    <main>
            <?php
            require_once('listUser.php');
            ?>
        <div class="atas"><h1>Sistem Informasi Keuangan</h1></div>
        <div id="halamanMasuk"><h2>Halaman Masuk</h2></div>
        <form action="index.php" method="post">
            <div class="inputForm">
                    <input type="text" placeholder="Nama Pengguna" name="namaPengguna">
            </div>
            <div class="inputForm">
                    <input type="password" placeholder="Kata Sandi" name="kataSandi">
            </div>
            <input class="btn" type="submit" name="submit" value="MASUK">

        </form>
    </main>
</body>