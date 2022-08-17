<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Website</title>
    <!-- CSS Files  -->
    <?php linkCSS("assets/css/bootstrap.css") ?>
    <?php linkCSS("assets/css/font-awesome.min.css") ?>
    <?php linkCSS("assets/css/dataTables.bootstrap4.min.css"); ?>
    <?php linkCSS("responsive.bootstrap4.min.css"); ?>
    <?php linkCSS("assets/css/style.css") ?>
</head>

<body>
    <?php include "topnav.php" ?>
    <?php if(!$this->getSession('userId')): ?>
    <div class="container">
    <?php else: ?>
    <div class="container-fluid">
    <?php endif; ?>
        <div class="row">
        <?php if($this->getSession('userId')): ?>
            <?php include "sidenav.php" ?>
        <?php endif; ?>