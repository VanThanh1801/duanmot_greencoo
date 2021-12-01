<?php 
function viewcart($del){
$tong = 0;
$i = 0;
global $img_path;

foreach($_SESSION['mycart'] as $cart){
    $hinh = $img_path.$cart[2];
    $thanhtien = $cart[3] * $cart[6];
    $tong += $thanhtien;

    if($del == 1){
        $xoasp_th = '  <th>&nbsp;</th>';
        $xoasp_td = '<td class="product-remove"><a href="index.php?act=delcart&idcart='.$i.'"><span class="ion-ios-close"></span></a></td>';
    }else{
        $xoasp_th = '';
        $xoasp_td = '';

    }
    // $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><span class="ion-ios-close"></span></a>';
    echo '
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
<p class="d-flex">
    <span>Giảm giá</span>
    <span>15.000 VND</span>
</p>
<hr>

</div>

';

}



?>