<?php


function insert_sanpham($tensp,$saleoff,$giaold,$gianew,$hinh,$mota,$iddm,$nhacungcap, $khoiluong,  $soluong ){
    $sql="INSERT into product(name,saleoff,old_price,new_price,img,mota,id_cate,id_agent, product_quanlilty, product_kl) values('$tensp','$saleoff','$giaold', '$gianew', '$hinh','$mota','$iddm', '$nhacungcap', '$soluong', '$khoiluong')";


    pdo_execute($sql);

}
function delete_sanpham($id){
    $sql="DELETE from product where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_top10(){
    $sql="select * from product where 1 order by view asc limit 0,8"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select * from product where 1 order by id desc limit 0,4"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_saleoff(){
    $sql="select * from product where 1 order by id asc limit 0,6"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_new(){
    $sql="select * from product where 1 order by id desc limit 0,4"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from product where 1"; 
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and id_cate ='".$iddm."'";
    }
    $sql.=" order by id desc limit 0,20";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_shop(){
    $sql="SELECT * from product where 1 order by id desc limit 0,16"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_sale(){
    $sql="SELECT * from product where 1 order by id desc limit 0,6"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="SELECT * from category where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
function loadone_sanpham($id){
    $sql="SELECT * from product where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id,$iddm){
    $sql="SELECT * from product where id_cate =".$iddm." AND id <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id,$tensp,$saleoff,$giaold,$gianew,$hinh,$mota,$iddm,$nhacungcap, $khoiluong,  $soluong){
    if($hinh!="")
        $sql="UPDATE product set id_cate='".$iddm."', name='".$tensp."', saleoff = '".$saleoff."' ,old_price='".$giaold."',new_price='".$gianew."',mota='".$mota."',img='".$hinh."',id_agent='".$nhacungcap."', product_quanlilty = '".$soluong."', product_kl = '".$khoiluong."' WHERE id=".$id;
    else 
        $sql="UPDATE product set id_cate='".$iddm."', name='".$tensp."', saleoff = '".$saleoff."', old_price='".$giaold."',new_price='".$gianew."',mota='".$mota."',id_agent='".$nhacungcap."',  product_quanlilty = '".$soluong."', product_kl = '".$khoiluong."' where id=".$id;   


      
        pdo_execute($sql);
    
    
}
function update_luotxem($idsp){
    $sql = "update sanpham set luotxem = luotxem + 1 where id=".$idsp;
    pdo_execute($sql);

}

?>