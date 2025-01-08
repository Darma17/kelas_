<form action="" method="post">
 <input type="number" name="nilai" placeholder="Nilai">
 <select name="dari">
 <option value="USD">Dolar AS</option>
 <option value="IDR">Rupiah</option>
 <option value="EUR">Euro</option>
 <option value="GBP">Poundsterling</option>
 </select>
 <select name="ke">
 <option value="USD">Dolar AS</option>
 <option value="IDR">Rupiah</option>
 <option value="EUR">Euro</option>
 <option value="GBP">Poundsterling</option>
 </select>
 <button type="submit" name="konversi">Konversi</button>
</form>

<?php
    $kurs = array(
     "USD" => array("IDR" => 14500, "EUR" => 0.85, "GBP" => 0.76),
     "IDR" => array("USD" => 0.000069, "EUR" => 0.0000059, "GBP" => 0.0000047),
     "EUR" => array("USD" => 1.18, "IDR" => 17100, "GBP" => 0.89),
     "GBP" => array("USD" => 1.32, "IDR" => 21200, "EUR" => 1.12)
    );
    
if (isset($_POST['konversi'])) {
    $nilai = $_POST['nilai'];
    $dari = $_POST['dari'];
    $ke = $_POST['ke'];
    echo konversiMataUang($nilai, $dari, $ke, $kurs);
}

function konversiMataUang($nilai, $dari, $ke, $kurs) {
    return $nilai * $kurs[$dari][$ke];
}
?>