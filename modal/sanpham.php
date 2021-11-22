<?php

function insert_sanpham($tensp,$giaold,$gianew,$hinh,$mota,$iddm,$hastag,$nhacungcap, $khoiluong,  $soluong ){
    $sql="INSERT into product(name,old_price,new_price,img,mota,id_cate,id_hastags,id_agent, product_quanlilty, product_kl) values('$tensp','$giaold', '$gianew', '$hinh','$mota','$iddm', '$hastag', '$nhacungcap', '$soluong', '$khoiluong')";
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
    $sql="SELECT * from product where 1"; 
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
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
        $sql="select * from danhmuc where id=".$iddm;
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
// function loadone_sanpham_product_single($id){
//     $sql="SELECT * from product where id=".$id;
//     $sp=pdo_query_one($sql);
//     return $sp;
// }
function load_sanpham_cungloai($id,$iddm){
    $sql="select * from product where iddm=".$iddm." AND id <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$tensp,$giaold,$gianew,$hinh,$mota,$iddm,$hastag,$nhacungcap, $khoiluong,  $soluong){
    if($hinh!="")
        $sql="UPDATE product set id_cate='".$iddm."', name='".$tensp."', old_price='".$giaold."',new_price='".$gianew."',mota='".$mota."',img='".$hinh."',id_hastags='".$hastag."',id_agent='".$nhacungcap."', product_quanlilty = '".$soluong."', product_kl = '".$khoiluong."' WHERE id=".$id;
    else 
        $sql="UPDATE product set id_cate='".$iddm."', name='".$tensp."', old_price='".$giaold."',new_price='".$gianew."',mota='".$mota."',id_hastags='".$hastag."',id_agent='".$nhacungcap."',  product_quanlilty = '".$soluong."', product_kl = '".$khoiluong."' where id=".$id;   
      
        pdo_execute($sql);
    
    
}
function update_luotxem($idsp){
    $sql = "update sanpham set luotxem = luotxem + 1 where id=".$idsp;
    pdo_execute($sql);

}

?>