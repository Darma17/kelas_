<form action="" method="post">
    <input type="number" name="tanggal" placeholder="Masukkan Tangal">
    <input type="number" name="bulan" placeholder="Masukkan Bulan">
    <input type="submit" name="simpan" value="Kirim">
</form>
<?php 
    if (isset($_POST['simpan'])) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];
        $keterangan1 = "Masukkan Bulan Yang Benar";
        $keterangan2 = "Masukkan Tanggal Yang Benar";
        if ($bulan > 0 && $bulan < 13) {
            if ($tanggal > 0 && $tanggal < 32) {
                if ($bulan == 1 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Aquarius";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 1 && $tanggal > 19 && $tanggal < 32) {
                    $keterangan = "Capricorn";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 2 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Taurus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 2 && $tanggal > 19 && $tanggal < 30) {
                    $keterangan = "Gemini";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 3 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Cancer";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 3 && $tanggal > 19 && $tanggal < 32) {
                    $keterangan = "Leo";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 4 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Aries";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 4 && $tanggal > 19 && $tanggal < 31) {
                    $keterangan = "Virgo";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 5 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Libra";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 5 && $tanggal > 19 && $tanggal < 32) {
                    $keterangan = "Scorpio";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 6 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Sagitarius";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 6 && $tanggal > 19 && $tanggal < 31) {
                    $keterangan = "Pisces";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 7 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Niggarius";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 7 && $tanggal > 19 && $tanggal < 32) {
                    $keterangan = "Rairus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 8 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Fairus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 8 && $tanggal > 19 && $tanggal < 32) {
                    $keterangan = "Kayrus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 9 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Suryus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 9 && $tanggal > 19 && $tanggal < 31) {
                    $keterangan = "Barus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 10 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Darus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 10 && $tanggal > 19 && $tanggal < 32) {
                    $keterangan = "Rafus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 11 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Aqrus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 11 && $tanggal > 19 && $tanggal < 31) {
                    $keterangan = "Kontrus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 12 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Mekrus";
                    echo "Zodiak Anda : ".$keterangan;
                }
                if ($bulan == 12 && $tanggal > 19 && $tanggal < 32) {
                    $keterangan = "Jemrus";
                    echo "Zodiak Anda : ".$keterangan;
                }
            } else {
                echo $keterangan2;
            }
        } else {
            echo $keterangan1;
        }
    } 
?>

