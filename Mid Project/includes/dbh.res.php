<?php
include_once  'dbh.inc.php'; 

session_start();


$_SESSION['totalProductSoldNumber'] = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orders WHERE DeliveryStatus = 'Delivered' OR DeliveryStatus = 'Shipped' OR DeliveryStatus = 'order Placed'")) ;

$_SESSION['canceledProductNumber'] = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orders WHERE DeliveryStatus = 'Canceled'")) ;

$_SESSION['ongoinDeliveryNumber'] = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM orders WHERE DeliveryStatus = 'Shipped'")) ;

$_SESSION['totalOrderNumber'] = mysqli_num_rows(mysqli_query($conn,"SELECT DeliveryStatus FROM orders")) ;





echo $_SESSION['totalProductSoldNumber'],$_SESSION['canceledProductNumber'],$_SESSION['ongoinDeliveryNumber'],$_SESSION['totalOrderNumber'];