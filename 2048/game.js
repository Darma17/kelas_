// Inisialisasi game
let grid = [];
let skor = 0;
let waktu = 60;
let level = 1;
let skorLevel = 100;
let skorTertinggi = localStorage.getItem('skorTertinggi') || 0;
let interval;

function animateCell(cell, duration) {
    let startTime = null;
    function animate(timestamp) {
      if (startTime === null) {
        startTime = timestamp;
      }
      const progress = (timestamp - startTime) / duration;
      if (progress >= 1) {
        cell.style.transform = 'scale(1)';
        return;
      }
      cell.style.transform = `scale(${1 + progress * 0.1})`;
      requestAnimationFrame(animate);
    }
    requestAnimationFrame(animate);
  }

  function mainkanSuara() {
    const suara = document.getElementById('geser-sound');
    suara.play();
  }

// Fungsi inisialisasi game
function initGame() {
  waktu = 60;
  grid = [];
  for (let i = 0; i < 4; i++) {
    grid[i] = [];
    for (let j = 0; j < 4; j++) {
      grid[i][j] = 0;
    }
  }
  tambahAngka();
  tambahAngka();
  tampilkanGrid();
  updateSkor();
  updateWaktu();
  updateLevel();
  updateSkorTertinggi();
  interval = setInterval(updateWaktu, 1000);
}

// Fungsi tambah angka
function tambahAngka() {
  let i = Math.floor(Math.random() * 4);
  let j = Math.floor(Math.random() * 4);
  if (grid[i][j] == 0) {
    grid[i][j] = Math.random() < 0.9 ? 2 : 4;
  }
}

// Fungsi tampilkan grid
function tampilkanGrid() {
  let html = '';
  for (let i = 0; i < 4; i++) {
    for (let j = 0; j < 4; j++) {
      let warna = getWarna(grid[i][j]);
      html += `<div class="cell" data-angka="${grid[i][j]}" style="background-color: ${warna.bg}; color: ${warna.txt}">${grid[i][j]}</div>`;
    }
  }
  document.getElementById('game-grid').innerHTML = html;
}

// Fungsi untuk mendapatkan warna berdasarkan angka
function getWarna(angka) {
  let warna = {
    bg: '#eee',
    txt: '#333'
  };

  if (angka == 2) {
    warna.bg = '#F7F7F7'; 
    warna.txt = '#333';
  } else if (angka == 4) {
    warna.bg = '#C9E4CA'; 
    warna.txt = '#333';
  } else if (angka < 8) {
    warna.bg = '#D9FFD9'; 
    warna.txt = '#333';
  } else if (angka < 32) {
    warna.bg = '#C6F4C6'; 
    warna.txt = '#333';
  } else if (angka < 128) {
    warna.bg = '#8BC34A'; 
    warna.txt = '#fff';
  } else if (angka < 512) {
    warna.bg = '#3E8E41'; 
    warna.txt = '#fff';
  } else {
    warna.bg = '#2E865F'; 
    warna.txt = '#fff';
  }

  return warna;
}

// Fungsi update skor
function updateSkor() {
  document.getElementById('skor').innerText = `Skor: ${skor}`;
}

// Modifikasi fungsi waktu habis
function updateWaktu() {
  waktu--;
  document.getElementById('waktu').innerText = `Waktu: ${waktu} detik`;
  if (waktu == 0) {
      clearInterval(interval);
      const nama = prompt('Waktu habis! Masukkan nama Anda untuk leaderboard:');
      if (nama) {
          kirimKeLeaderboard(nama, skor, level); // Kirim data ke leaderboard
      }
      if (confirm('Apakah Anda ingin mencoba lagi?')) {
          initGame(); // Memulai ulang permainan jika pengguna menekan "OK"
      }
  }
}

// Fungsi update level
function updateLevel() {
  document.getElementById('level').innerText = `Level: ${level}`;
}

// Fungsi update skor tertinggi
function updateSkorTertinggi() {
  document.getElementById('skorTertinggi').innerText = `Skor Tertinggi: ${skorTertinggi}`;
}

// Fungsi geser kiri
function geserKiri() {
    for (let i = 0; i < 4; i++) {
      let baris = grid[i];
      let baru = [];
      let gabung = false;
      for (let j = 0; j < 4; j++) {
        if (baris[j] != 0) {
          if (baru.length > 0 && baru[baru.length - 1] == baris[j] && !gabung) {
            baru[baru.length - 1] *= 2;
            skor += baru[baru.length - 1];
            gabung = true;
          } else {
            baru.push(baris[j]);
            gabung = false;
          }
        }
      }
      grid[i] = baru.concat(Array(4 - baru.length).fill(0));
    }
    tambahAngka();
    tampilkanGrid();
    updateSkor();
    mainkanSuara();
    if (menang()) {
      alert('Selamat, Anda menang!');
      initGame();
    }
    if (skor >= skorLevel) {
      level++;
      skorLevel += 100;
      updateLevel();
    }
    if (skor > skorTertinggi) {
      skorTertinggi = skor;
      localStorage.setItem('skorTertinggi', skorTertinggi);
      updateSkorTertinggi();
    }
    
    document.querySelectorAll('.cell').forEach((cell) => {
        animateCell(cell, 200); // Sesuaikan dengan durasi animasi
      });
  }
  
  // Fungsi geser kanan
  function geserKanan() {
    for (let i = 0; i < 4; i++) {
      let baris = grid[i];
      let baru = [];
      let gabung = false;
      for (let j = 3; j >= 0; j--) {
        if (baris[j] != 0) {
          if (baru.length > 0 && baru[baru.length - 1] == baris[j] && !gabung) {
            baru[baru.length - 1] *= 2;
            skor += baru[baru.length - 1];
            gabung = true;
          } else {
            baru.push(baris[j]);
            gabung = false;
          }
        }
      }
      grid[i] = Array(4 - baru.length).fill(0).concat(baru);
    }
    tambahAngka();
    tampilkanGrid();
    updateSkor();
    mainkanSuara();
    if (menang()) {
      alert('Selamat, Anda menang!');
      initGame();
    }
    if (skor >= skorLevel) {
      level++;
      skorLevel += 100;
      updateLevel();
    }
    if (skor > skorTertinggi) {
      skorTertinggi = skor;
      localStorage.setItem('skorTertinggi', skorTertinggi);
      updateSkorTertinggi();
    }

    document.querySelectorAll('.cell').forEach((cell) => {
        animateCell(cell, 200); // Sesuaikan dengan durasi animasi
      });
  }
  
  // Fungsi geser atas
  function geserAtas() {
    for (let j = 0; j < 4; j++) {
      let kolom = [];
      for (let i = 0; i < 4; i++) {
        kolom.push(grid[i][j]);
      }
      let baru = [];
      let gabung = false;
      for (let i = 0; i < 4; i++) {
        if (kolom[i] != 0) {
          if (baru.length > 0 && baru[baru.length - 1] == kolom[i] && !gabung) {
            baru[baru.length - 1] *= 2;
            skor += baru[baru.length - 1];
            gabung = true;
          } else {
            baru.push(kolom[i]);
            gabung = false;
          }
        }
      }
      for (let i = 0; i < 4; i++) {
        grid[i][j] = baru[i] || 0;
      }
    }
    tambahAngka();
    tampilkanGrid();
    updateSkor();
    mainkanSuara();
    if (menang()) {
      alert('Selamat, Anda menang!');
      initGame();
    }
    if (skor >= skorLevel) {
      level++;
      skorLevel += 100;
      updateLevel();
    }
    if (skor > skorTertinggi) {
      skorTertinggi = skor;
      localStorage.setItem('skorTertinggi', skorTertinggi);
      updateSkorTertinggi();
    }

    document.querySelectorAll('.cell').forEach((cell) => {
        animateCell(cell, 200); // Sesuaikan dengan durasi animasi
      });
  }
  
  // Fungsi geser bawah
function geserBawah() {
    for (let j = 0; j < 4; j++) {
      let kolom = [];
      for (let i = 3; i >= 0; i--) {
        kolom.push(grid[i][j]);
      }
      let baru = [];
      let gabung = false;
      for (let i = 0; i < 4; i++) {
        if (kolom[i] != 0) {
          if (baru.length > 0 && baru[baru.length - 1] == kolom[i] && !gabung) {
            baru[baru.length - 1] *= 2;
            skor += baru[baru.length - 1];
            gabung = true;
          } else {
            baru.push(kolom[i]);
            gabung = false;
          }
        }
      }
      for (let i = 3; i >= 0; i--) {
        grid[i][j] = baru[3 - i] || 0;
      }
    }
    tambahAngka();
    tampilkanGrid();
    updateSkor();
    mainkanSuara();
    if (menang()) {
      alert('Selamat, Anda menang!');
      initGame();
    }
    if (skor >= skorLevel) {
      level++;
      skorLevel += 100;
      updateLevel();
    }
    if (skor > skorTertinggi) {
      skorTertinggi = skor;
      localStorage.setItem('skorTertinggi', skorTertinggi);
      updateSkorTertinggi();
    }

    document.querySelectorAll('.cell').forEach((cell) => {
        animateCell(cell, 200); // Sesuaikan dengan durasi animasi
      });
  }
  
  // Fungsi cek menang
  function menang() {
    for (let i = 0; i < 4; i++) {
      for (let j = 0; j < 4; j++) {
        if (grid[i][j] == 2048) {
          return true;
        }
      }
    }
    return false;
  }
  
  // Event listener
  document.addEventListener('keydown', (e) => {
    switch (e.key) {
      case 'ArrowLeft':
        geserKiri();
        break;
      case 'ArrowRight':
        geserKanan();
        break;
      case 'ArrowUp':
        geserAtas();
        break;
      case 'ArrowDown':
        geserBawah();
        break;
    }
  });
  
  document.getElementById('restart').addEventListener('click', () => {
    clearInterval(interval); // Hentikan timer sebelumnya
    initGame(); // Mulai ulang permainan
  });  

  // Fungsi kirim data ke leaderboard
function kirimKeLeaderboard(nama, skor, level) {
  fetch('leaderboard.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `nama=${encodeURIComponent(nama)}&skor=${skor}&level=${level}`,
  })
  .then(response => response.text())
  .then(data => {
      alert(data); // Tampilkan pesan dari server
  })
  .catch(error => {
      console.error('Error:', error);
  });
}


// Modifikasi fungsi menang
function menang() {
  for (let i = 0; i < 4; i++) {
      for (let j = 0; j < 4; j++) {
          if (grid[i][j] == 2048) {
              const nama = prompt('Selamat, Anda menang! Masukkan nama Anda untuk leaderboard:');
              if (nama) {
                  kirimKeLeaderboard(nama, skor, level); // Kirim data ke leaderboard
              }
              return true;
          }
      }
  }
  return false;
}

  initGame();