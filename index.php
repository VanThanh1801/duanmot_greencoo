
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
            // if (isset($_POST['insert'])) {
            //   $noidung = $_POST['noidungbl'];
    
            //   $ma_Kh = $_SESSION['user']['id'];
            //   $ma_sanpham = $id;
            //   // inser_comment($noidung, $ma_sanpham, $ma_Kh);
            //   // var_dump(inser_comment($noidung, $ma_sanpham, $ma_Kh, $ngay_bl));
    
            // }
            // $showbl = select_binhluan($id);
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
        $listin4 = loadall_in4();
          include ("./view/header.php");
        include("view/dangky.php");
  
        include ("./view/footer.php");

        break;
      case 'dangnhap':;
        if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
          $email = $_POST['email'];
          $pass = $_POST['pass'];
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
          $new_price = $_POST['new_price'];
          $img = $_POST['img'];
          $old_price = $_POST['old_price'];
          $soluong = 1;
          $thanhtien = floatval($soluong)  * floatval($new_price);
        //$soluong * $new_price;
          $spadd = [$id, $name, $img, $new_price,$old_price,  $saleoff,  $soluong, $thanhtien];
          array_push($_SESSION['mycart'], $spadd);
          unset($id, $name, $img, $new_price,$old_price,  $saleoff,  $soluong, $thanhtien);
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
          case 'bill':
            $listin4 = loadall_in4();
        include ("./view/header.php");
            include_once "./view/bill.php";
            include ("./view/footer.php");
            break;
    // case 'billconfirm':
    //   if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $address = $_POST['address'];
    //     $tel = $_POST['tel'];
    //     $ptt = $_POST['pttt'];
    //     $date = date('h:i:sa d/m/Y');
    //     $tongdon = tongdon();
    //     $idbill = insert_bill($name,$email,$address,$tel,$pttt,$date,$tongdon);

    //     //insert into cart : $sessio['mycart'] & $idbill

    //     foreach($session['mycart'] as $cart){
    //       insert_cart($_SESSION['user']['id'],$cart[0],$cart[1],$cart[2],$cart[3],$cart[4],$cart[5],$idbill);
    //     }
    //   }
    //   $listbill = loadone_bill($idbill);
    //   include "./view/bill.php";
    //   break;
    case 'viewcart':
      $listin4 = loadall_in4();
      include ("./view/header.php");
      include 'view/viewcar.php';
      include ("./view/footer.php");
      break;
            
     
       
      case 'vechungtoi':
        $listin4 = loadall_in4();
      include ("./view/header.php");
        include 'view/about.php';
        include ("./view/footer.php");

  
        break;
    case 'shop':
      $listin4 = loadall_in4();
      include ("./view/header.php");
      include 'view/shop.php';
      include ("./view/footer.php");


      break;
      
      case 'lienhe':
        if(isset($_POST['guilh']) && ($_POST['guilh'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $subject = $_POST['subject'];
          $mess = $_POST['mess'];
          insert_contact($name,$email,$subject,$mess);
        }
        $listin4 = loadall_in4();
        include ("./view/header.php");
        include 'view/contact.php';
        include ("./view/footer.php");
        break;
 
      // case 'bill';
      // include "./view/bill.php";
      // break;
      
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














<?php //include_once("./view/footer.php");  ?>



  
  
