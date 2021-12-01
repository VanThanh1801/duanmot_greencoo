<?php 
function tongdon(){								
    $tong = 0;								
    foreach($_SESSION['mycart'] as $cart){
	$thanhtien = $cart[3] * $cart[6];
	$tong += $thanhtien;
    }
    return $tong;                          
}
function insert_bill($name,$email,$address,$tel,$pttt,$date,$tongdon){
    $sql = "INSERT INTO billing(name,email,address,tel,method,date,total) VALUES ('$name','$email','$address','$tel','$pttt','$date','$tongdon'";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$total,$thanhtien,$idbill){
    $sql = "INSERT INTO billing(iduser,idpro,name,price,total,thanhtien,idbill) VALUES ('$iduser','$idpro','$img','$name','$price','$total','$thanhtien','$idbill'";
    return pdo_execute($sql);
}
function loadone_bill($idbill){
    $sql = "SELECT * FROM bill where id = ".$idbill;
    $bill = pdo_query_one($sql);
    return $bill;
}

?>