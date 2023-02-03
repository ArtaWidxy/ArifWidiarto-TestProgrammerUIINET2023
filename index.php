<!DOCTYPE html>
<html>

<head>
    <title>Test Programmer UIINET 2023</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery.js"></script>
</head>

<body>

    <div class="content">
        <header>
            <h1 class="judul">Test Programmer UIINET 2023</h1>
            <h3 class="deskripsi">Arif Widiarto</h3>
        </header>

        <div class="menu">
            <ul>
                <li><a class="klik_menu" id="nomor2">Menampilkan data dari API</a></li>
                <li><a class="klik_menu" id="nomor1">Mengambil data</a></li>
            </ul>
        </div>

        <div class="body">

        </div>
    </div>
</body>

<script type="text/javascript">
$(document).ready(function() {
    $('.klik_menu').click(function() {
        var menu = $(this).attr('id');
        if (menu == "nomor2") {
            $('.body').load('nomor2.php');
        } else if (menu == "nomor1") {
            $('.body').load('nomor1.php');
        }
    });
    // halaman yang akan di tampilkan ketika web pertama dibuka
    $('.body').load('nomor2.php');

});
</script>

</html>