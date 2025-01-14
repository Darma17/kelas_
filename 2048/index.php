<?php
// leaderboard.php (tambahkan bagian GET untuk menampilkan data leaderboard)
$conn = new mysqli("localhost", "root", "", "game2048");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT nama, skor, level, waktu FROM leaderboard ORDER BY skor DESC LIMIT 10");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game 2048</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="game-container">
      <div class="game-grid" id="game-grid"></div>
      <p id="skor">Skor: 0</p>
      <p id="waktu">Waktu: 60 detik</p>
      <p id="level">Level: 1</p>
      <p id="skorTertinggi">Skor Tertinggi: 0</p>
      <button id="restart">Mulai Ulang</button>
      <audio id="geser-sound" src="geser.mp3"></audio>
    </div>
    <div class="cara-bermain">
      <h2>Cara Bermain</h2>
      <p>Game 2048 adalah permainan puzzle yang membutuhkan strategi dan ketepatan.</p>
      <h3>Kontrol:</h3>
      <ul>
        <li>↑: Geser atas</li>
        <li>↓: Geser bawah</li>
        <li>←: Geser kiri</li>
        <li>→: Geser kanan</li>
      </ul>
      <h3>Penjelasan:</h3>
      <ul>
        <li>Gabungkan kotak dengan nilai yang sama untuk mendapatkan nilai yang lebih tinggi.</li>
        <li>Tujuan adalah mencapai nilai 2048.</li>
        <li>Waktu permainan adalah 60 detik.</li>
        <li>Skor tertinggi akan disimpan.</li>
      </ul>
    </div>
  </div>
  <h1>Leaderboard</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Skor</th>
                <th>Level</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['nama']) ?></td>
                <td><?= $row['skor'] ?></td>
                <td><?= $row['level'] ?></td>
                <td><?= $row['waktu'] ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

  <script src="game.js"></script>
</body>
</html>
<?php $conn->close(); ?>
