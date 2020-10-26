<?php
session_start();
unset($_SESSION['juri']);
header('location: ../home.htm');
exit();
?>
