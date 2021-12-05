<?php session_start(); ?>
<?php
//include ("./view/header.php");
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
<?php include("./modal/contact.php") ?>
<?php include("./modal/cart.php");  ?>
<?php include("./modal/in4.php"); ?>


<?php
$customer = loadall_mess2();
$dsdm = loadall_danhmuc();
$dsncc = loadall_agent();
$spnew = loadall_sanpham_home();
$dstop10 = loadall_sanpham_top10();
$spsaleoff = loadall_sanpham_saleoff();
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
      $listin4 = loadall_in4();
      include ("./view/header.php");
      include "view/shop.php";
      include ("./view/footer.php");
      break;
    case "shop":
        $dssp = loadall_sanpham_shop();
        $listin4 = loadall_in4();
        include ("./view/header.php");
        include "view/shop.php";
        include ("./view/footer.php");
    break;
    case 'sanphamct':
      if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
          $id = $_GET['idsp'];
          update_luotxem($id);

          $onesp = loadone_sanpham($id);
          $sp_cung_loai = load_sanpham_cungloai($id, $onesp['id_cate']);
          $listin4 = loadall_in4();
          include ("./view/header.php");
          include "view/product-single.php";
          include ("./view/footer.php");
        } else {
          $listin4 = loadall_in4();
        include ("./view/header.php");
          include "view/home.php";
          include ("./view/footer.php");
        }
        $onesp = loadone_sanpham($id);
        $sp_cung_loai = load_sanpham_cungloai($id, $onesp['id_cate']);
        $listin4 = loadall_in4();
        include ("./view/header.php");
        include "view/product-single.php";
        include ("./view/footer.php");
    break;
    case 'dangky':
      
      if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        $email = $_POST['email'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
      
        // $sodienthoai = $_POST['sdt'];
        // $diachi = $_POST['diachi'];
       
        
        insert_customer($user, $pass, $email );
        $thongbao = "Đăng ký thành công";
       
      }
      $listin4 = loadall_in4();
        include ("./view/header.php");
      include("view/dangky.php");

      include ("./view/footer.php");

    break;
      case 'dangnhap':;
        if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
          $email = $_POST['email'];
          $pass = $_POST['password'];
          $checkuser = checkuser($email, $pass);
          $thongbao="Bạn đã đăng nhập thành công!";
          if (is_array($checkuser)) {
            $_SESSION['user'] = $checkuser;

            // $thongbao="Bạn đã đăng nhập thành công!";
            $listin4 = loadall_in4();
          include ("./view/header.php");
            include("view/home.php");
            include ("./view/footer.php");

          } else {
            $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
          }
        }
        $listin4 = loadall_in4();
        include ("./view/header.php");
        include("view/dangnhap.php");
        include ("./view/footer.php");
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
      $listin4 = loadall_in4();
      include ("./view/header.php");
      include "view/updatepass.php";
      include ("./view/footer.php");
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
        $listin4 = loadall_in4();
        include ("./view/header.php");
        include "view/resetpass.php";
        include ("./view/footer.php");
    break;
      case 'thoat':
        session_unset();
        $listin4 = loadall_in4();
        include ("./view/header.php");
        include("view/home.php");
        include ("./view/footer.php");
      break;





      case 'addtocart':

      if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $saleoff = $_POST['sale'];
        $new_price = number_format($_POST['new_price'], 0, "", "");
        $img = $_POST['img'];
        $old_price = $_POST['old_price'];
       
        $soluong = $_POST['quantity'];
        // var_dump($soluong);
        // die;
        $thanhtien = $soluong * $new_price;
        $spadd = [$id, $name, $img, $new_price,$old_price,  $saleoff,  $soluong, $thanhtien];
        array_push($_SESSION['mycart'], $spadd);
        unset($id, $name, $img, $new_price,$old_price,  $saleoff,  $soluong, $thanhtie);
      }
  
        $listin4 = loadall_in4();
        include ("./view/header.php");
        include "view/viewcar.php";
        include ("./view/footer.php");

      break;

      case 'delcart':
        if (isset($_GET['idcart'])) {
          
         
          if($_GET['idcart'] == 0){
            unset($_SESSION['mycart'][0]);
          }else{
            unset($_SESSION['mycart'][$_GET['idcart']]);
          
          }
          
        } else {
          $_SESSION['mycart'] = [];
        }
        $listin4 = loadall_in4();
        include ("./view/header.php");
        include("view/viewcar.php");
        include ("./view/footer.php");
      break;
    case 'viewcart':
      $listin4 = loadall_in4();
        include ("./view/header.php");
        include("view/viewcart.php");
        include ("./view/footer.php");
    break;

    case 'vechungtoi':
      $listin4 = loadall_in4();
      include("./view/header.php");
      include 'view/about.php';
      include("./view/footer.php");
    break;
    case 'shop':
      $listin4 = loadall_in4();
      include("./view/header.php");
      include 'view/shop.php';
      include("./view/footer.php");
    break;
    case 'lienhe':
      if (isset($_POST['guilh']) && ($_POST['guilh'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $mess = $_POST['mess'];
        insert_contact($name, $email, $subject, $mess);
      }
      $listin4 = loadall_in4();
      include("./view/header.php");
      include 'view/contact.php';
      include("./view/footer.php");
    break;
    case 'bill';
      $listin4 = loadall_in4();
      include("./view/header.php");
      include "./view/bill.php";
      include("./view/footer.php");
      break;
    case 'billconfirm';
      if (isset($_POST['checkout']) && ($_POST['checkout'])) {
        if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
        else $id = 0;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $pttt = $_POST['pttt'];
        $ngaydathang = date('h:i:sa d/m/Y');
        $tongdonhang = tongdonhang();

        $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);

        
        




        foreach ($_SESSION['mycart'] as $cart) {
          inset_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[6], $cart[7], $idbill);
        }

        $_SESSION['mycart'] = [];
      }
      $listin4 = loadall_in4();
      include_once("./view/header.php");
      $bill = loadone_bill($idbill);
      $billct = loadall_cart($idbill);
      include "./view/billconfirm.php";
      include("./view/footer.php");
    break;
    case 'mybill':
      $listbill = loadall_bill($_SESSION['user']['id']);

      $listin4 = loadall_in4();
     
      include_once("./view/header.php");
      include './view/mybill.php';
      include("./view/footer.php");
      
     
      break;
    case 'ctdh':
      $bill = loadone_bill($_GET['idbill']);
      $billct = loadall_cart($_GET['idbill']);
      $listin4 = loadall_in4();
      include_once("./view/header.php");
      include "view/billconfirm.php";
      include("./view/footer.php");
      break;

    default:
      $listin4 = loadall_in4();
      include_once("./view/header.php");
      include("./view/home.php");
      include_once("./view/footer.php");
    break;
  }
} else {
  $listin4 = loadall_in4();
  include_once("./view/header.php");
  include("view/home.php");
  include_once("./view/footer.php");
}

?>














<?php //include_once("./view/footer.php");  
?>


  
