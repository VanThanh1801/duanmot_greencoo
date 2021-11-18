

<?php
session_start();
ob_start();
include_once "admin/modal/taikhoan.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case "dangnhap";
            #Code Here........
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                 $user = $_POST['user'];
                 $pass = $_POST['pass'];
                 $checkuser = checkuser($user,$pass);
                if(is_array($checkuser)){
                     $_SESSION['user']=$checkuser;
                     header('location:index.php');
                 }else{
                    $thongbao = "Sign-In Failed!!!";
                 }
             }
             break;
    }
    } else {
        include_once("./view/header.php") ;
        include_once("./view/banner.php") ;

        include_once("./view/shipping.php") ;
        include_once("./view/category.php") ;
        include_once("./view/saleproduct.php") ;
        include_once("./view/newproduct.php") ;
        include_once("./view/product.php") ;
        include_once("./view/searchproduct.php") ;

        include_once("./view/deal.php") ;
        include_once("./view/sale.php") ;
        include_once("./view/info.php") ;
        include_once("./view/contacts.php") ;
        include_once("./view/footer.php") ;
    }



  
  
