<?php 
require 'koneksi.php';

$id = (int)$_GET["id"];


    if (delete($id) > 0 ){
      echo "<script>
      alert('data berhasil dihapus');
      document.location.href = 'daftarmenu.php';
      </script>";
    } else {
      echo "<script>
      alert('data gagal dihapus');
      document.location.href = 'daftarmenu.php';
      </script>";
    }

?>
