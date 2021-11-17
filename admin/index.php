<?php
include "../modal/pdo.php";?>
<?php include "../modal/danhmuc.php"?>
<?php include "../modal/nhacungcap.php"?>
<?php include "../modal/sanpham.php"?>
<?php include('header.php') ?>

<body class="g-sidenav-show  bg-gray-100">
    <?php include('sidebar.php') ?>



    <?php 

if(isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {

    case 'adddm':
      if(isset($_POST['add_category'])&&($_POST['add_category'])){
     
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
          $thongbao="Thêm thành công";
          
      }
      include "danhmuc/add_danhmuc.php";
      break;
    case 'listdm':
      $listdanhmuc=loadall_danhmuc();
      include "danhmuc/danhmuc.php";
      break; 
      case 'xoadm':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            delete_danhmuc($_GET['id']);
        }
        $listdanhmuc=loadall_danhmuc();
        include "danhmuc/danhmuc.php";
        break;
    case 'suadm':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            $dm=loadone_danhmuc($_GET['id']);
        }
        include "danhmuc/update.php";
        break; 
    case 'updatedm':
      if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
          $tenloai=$_POST['tenloai'];
          $id=$_POST['id'];
          $image_name = $_FILES['img_cate']['name'];
          $target_dir = "../upload/";
          $target_file = $target_dir . basename($_FILES["img_cate"]["name"]);
                    if (move_uploaded_file($_FILES["img_cate"]["tmp_name"], $target_file)) {
                      // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                          //  echo "Sorry, there was an error uploading your file.";
                      }
    
       
          update_danhmuc($id,$tenloai, $image_name);
          $thongbao="Cập nhật thành công";
      }
      $listdanhmuc=loadall_danhmuc();
      include "danhmuc/danhmuc.php";
      break;
    case 'addsp':
        //kiểm tra xem người dùng có click vào nút add hay không
    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
     
      $iddm=$_POST['iddm'];
      $tensp=$_POST['tensp'];
      $giaold=$_POST['giaold'];
      $gianew = $_POST['gianew'];
      $mota=$_POST['mota'];
      $hastag = $_POST['hastag'];
      $khoiluong = $_POST['kl'];
      $soluong = $_POST['sl'];
      $nhacungcap = $_POST['idncc'];
      $hinh=$_FILES['hinh']['name'];
      $target_dir = "../upload/";
      $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                   // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                      //  echo "Sorry, there was an error uploading your file.";
                  }
    

     
        insert_sanpham($tensp,$giaold,$gianew,$hinh,$mota,$iddm,$hastag,$nhacungcap,$khoiluong,  $soluong  );
        $thongbao="Thêm thành công";
        
    }
    $listdanhmuc=loadall_danhmuc();
    $listnhacungcap=loadall_nhacungcap();
    $listhastags = loadall_hastags();
    include "sanpham/add.php";
    break;
case 'listsp':
      if(isset($_POST['listok'])&&($_POST['listok'])){
        $kyw=$_POST['kyw'];
        $iddm=$_POST['iddm'];
    }else{
        $kyw='';
        $iddm=0;
    }
    $listdanhmuc=loadall_danhmuc();
    $listhastags=loadall_hastags();
    $listsanpham=loadall_sanpham($kyw,$iddm);
    include "../admin/sanpham/list.php";
    break;
case 'xoasp':
    if(isset($_GET['id'])&&($_GET['id']>0)){
        delete_sanpham($_GET['id']);
    }
    $listsanpham=loadall_sanpham();
    include "sanpham/list.php";
    break;

case 'suasp':
  if(isset($_GET['id'])&&($_GET['id']>0)){
      $sanpham=loadone_sanpham($_GET['id']);
     
  }
  $listhastags=loadall_hastags();
  $listdanhmuc=loadall_danhmuc();
  $listnhacungcap=loadall_nhacungcap();
  $listsanpham=loadall_sanpham();
  include "./sanpham/updatesp.php";
  break; 
case 'updatesp':
    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
      $id = $_POST['id'];
      $iddm=$_POST['iddm'];
      $tensp=$_POST['tensp'];
      $giaold=$_POST['giaold'];
      $gianew = $_POST['gianew'];
      $khoiluong = $_POST['kl'];
      $soluong = $_POST['sl'];
      $mota=$_POST['mota'];
      $hastag = $_POST['hastag'];
      $nhacungcap = $_POST['idncc'];
      $hinh=$_FILES['hinh']['name'];
      $target_dir = "../upload/";
      $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
      if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
            //  echo "Sorry, there was an error uploading your file.";
        }

        update_sanpham($id,$tensp,$giaold,$gianew,$hinh,$mota,$iddm,$hastag,$nhacungcap, $soluong, $khoiluong);
        $thongbao="Cập nhật thành công";
    }
    $listhastags=loadall_hastags();
    $listdanhmuc=loadall_danhmuc();
    $listnhacungcap=loadall_nhacungcap();
    $listsanpham=loadall_sanpham();
    include "sanpham/list.php";
    break;
    case 'addncc':
                           
      //kiểm tra xem người dùng có click vào nút add hay không
      if(isset($_POST['add_ncc'])&&($_POST['add_ncc'])){
        $tenncc = $_POST['nhacungcap'];
        $emailncc = $_POST['email_ncc'];
        $dtncc = $_POST['dt_ncc'];
        $diachincc = $_POST['dc_ncc'];
        $trangthaincc = $_POST['tt_ncc'];
          
        
          insert_nhacungcap($tenncc,$emailncc,$dtncc, $diachincc,$trangthaincc);
          $thongbao="Thêm thành công";
      }
      
      include "nhacungcap/add.php";
      break;
    case 'listncc':
   
      $listnhacungcap=loadall_nhacungcap();
      
      include "nhacungcap/list.php";
      break;
    case 'xoancc':
      if(isset($_GET['id'])&&($_GET['id']>0)){
          delete_nhacungcap($_GET['id']);
      }
      $listnhacungcap=loadall_nhacungcap();
      include "nhacungcap/list.php";
      break;
  case 'suancc':
      if(isset($_GET['id'])&&($_GET['id']>0)){
          $nhacungcap=loadone_nhacungcap($_GET['id']);
      }
      include "nhacungcap/update.php";
      break; 
  case 'updatencc':
    if(isset($_POST['update_ncc'])&&($_POST['update_ncc'])){
        $id = $_POST['nameid'];
        $tenncc = $_POST['nhacungcap'];
        $emailncc = $_POST['email_ncc'];
        $dtncc = $_POST['dt_ncc'];
        $diachincc = $_POST['dc_ncc'];
        $trangthaincc = $_POST['tt_ncc'];
      
        update_nhacungcap($id,$tenncc,$emailncc, $dtncc, $diachincc,$trangthaincc);
        $thongbao="Cập nhật thành công";
    }
    $listnhacungcap=loadall_nhacungcap();
    include "nhacungcap/list.php";
      break;


  }
}


?>
    <?php include('footer.php') ?>
</body>

</html>