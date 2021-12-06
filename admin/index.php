<?php
session_start();
ob_start();
include "../modal/pdo.php"; ?>
<?php include "../modal/danhmuc.php" ?>
<?php include "../modal/taikhoan.php" ?>
<?php include "../modal/nhacungcap.php" ?>
<?php include "../modal/sanpham.php" ?>
<?php include "../modal/binhluan.php" ?>
<?php include "../modal/cart.php" ?>
<?php include "../modal/contact.php"; ?>
<?php include "../modal/in4.php" ?>
<?php include "../modal/tk_admin.php" ?>

  


<body class="g-sidenav-show  bg-gray-100">




  <?php

  if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

      case 'adddm':
        if (isset($_POST['add_category']) && ($_POST['add_category'])) {

          $cate_title = $_POST['cat_title'];

          $image_name = $_FILES['img_cate']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES["img_cate"]["name"]);
          if (move_uploaded_file($_FILES["img_cate"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            //  echo "Sorry, there was an error uploading your file.";
          }




          insert_danhmuc($cate_title, $image_name);
          $thongbao = "Thêm thành công";
        }
        include "danhmuc/add_danhmuc.php";
        break;
      case 'listdm':
        $listdanhmuc = loadall_danhmuc();
        include "danhmuc/danhmuc.php";
        break;
      case 'xoadm':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_danhmuc($_GET['id']);
        }
        $listdanhmuc = loadall_danhmuc();
        include "danhmuc/danhmuc.php";
        break;
      case 'suadm':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $dm = loadone_danhmuc($_GET['id']);
        }
        include "danhmuc/update.php";
        break;
      case 'updatedm':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $tenloai = $_POST['tenloai'];
          $id = $_POST['id'];
          $image_name = $_FILES['img_cate']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES["img_cate"]["name"]);
          if (move_uploaded_file($_FILES["img_cate"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            //  echo "Sorry, there was an error uploading your file.";
          }


          update_danhmuc($id, $tenloai, $image_name);
          $thongbao = "Cập nhật thành công";
        }
        $listdanhmuc = loadall_danhmuc();
        include "danhmuc/danhmuc.php";
        break;
      case 'addsp':
        //kiểm tra xem người dùng có click vào nút add hay không
        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

          $iddm = $_POST['iddm'];
          $tensp = $_POST['tensp'];
          $saleoff = $_POST['saleoff'];
          $giaold = $_POST['giaold'];
          $gianew = $_POST['gianew'];
          $mota = $_POST['mota'];

          $khoiluong = $_POST['kl'];
          $soluong = $_POST['sl'];
          $nhacungcap = $_POST['idncc'];
          $hinh = $_FILES['hinh']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
          if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            //  echo "Sorry, there was an error uploading your file.";
          }




          insert_sanpham($tensp, $saleoff, $giaold, $gianew, $hinh, $mota, $iddm, $nhacungcap, $khoiluong,  $soluong);

          $thongbao = "Thêm thành công";
        }
        $listdanhmuc = loadall_danhmuc();
        $listnhacungcap = loadall_agent();

        include "sanpham/add.php";
        break;
      case 'listsp':
        if (isset($_POST['listok']) && ($_POST['listok'])) {
          $kyw = $_POST['kyw'];
          $iddm = $_POST['iddm'];
        } else {
          $kyw = '';
          $iddm = 0;
        }
        $listdanhmuc = loadall_danhmuc();

        $listsanpham = loadall_sanpham($kyw, $iddm);
        include "../admin/sanpham/list.php";
        break;
      case 'xoasp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_sanpham($_GET['id']);
        }
        $listsanpham = loadall_sanpham();
        include "sanpham/list.php";
        break;

      case 'suasp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $sanpham = loadone_sanpham($_GET['id']);
        }

        $listdanhmuc = loadall_danhmuc();
        $listnhacungcap = loadall_agent();
        $listsanpham = loadall_sanpham();
        include "./sanpham/updatesp.php";
        break;
      case 'updatesp':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $id = $_POST['id'];
          $iddm = $_POST['iddm'];
          $tensp = $_POST['tensp'];
          $saleoff = $_POST['saleoff'];
          $giaold = $_POST['giaold'];
          $gianew = $_POST['gianew'];
          $khoiluong = $_POST['kl'];
          $soluong = $_POST['sl'];
          $mota = $_POST['mota'];
          $hastag = $_POST['hastag'];
          $nhacungcap = $_POST['idncc'];
          $hinh = $_FILES['hinh']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
          if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            //  echo "Sorry, there was an error uploading your file.";
          }

          update_sanpham($id, $tensp, $saleoff, $giaold, $gianew, $hinh, $mota, $iddm, $hastag, $nhacungcap, $soluong, $khoiluong);
          $thongbao = "Cập nhật thành công";
        }

        $listdanhmuc = loadall_danhmuc();
        $listnhacungcap = loadall_agent();
        $listsanpham = loadall_sanpham();
        include "sanpham/list.php";
        break;
      case 'addncc':

        //kiểm tra xem người dùng có click vào nút add hay không
        if (isset($_POST['add_ncc']) && ($_POST['add_ncc'])) {

          $tenncc = $_POST['nhacungcap'];
          $emailncc = $_POST['email_ncc'];
          $dtncc = $_POST['dt_ncc'];
          $diachincc = $_POST['dc_ncc'];
          $trangthaincc = $_POST['tt_ncc'];

          $logo = $_FILES['logo_ncc']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES["logo_ncc"]["name"]);
          if (move_uploaded_file($_FILES["logo_ncc"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            //  echo "Sorry, there was an error uploading your file.";
          }


          insert_nhacungcap($logo, $tenncc, $emailncc, $dtncc, $diachincc, $trangthaincc);
          $thongbao = "Thêm thành công";
        }

        include "nhacungcap/add.php";
        break;
      case 'listncc':

        $listnhacungcap = loadall_agent();

        include "nhacungcap/list.php";
        break;
      case 'xoancc':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_nhacungcap($_GET['id']);
        }
        $listnhacungcap = loadall_agent();
        include "nhacungcap/list.php";
        break;
      case 'suancc':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $nhacungcap = loadone_nhacungcap($_GET['id']);
        }
        include "nhacungcap/update.php";
        break;
      case 'updatencc':
        if (isset($_POST['update_ncc']) && ($_POST['update_ncc'])) {
          $id = $_POST['nameid'];

          $tenncc = $_POST['nhacungcap'];
          $emailncc = $_POST['email_ncc'];
          $dtncc = $_POST['dt_ncc'];
          $diachincc = $_POST['dc_ncc'];
          $trangthaincc = $_POST['tt_ncc'];
          $image = $_FILES['logo_ncc']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES["logo_ncc"]["name"]);
          if (move_uploaded_file($_FILES["logo_ncc"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            //  echo "Sorry, there was an error uploading your file.";
          }

          update_nhacungcap($id, $image, $tenncc, $emailncc, $dtncc, $diachincc, $trangthaincc);
          $thongbao = "Cập nhật thành công";
        }
        $listnhacungcap = loadall_agent();
        include "nhacungcap/list.php";
        break;
      case 'dangnhap':
        if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          $checkuser = checkadmin($user, $pass);
          if (is_array($checkuser)) {
            $_SESSION['user'] = $checkuser;
            header('refresh:0.5,url=index.php');
            $thongbao = "Welcome Back!!! " . $user;
          } else {
            $thongbao = "Sai tên đăng nhập hoặc mật khẩu ";
          }
        }
        include_once "./login-admin/sign-in.php";
        break;
      case 'dangky':
        if (isset($_POST['dangky']) && ($_POST['dangky'])) {
          $email = $_POST['email'];
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          insert_taikhoan($email, $user, $pass);
        }
        include_once "./login-admin/sign-up.php";
        break;
      case 'listtkadmin':
        $tkadmin = loadall_tk_admin();
        include "login-admin/listadmin.php";
        break;
      case 'addadmin':
        if (isset($_POST['addadmin']) && ($_POST['addadmin'])) {
          $user = $_POST['user'];
          $email = $_POST['email'];
          $pass = $_POST['pass'];
          insert_taikhoan($email, $user, $pass);
          $thongbao = "Thêm thành công";
        }
        include "login-admin/addqtv.php";
        break;
      case 'deladmin':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          del_taikhoan($_GET['id']);
        }
        $tkadmin = loadall_tk_admin();
        include "login-admin/listadmin.php";
        break;
      case 'editadmin':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $fullname = $_POST['fullname'];
          $tel = $_POST['tel'];
          $id = $_POST['id'];
          update_taikhoan($id, $user, $pass, $email, $address, $fullname, $tel);
          $_SESSION['user'] = checkuser($user, $pass);
          header("location:index.php?act=editadmin");
          if (is_array($checkuser)) {
            $_SESSION['user'] = $checkuser;
            header('location:index.php');
          }
        }
        include "./login-admin/edit.php";
        break;
      case 'logout':
        session_unset();
        header('location:index.php?act=dangnhap');
        break;
      case 'listbl':
        $listbinhluan = loadall_binhluan(0);
        include "binhluan/list.php";


        break;
      case 'xoabl':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_binhluan($_GET['id']);
        }
        $listbinhluan = selectall_binhluan();
        include "binhluan/list.php";
        break;
        //duy
      case 'listlh':
        $listcontact = loadall_mess();
        include "contact/list.php";
        break;
      case 'xoalh':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          del_mess($_GET['id']);
        }
        $listcontact = loadall_mess();
        include "contact/list.php";
        break;
      case 'updatecus':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $contact = loadone_contact($_GET['id']);
        }
        include "contact/addimg.php";
        break;
      case 'themanh':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $id = $_POST['id'];
          $img = $_FILES['hinh']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
          if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            //  echo "Sorry, there was an error uploading your file.";
          }
          update_anh($id, $img);
        }
        $listcontact = loadall_mess();
        include "contact/list.php";
        break;

      case 'in4':
        $ttinlienhe = loadall_in4();
        include "./inforWeb/list.php";
        break;
      case 'editin4':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $in4 = loadone_in4($_GET['id']);
        }
        include "./inforWeb/edit.php";
        break;
      case 'donein4':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $id = $_POST['id'];
          $hotline1 = $_POST['hotline1'];
          $hotline2 = $_POST['hotline2'];
          $mail = $_POST['mail'];
          $add = $_POST['add'];
          $uudai1 = $_POST['ud1'];
          $uudai2 = $_POST['ud2'];
          update_ttin($id,$hotline1,$hotline2,$mail,$add,$uudai1,$uudai2);
          }
          $ttinlienhe = loadall_in4();
          include "./inforWeb/list.php";
          break;
      case 'listbill':
        if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
          $kyw = $_POST['kyw'];
        } else {
          $kyw = "";
        }
        $listbill = loadall_bill(0);



        include "bill/listbill.php";
        break;
      case 'xoadh':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_bill($_GET['id']);
        }
        $listbill = loadall_bill(0);
        include "bill/listbill.php";
        break;
      case 'suadh':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $suabill = loadone_bill($_GET['id']);
        }


        include "./bill/updatebill.php";
        break;

      case 'updatedh':
        if (isset($_POST['capnhatbill']) && ($_POST['capnhatbill'])) {
          $id = $_POST['id'];


          $ttdonhang = $_POST['iddonhang'];

          update_donhang($id, $ttdonhang);
          $thongbao = "Cập nhật thành công";
        }

        $listbill = loadall_bill();
        include "bill/listbill.php";
        break;
      case 'chitietbill':
        $bill = loadone_bill($_GET['id']);


        $billadminct = loadall_cart($_GET['id']);

















        include "billct/list.php";

        break;

      case 'thongke':
        $listthongke = loadall_thongke();



        include "thongke/list.php";
        break;
      case 'bieudo':
        $listthongke = loadall_thongke();








        include "thongke/bieudo.php";
        break;
      case 'dskh':
        $listtaikhoan = loadall_customer();
        include "taikhoan/list.php";
        break;
      case 'xoatk':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_customer($_GET['id']);
        }
        $listtaikhoan = loadall_customer();

        include "taikhoan/list.php";
        break;
      case 'suatk':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $taikhoan = loadone_taikhoan($_GET['id']);
        }
        include "taikhoan/update.php";
        break;
      case 'updatetk':
        if (isset($_POST['capnhattk']) && ($_POST['capnhattk'])) {

          $user = $_POST['user'];
          $pass = $_POST['password'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $tel = $_POST['tel'];
          $id = $_POST['id'];




          update_customer($id, $user, $pass, $email, $address, $tel,);
          $thongbao = "Cập nhật thành công";
        }
        $listtaikhoan = loadall_customer();
        include "taikhoan/list.php";
        break;
      case 'listbanner':
        $listban = loadall_banner();
        include "banner/list.php";
        break;
      case 'addbanner':

        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
          $text1 = $_POST['text1'];
          $text2 = $_POST['text2'];
          $status = $_POST['sts'];
          $hinh = $_FILES['hinh']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
          if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            //  echo "Sorry, there was an error uploading your file.";
          }
          insert_banner($text2, $text1, $status, $hinh);

          $thongbao = "Thêm thành công";
        }
        include "banner/add.php";
        break;
      case 'delbn':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          del_banner($_GET['id']);
        }
        $listban = loadall_banner();

        include "banner/list.php";
        break;
      case 'upban':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $bn = loadone_banner($_GET['id']);
        }
        include "banner/edit.php";
        break;
      case 'editban':
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $id = $_POST['id'];
          $text1 = $_POST['text1'];
          $text2 = $_POST['text2'];
          $status = $_POST['sts'];
          $hinh = $_FILES['hinh']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
          if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            //  echo "Sorry, there was an error uploading your file.";
          }
          update_banner($id,$hinh,$text1,$text2,$status);

          $thongbao = "Sửa thành công";
        }
        $listban = loadall_banner();
        include "banner/list.php";
        break;
        case 'logo':
          $logoweb = loadall_logo(); 
          include "./logo/list.php";
          break;
        case 'uplg':
          case 'updatecus':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
              $lg = loadone_logo($_GET['id']);
            }
            include "logo/edit.php";
            break;
          case 'donelogo':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
              $id = $_POST['id'];
              $img = $_FILES['hinh']['name'];
              $target_dir = "../upload/";
              $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
              if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
              } else {
                //  echo "Sorry, there was an error uploading your file.";
              }
              update_logo($id,$img);
            }
            $logoweb = loadall_logo(); 
            include "logo/list.php";
            break;
    
          break;
    }
  } else {
    if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])) {
      header('location:index.php?act=dangnhap');
    } else {
      header('refresh:0.5,location:index.php');
      include('header.php');
      include('sidebar.php');
      include('footer.php');
    }
  }


  ?>
</body>
<script type="text/javascrip" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">

</script>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('mota');
</script>

</html>