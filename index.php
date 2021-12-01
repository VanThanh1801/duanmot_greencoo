
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

<?php include("./modal/cart.php");  ?>


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
      case "shop":
          $dssp = loadall_sanpham_shop();
          include "view/shop.php";
        break;
      case 'sanphamct':
    
        if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
  
          $id = $_GET['idsp'];
          update_luotxem($id);
          // if (isset($_POST['insert'])) {
          //   $noidung = $_POST['noidungbl'];
  
          //   $ma_Kh = $_SESSION['user']['id'];
          //   $ma_sanpham = $id;
          //   // inser_comment($noidung, $ma_sanpham, $ma_Kh);
          //   // var_dump(inser_comment($noidung, $ma_sanpham, $ma_Kh, $ngay_bl));
  
          // }
            // $showbl = select_binhluan($id);\
          }
          $onesp = loadone_sanpham($id);
          
  
          $sp_cung_loai = load_sanpham_cungloai($id, $onesp['id_cate']);
  
  
          include "view/product-single.php";
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
        include("view/dangky.php");
  
  
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
            include("view/home.php");
          } else {
            $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
          }
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
        session_unset();
        include("view/home.php");
        break;
  
  
  
  
  

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
      include "view/viewcar.php";
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
          include("view/viewcar.php");
        
          break;
    case 'billconfirm':
      if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $ptt = $_POST['pttt'];
        $date = date('h:i:sa d/m/Y');
        $tongdon = tongdon();
        $idbill = insert_bill($name,$email,$address,$tel,$pttt,$date,$tongdon);

        //insert into cart : $sessio['mycart'] & $idbill

        foreach($session['mycart'] as $cart){
          insert_cart($_SESSION['user']['id'],$cart[0],$cart[1],$cart[2],$cart[3],$cart[4],$cart[5],$idbill);
        }
      }
      $listbill = loadone_bill($idbill);
      include "./view/bill.php";
      break;
    case 'viewcart':
      include 'view/viewcar.php';
      

      break;
   
            
     
       
    case 'vechungtoi':
      include 'view/about.php';
      

      break;
    case 'shop':
      include 'view/shop.php';
      

      break;
      
    case 'lienhe':
      include 'view/contact.php';
      


      break;

    case 'bill';
      include "./view/bill.php";
      break;
    case 'billconfirm';
      if(isset($_POST['checkout']) && ($_POST['checkout'])){
        if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
        else $id = 0;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $pttt = $_POST['pttt'];
        $ngaydathang = date('h:i:sa d/m/Y'); 
        $tongdonhang = tongdonhang();

        $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);
        // var_dump($idbill);
        // die;
        


        foreach($_SESSION['mycart'] as $cart){
          inset_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1],$cart[3], $cart[6], $cart[7], $idbill );

        }
        $_SESSION['cart'] = [];





      }
      $bill = loadone_bill($idbill);
      $billct = loadall_cart($idbill);
      include "view/billconfirm.php";
      break;
    case 'mybill':
      $listbill = loadall_bill($_SESSION['user']['id']);


      include 'view/mybill.php';
      break;
    default:
      include("./view/home.php");
      break;

    }
  } else {
   
    include("view/home.php");
     
  }
  





?>














<?php include_once("./view/footer.php");  ?>



  
  
