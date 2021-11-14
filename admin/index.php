<?php
include "../modal/pdo.php";?>
<?php include "../modal/danhmuc.php"?>
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


  }
}


?>
    <?php include('footer.php') ?>
</body>

</html>