<?php 
function viewcart($del){
$tong = 0;
$i = 0;
global $img_path;

if($del == 1){
    $xoasp_th = '  <th>&nbsp;</th>';
    
    
}else{
    $xoasp_th = '';
   
   
}
echo'
<thead class="thead-primary">
    <tr class="text-center">
        
        '.$xoasp_th.'
        <th>Hình sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Gía mới</th>
        <th>Giá cũ</th>
        <th>Sale</th>
        <th>Số lượng</th>
        <th>Tổng tiền</th>
    </tr>   
</thead>
';

foreach($_SESSION['mycart'] as $cart){
    $hinh = $img_path.$cart[2];
    $thanhtien = $cart[3] * $cart[6];
    $tong += $thanhtien;

    if($del == 1){
       
        $xoasp_td = '<td class="product-remove"><a href="index.php?act=delcart&idcart='.$i.'"><span class="ion-ios-close"></span></a></td>';
        
    }else{
        
        $xoasp_td = '';
       
    }
   
    echo '
    
    <tr class="text-center">
   '.$xoasp_td.'
    <td class="image-prod">
        <div class="img" style="background-image:url('.$hinh.');"></div>
    </td>

    <td class="product-name">
        <h3>'.$cart[1].'</h3>
        <p>Far far away, behind the word mountains, far from the countries</p>
    </td>

    <td class="price">'.$cart[3].'</td>
    <td class="price">'.$cart[4].'</td>
    <td class="price">'.$cart[5].'</td>



    <td class="quantity">
        <div class="input-group mb-3">
            <input type="text" name="quantity"
                class="quantity form-control input-number" value="1" min="1" max="100">
        </div>
    </td>

    <td class="total">'.$thanhtien.' VND</td>
</tr>
    
    ';
    $i += 1;

   
}
echo '

<div class="cart-total mb-3">
<h3>GIỎ HÀNG</h3>
<p class="d-flex">
    <span>Tổng giá trị đơn hàng</span>
    <span>'.$tong.' VND</span>
</p>    
<p class="d-flex">
    <span>Phí giao hàng tạm tính</span>
    <span>20.000 VND</span>
</p>

<hr>

</div>

';

}


function bill_chi_tiet($listbill){
    $tong = 0;
    $i = 0;
    global $img_path;
    
    
    echo'
    <thead class="thead-primary">
        <tr class="text-center">
            
           
            <th>Hình sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Gía mới</th>
            <th>Giá cũ</th>
            <th>Sale</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>   
    </thead>
    ';
    
    foreach($listbill as $cart){
        $hinh = $img_path.$cart['img'];
        
        $tong += $cart['thanhtien'];
    
        
       
        echo '
        
        <tr class="text-center">
      
        <td class="image-prod">
            <div class="img" style="background-image:url('.$hinh.');"></div>
        </td>
    
        <td class="product-name">
            <h3>'.$cart['name'].'</h3>
            <p>Far far away, behind the word mountains, far from the countries</p>
        </td>
    
        <td class="price">'.$cart['price'].'</td>
        <td class="price">'.$cart['soluong'].'</td>
        
    
    
        <td class="quantity">
            <div class="input-group mb-3">
                <input type="text" name="quantity"
                    class="quantity form-control input-number" value="1" min="1" max="100">
            </div>
        </td>
    
        <td class="total">'.$cart['thanhtien'].' VND</td>
    </tr>
        
        ';
        $i += 1;
    
       
    }
    echo '
    
    <div class="cart-total mb-3">
    <h3>GIỎ HÀNG</h3>
    <p class="d-flex">
        <span>Tổng giá trị đơn hàng</span>
        <span>'.$tong.' VND</span>
    </p>    
    <p class="d-flex">
        <span>Phí giao hàng tạm tính</span>
        <span>20.000 VND</span>
    </p>
  
    <hr>
    
    </div>
    
    ';
    
    }


function tongdonhang(){
    $tong = 0;
   
    
    foreach($_SESSION['mycart'] as $cart){
       
        $thanhtien = $cart[3] * $cart[6];
        $tong += $thanhtien;    
    
       
    
    }
    return $tong;
}
function insert_bill($iduser, $name, $email, $diachi, $tel, $pttt, $ngaydathang, $tongdonhang){
    $sql = "INSERT into bill(iduser, bill_name, bill_email, bill_address, bill_tel, bill_pttt, ngaydathang, total) values('$iduser', '$name', '$email', '$diachi', '$tel', '$pttt', '$ngaydathang', '$tongdonhang')";
    // var_dump($sql);
    // die;

   
   
     return pdo_execute_return_lastInsertId($sql);
   
   

}
function inset_cart($iduser, $idpro, $img, $name, $price, $total, $thanhtien, $idbill){

    $sql = "INSERT into cart(  `iduser`, `idpro`, `img`, `name`, `price`,`soluong`, `thanhtien`, `idbill`) values('$iduser', '$idpro', '$img', '$name', '$price', '$total', '$thanhtien', '$idbill')";
//   var_dump($sql);
//   die;
    pdo_execute($sql);   

}
function loadone_bill($id){
    $sql = "SELECT * from bill where id=".$id;
    $bill = pdo_query_one($sql);
    return $bill;

}
function loadall_cart($idbill){
    $sql = "SELECT * from cart where idbill=".$idbill;
    $bill = pdo_query($sql);
    return $bill;

}
function loadall_cart_count($idbill){
    $sql = "SELECT * from cart where idbill=".$idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);

}
function loadall_bill( $iduser){

    $sql = "SELECT * from bill where 1 ";
    if($iduser > 0)   $sql .=" AND iduser=".$iduser;
    // if($kyw != "")   $sql .=" AND id like '% " .$kyw. "%'";
    $sql .= " order by id desc ";
  
    $listbill = pdo_query($sql);
    return $listbill;

}

function get_ttdh($n){
    switch($n){
        case 0:
            $tt = "Đơn hàng mới";
            break;
        case 1:
            $tt = "Đang sử lý";
            break;
        case 2:
            $tt = "Đang giao hàng";
            break;
        case 3:
            $tt = "Hoàn tất";
            break;
        default: 
            $tt = "Đơn hàng mới";
            break;
        
    }
    return $tt;

}
function loadall_thongke(){
    $sql = "SELECT category.name as tendm, category.id as madm,  count(product.id) as countsp , min(product.new_price) as minprice, max(product.new_price) as maxprice, avg(product.new_price) as avgprice";
    $sql .= " from product left join category on category.id = product.id_cate";
    $sql .= " group by category.id order by category.id desc";
    
    
  
    $listthongke = pdo_query($sql);
    return $listthongke;
}
function delete_bill($id){
    $sql="delete from bill where id=".$id;
    pdo_execute($sql);
}
function update_donhang($id, $ttdonhang){
    $sql="UPDATE bill set bill_status ='".$ttdonhang."'  where id=".$id;
    // var_dump($sql);
    // die;
    pdo_execute($sql);
}





?>