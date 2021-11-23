
<?php session_start(); ?>
<?php 
  include_once("./view/header.php");
?>

<?php

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
?>


<?php include("./modal/pdo.php"); ?>
<?php include("./modal/taikhoan.php"); ?>
<?php include("./modal/sanpham.php"); ?>
<?php include("./global.php"); ?>
<?php include("./modal/danhmuc.php");  ?>
<?php include("./modal/nhacungcap.php");  ?>



<?php 
$dsdm = loadall_danhmuc();
$dsncc = loadall_agent();
$spnew = loadall_sanpham_home();
$dstop10 = loadall_sanpham_top10();
$spsaleoff =loadall_sanpham_saleoff();
$prnew = loadall_sanpham_new();


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
      case 'sanpham':
        if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
          $kyw = $_POST['kyw'];
        } else {
          $kyw = "";
        }
        if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
          $iddm = $_GET['iddm'];
        } else {
          $iddm = 0;
        }
        $dssp = loadall_sanpham($kyw, $iddm);
        $tendm = load_ten_dm($iddm);
        include "view/shop.php";
        break;
      // case "shop":
      //     $fullsp = loadall_sanpham_shop();
      //     include "view/shop.php";
      //   break;
      case 'product-single':
        
            if(isset($_GET['id'])&&($_GET['id']>0)) {
              $id=$_GET['id'];
              $onesp=loadone_sanpham($id);
              // $dstop10=load_sanpham_cungloai($id,$iddm);
              extract($onesp);
              include "view/product-single.php";  
          }else{
              include "view/product-single.php";
          }
          break;
      case 'dangky':
        
        if (isset($_POST['dangky']) && ($_POST['dangky'])) {
          $email = $_POST['email'];
          $user = $_POST['user'];
          $pass = $_POST['pass'];
        
          // $sodienthoai = $_POST['sdt'];
          // $diachi = $_POST['diachi'];
         
          
          insert_customer($user, $pass, $email );
          $thongbao = "Đăng ký thành công";
         
        }
        include("view/dangky.php");
  
  
        break;
      case 'dangnhap':;
        if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
          $email = $_POST['email'];
          $pass = $_POST['pass'];
          $checkuser = checkuser($email, $pass);
          $thongbao="Bạn đã đăng nhập thành công!";
          // if (is_array($checkuser)) {
          //   $_SESSION['user'] = $checkuser;
  
          //   // $thongbao="Bạn đã đăng nhập thành công!";
          //   header('Location: index.php');
          // } else {
          //   $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
          // }
        }
        include("view/dangnhap.php");
        break;
      case 'edit_taikhoan':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $tel = $_POST['tel'];
          $id = $_POST['id'];
         
  
          update_customer($id, $user, $pass, $email, $address, $tel);
          $thongbao = "Cap nhat tai khoan thanh cong!";
          $_SESSION['user'] = checkuser($user, $pass);
        
          // header('Location: index.php?act=edit_taikhoan');
        }
        include "view/updatepass.php";
        break;
  
  
        break;
      case 'quenmk':
        if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
          $email = $_POST['email'];
  
          $checkemail = checkemail($email);
          if (is_array($checkemail)) {
            $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
          } else {
            $thongbao = "Email này không tồn tại";
          }
        }
        include "view/resetpass.php";
        break;
      case 'thoat':
        // session_unset();
        // header('Location: index.php');
        // break;
  
  
  
  
  
        case 'addtocart':
        if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
          $id = $_POST['id'];
          $name = $_POST['name'];
          $saleoff = $_POST['sale'];
          $new_price = $_POST['new_price'];
          $img = $_POST['img'];
          $old_price = $_POST['old_price'];
          $soluong = 1;
          $thanhtien = $soluong * $new_price;
          $spadd = [$id, $name, $img, $new_price,$old_price,  $saleoff,  $soluong, $thanhtien];
          array_push($_SESSION['mycart'], $spadd);
          unset($id, $name, $img, $new_price,$old_price,  $saleoff,  $soluong, $thanhtien);
        }
        include "view/cart.php";
        break;
       
      case 'delcart':
       
      case 'viewcart';
       
      case 'vechungtoi':
        include 'view/about.php';
       
  
        break;
    case 'shop':
      include 'view/shop.php';
      

      break;
      case 'tintuc':
        include 'view/blog.php';
        
  
        break;
      case 'lienhe':
        include 'view/contact.php';
        

        break;
      case 'bill';
      include "./view/cart/bill.php";
      break;
      default:
        include("./view/home.php");
        break;
    }
  } else {
   
    include("view/home.php");
     
  }
  





?>












<?php //include_once("./view/banner.php") ?>

<?php //include_once("./view/shipping.php") ?>
<?php //include_once("./view/category.php") ?>
<?php //include_once("./view/saleproduct.php") ?>
<?php //include_once("./view/newproduct.php") ?>
<?php //include_once("./view/product.php") ?>
<?php //include_once("./view/searchproduct.php") ?>

<?php //include_once("./view/deal.php") ?>
<?php //include_once("./view/sale.php") ?>
<?php //include_once("./view/info.php") ?>
<!-- <?php //include_once("./view/home.php") ?> -->
<?php //include_once("./view/contacts.php") ?>

<?php include_once("./view/footer.php");  ?>



  
  
