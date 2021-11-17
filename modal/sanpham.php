<?php

function insert_sanpham($tensp,$giaold,$gianew,$hinh,$hinhs,$mota,$iddm,$hastag,$nhacungcap){
    $sql="INSERT into product(name,old_price,new_price,img,img_phu,mota,id_cate,id_hastags,id_agent) values('$tensp','$giaold', '$gianew', '$hinh','$hinhs','$mota','$iddm', '$hastag', '$nhacungcap')";
    pdo_execute($sql);

}
function delete_sanpham($id){
    $sql="DELETE from product where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_top10(){
    $sql="select * from product where 1 order by luotxem desc limit 0,10"; 
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select * from product where 1 order by id desc limit 0,9"; 
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
function load_sanpham_cungloai($id,$iddm){
    $sql="select * from product where iddm=".$iddm." AND id <> ".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$tensp,$giaold,$gianew,$hinh,$hinhs,$mota,$iddm,$hastag,$nhacungcap){
    if($hinh!="")
        $sql="UPDATE product set id_cate='".$iddm."', name='".$tensp."', old_price='".$giaold."',new_price='".$gianew."',mota='".$mota."',img='".$hinh."',img_phu='".$hinhs."',id_hastags='".$hastag."',id_agent='".$nhacungcap."' WHERE id=".$id;
    else 
        $sql="UPDATE product set id_cate='".$iddm."', name='".$tensp."', old_price='".$giaold."',new_price='".$gianew."',mota='".$mota."',id_hastags='".$hastag."',id_agent='".$nhacungcap."' where id=".$id;   
        var_dump($sql);
        die;
        pdo_execute($sql);
    
    
}
function update_luotxem($idsp){
    $sql = "update sanpham set luotxem = luotxem + 1 where id=".$idsp;
    pdo_execute($sql);

}

?>