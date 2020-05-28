<?php
    session_start();
    session_destroy();
    echo "<script> alert ('Terima Kasih Telah Akses Halaman Admin Web SMP Negeri 1 Arut Utara');
    window.location='../index.php'; </script>";    
?>