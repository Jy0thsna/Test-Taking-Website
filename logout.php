<?php
session_name('login');
session_start();
unset($_SESSION['user']);
session_destroy();
echo "<script>window.location.href='home.php';</script>";
?>