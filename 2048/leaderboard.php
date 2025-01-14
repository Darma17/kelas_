<?php
// Sambungkan ke database
$conn = new mysqli("localhost", "root", "", "game2048");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $skor = $_POST['skor'];
    $level = $_POST['level'];

    // Simpan ke tabel leaderboard
    $stmt = $conn->prepare("INSERT INTO leaderboard (nama, skor, level) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $nama, $skor, $level);

    if ($stmt->execute()) {
        echo "Berhasil menambahkan ke leaderboard!";
    } else {
        echo "Gagal menambahkan ke leaderboard.";
    }
    $stmt->close();
}

$conn->close();
?>
