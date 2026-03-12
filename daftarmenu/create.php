<?php 
require 'koneksi.php';


if (isset($_POST['submit'])) {
    if (create($_POST) > 0 ){
      echo "<script>
      alert('data berhasil dibuat');
      document.location.href = 'daftarmenu.php';
      </script>";
    } else {
      echo "<script>
      alert('data berhasil dibuat');
      document.location.href = 'daftarmenu.php';
      </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Daftar Menu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @font-face {
      font-family: 'MonaSans';
      src: url('../font/mona-sans.ttf') format('truetype');
    }
    body {
      font-family: 'MonaSans', sans-serif;
      background-color: #f1f5f9;
    }
  </style>
</head>
<body>

  <nav class="flex justify-center items-center h-20 bg-blue-700 shadow-md mb-4">
    <h1 class="text-2xl font-bold text-white tracking-wide">Dashboard Daftar Menu</h1>
  </nav>

 

  <div class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-lg border">
    <h2 class="text-xl font-semibold mb-6 text-center text-gray-800">Tambah Daftar Menu</h2>
    
    <form action="" method="post" class="space-y-2">
      <div>
        <label for="jenismenu" class="block text-gray-700 mb-1 font-medium">Jenis Menu</label>
        <input type="text" name="jenismenu" id="jenismenu" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <div>
        <label for="foto" class="block text-gray-700 mb-1 font-medium">Foto</label>
        <input type="text" name="foto" id="foto" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <div>
        <label for="namamenu" class="block text-gray-700 mb-1 font-medium">Nama Menu</label>
        <input type="text" name="namamenu" id="namamenu" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <div>
        <label for="harga" class="block text-gray-700 mb-1 font-medium">Harga</label>
        <input type="text" name="harga" id="harga" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      
      <button type="submit" name="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">
        Simpan Data
      </button>
    </form>
  </div>

</body>
</html>
