
<?php include_once("./view/header.php") ?>

<?php include("./modal/pdo.php"); ?>

<?php include("./modal/sanpham.php"); ?>
<?php include("./global.php"); ?>
<?php include("./modal/danhmuc.php");  ?>

<?php 
$dsdm = loadall_danhmuc();
$spnew = loadall_sanpham_home();
$dstop10 = loadall_sanpham_top10();





?>












<?php include_once("./view/banner.php") ?>

<?php include_once("./view/shipping.php") ?>
<?php include_once("./view/category.php") ?>
<?php include_once("./view/saleproduct.php") ?>
<?php include_once("./view/newproduct.php") ?>
<?php include_once("./view/product.php") ?>
<?php include_once("./view/searchproduct.php") ?>

<?php include_once("./view/deal.php") ?>
<?php include_once("./view/sale.php") ?>
<?php include_once("./view/info.php") ?>

<?php include_once("./view/contacts.php") ?>
<?php include_once("./view/footer.php") ?>



  
  
