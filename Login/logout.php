<?php
session_start(); // Mulai sesi

// Hapus semua data sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect kembali ke halaman login
header("Location: ../home.php");
exit();
?>
