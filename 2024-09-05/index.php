<?php 
    for ($i=1; $i <= 10; $i++) { 
        echo $i;
    }

    echo  '<br>';

    for ($i=10; $i >= 1; $i--) { 
        echo $i;
    }

    echo '<br>';

    $ganjil = 7;
    echo $ganjil;

    echo '<br>';

    for ($i=1; $i < 100; $i++) { 
        $ganjil = $i % 2;
        // echo $ganjil;
        if ($ganjil == 1) {
            echo $i;
        }
    }

    echo '<br>';

    $kkm = 80;
    $nilai = 65;
    if ($nilai >= $kkm) {
        echo "Anda lulus";
    } else {
        echo "Anda Tidak Lulus";
    }
    echo '<br>';
    $status = "tidak lulus";
    if ($nilai > $kkm) {
        $status = "lulus";
    }
    echo $status;

    echo '<br>  ';

    $rapot = 0;
    $tugas = 1;

    if ($tugas == 1) {
        $rapot = 80;
    }
    echo $rapot;

    echo '<br>';

    $bulan = 12;
    $tanggal = 11;
    $keterangan = "Tanggal yang anda masukkan salah!";
    if ($bulan > 0 && $bulan < 13) {
        // $keterangan = "Benar";
        if ($tanggal > 0 && $tanggal < 32) {
            // $keterangan = "Benar";
            if ($bulan == 1 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Aquarius";
            }
            if ($bulan == 1 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Capricorn";
            }
            if ($bulan == 2 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Taurus";
            }
            if ($bulan == 2 && $tanggal > 19 && $tanggal < 30) {
                $keterangan = "Gemini";
            }
            if ($bulan == 3 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Cancer";
            }
            if ($bulan == 3 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Leo";
            }
            if ($bulan == 4 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Aries";
            }
            if ($bulan == 4 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "Virgo";
            }
            if ($bulan == 5 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Libra";
            }
            if ($bulan == 5 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Scorpio";
            }
            if ($bulan == 6 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Sagitarius";
            }
            if ($bulan == 6 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "Pisces";
            }
            if ($bulan == 7 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Niggarius";
            }
            if ($bulan == 7 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Rairus";
            }
            if ($bulan == 8 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Fairus";
            }
            if ($bulan == 8 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Kayrus";
            }
            if ($bulan == 9 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Suryus";
            }
            if ($bulan == 9 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "Barus";
            }
            if ($bulan == 10 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Darus";
            }
            if ($bulan == 10 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Rafus";
            }
            if ($bulan == 11 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Aqrus";
            }
            if ($bulan == 11 && $tanggal > 19 && $tanggal < 31) {
                $keterangan = "Kontrus";
            }
            if ($bulan == 12 && $tanggal > 0 && $tanggal < 20) {
                $keterangan = "Mekrus";
            }
            if ($bulan == 12 && $tanggal > 19 && $tanggal < 32) {
                $keterangan = "Jemrus";
            }
        } 
    }
    echo $keterangan;
?>