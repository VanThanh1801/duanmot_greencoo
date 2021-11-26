<?php 
function viewcart(){
$tong = 0;
$i = 0;
global $img_path;

foreach($_SESSION['mycart'] as $cart){
    $hinh = $img_path.$cart[2];
    $thanhtien = $cart[3] * $cart[6];
    $tong += $thanhtien;
    $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><span class="ion-ios-close"></span></a>';
    echo '
    <tr class="text-center">
    <td class="product-remove">'.$xoasp.'</td>

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