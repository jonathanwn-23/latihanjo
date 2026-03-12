<?php 
require 'koneksi.php';

$id = (int)$_GET["id"];
$dm = query("SELECT * FROM daftarmenu WHERE id = $id")[0];

if (isset($_POST['submit'])) {
    if (update($_POST) > 0 ){
      echo "<script>
      alert('data berhasil diubah');
      document.location.href = 'daftarmenu.php';
      </script>";
    } else {
      echo "<script>
      alert('data gagal diubah');
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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <nav class="flex justify-center items-center h-20 bg-blue-700 mb-8">
        <h1 class="text-2xl font-bold text-white">Dashboard Daftar Menu</h1>
    </nav>
    
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg border border-gray-200 mb-4">
    <h2 class="text-xl font-semibold mb-6 text-center text-gray-800">Tambah Data Menu</h2>
    
    <form action="" method="post" class="space-y-2 ">
        <input type="hidden" name="id" value="<?= $dm['id']; ?>">
      <div>
        <label for="jenismenu" class="block text-gray-700 mb-1 font-medium">Jenis Menu</label>
        <input type="text" name="jenismenu" id="jenismenu" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" value="<?= $dm["jenismenu"] ?>">
      </div>

      <div>
        <label for="foto" class="block text-gray-700 mb-1 font-medium">foto</label>
        <input type="text" alt="foto" name="foto" id="foto" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" value="<?= $dm["foto"] ?>">
      </div>

      <div>
        <label for="namamenu" class="block text-gray-700 mb-1 font-medium">Nama Menu</label>
        <input type="text" name="namamenu" id="namamenu" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" value="<?= $dm["namamenu"] ?>">
      </div>

      <div>
        <label for="harga" class="block text-gray-700 mb-1 font-medium">Harga</label>
        <input type="text" name="harga" id="harga" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" value="<?= $dm["harga"] ?>">
      </div>

      <button type="submit" name="submit" class=" bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition">
        Simpan Perubahan
      </button>
    </form>
  </div>

</body>
</html>