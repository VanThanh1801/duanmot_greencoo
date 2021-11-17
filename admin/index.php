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
                           
      //kiểm tra xem người dùng có click vào nút add hay không
      if(isset($_POST['add_category'])&&($_POST['add_category'])){
          $tenloai=$_POST['cat_title'];
        
          insert_danhmuc($tenloai);
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
          update_danhmuc($id,$tenloai);
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
      $nhacungcap = $_POST['idncc'];
      $hinh=$_FILES['hinh']['name'];
      $target_dir = "../upload/";
      $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                   // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                      //  echo "Sorry, there was an error uploading your file.";
                  }
      $hinhs=$_FILES['hinhs']['name'];
      $target_file = $target_dir . basename($_FILES["hinhs"]["name"]);
      if (move_uploaded_file($_FILES["hinhs"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
     } else {
           //  echo "Sorry, there was an error uploading your file.";
       }
     

      // if(isset($_FILES['hinhs'])){
      //   $files = $_FILES['hinhs'];
      //   $file_names = $files['name'];
      //   foreach($file_names as $key => $value){
      //     move_uploaded_file($files['tmp_name'][$key],  '../uploads'. $value);

      //   }

      // }

        // 

        // $id_pro = mysqli_insert_id($conn);
        // foreach($file_names as $key => $value){
        //   insert_image($id_pro, $value);

        // }
        insert_sanpham($tensp,$giaold,$gianew,$hinh,$hinhs,$mota,$iddm,$hastag,$nhacungcap);
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
// case 'suasp':
//     if(isset($_GET['id'])&&($_GET['id']>0)){
//         $sanpham=loadone_sanpham($_GET['id']);
//     }
//     $listdanhmuc=loadall_danhmuc(); 
//     // var_dump($listdanhmuc);
//     // die;
//     $thongbao="Cập nhật thành công";
//     include "sanpham/update.php";
//     break;
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
      $iddm=$_POST['iddm'];
      $tensp=$_POST['tensp'];
      $giaold=$_POST['giaold'];
      $gianew = $_POST['gianew'];
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
      $hinhs=$_FILES['hinhs']['name'];
      $target_file = $target_dir . basename($_FILES["hinhs"]["name"]);
      if (move_uploaded_file($_FILES["hinhs"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
     } else {
           //  echo "Sorry, there was an error uploading your file.";
       }
     
        update_sanpham($id,$tensp,$giaold,$gianew,$hinh,$hinhs,$mota,$iddm,$hastag,$nhacungcap);
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