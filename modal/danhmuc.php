

<?php

function loadall_danhmuc(){
    $sql="select * from category order by id desc limit 0,6";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadall_nhacungcap(){
    $sql="select * from agent order by id desc limit 0,4";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadall_hastags(){
    $sql = "SELECT * FROM hastags order by id desc";
    $listhastags=pdo_query($sql);
    return $listhastags;
}
function insert_danhmuc($name, $img_cate){
    $sql="insert into category(name, img_cate) values('$name', '$img_cate')";
  
   

    pdo_execute($sql);
}

function loadone_danhmuc($id){
    $sql="select * from category where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function delete_danhmuc($id){
    $sql="delete from category where id=".$id;
    pdo_execute($sql);
}


function update_danhmuc($id,$tenloai, $img_cate){
    $sql="update category set name='".$tenloai."', img_cate = '".$img_cate."' where id=".$id;
    pdo_execute($sql);
}
?>