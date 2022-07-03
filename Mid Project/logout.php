<?php
session_start();
// if ($_GET['logout']) {
//     if (isset($_GET['logout'])==true) {
//         session_destroy();
//         header("Location:login.php");
//     }
// }

session_destroy();
header("Location:login.php");