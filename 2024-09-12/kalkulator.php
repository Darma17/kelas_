<style>
    .kalku {
        border: 5px solid #3333;
        width: 500px;
        margin: auto;
        box-sizing: border-box;
        padding: 50px;
        background-color: gray;
    }
    .kalku h1 {
        text-align: center;
    }
    #tombol {
        margin: 20px;
        font-size: 2em;
    }
    form {
        text-align: center;
    }

</style>
<div class="kalku">
<form action="" method="post">
    <input type="number" name="angka1" placeholder="Masukkan Angka ke 1">
    <input type="number" name="angka2" placeholder="Masukkan Angka ke 2">
    <br>
    <input id="tombol" type="submit" name="tambah" value="+">
    <input id="tombol" type="submit" name="kurang" value="-">
    <input id="tombol" type="submit" name="kali" value="x">
    <input id="tombol" type="submit" name="bagi" value="/">
</form>
<?php 
    if (isset($_POST['tambah'])) {
        $hasil = $_POST['angka1'] + $_POST['angka2'];
        echo '<h1>'."Hasil : ".$hasil.'</h1>';
    }
    if (isset($_POST['kurang'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil = $angka1 - $angka2;
        echo '<h1>'."Hasil : ".$hasil.'</h1>';
    }
    if (isset($_POST['kali'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil = $angka1 * $angka2;
        echo '<h1>'."Hasil : ".$hasil.'</h1>';
    }
    if (isset($_POST['bagi'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil = $angka1 / $angka2;
        echo '<h1>'."Hasil : ".$hasil.'</h1>';
    }
?>
</div>