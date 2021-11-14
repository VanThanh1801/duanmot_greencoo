

<?php

function loadall_danhmuc(){
    $sql="select * from category order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function insert_danhmuc($name){
    $sql="insert into category(name) values('$name')";
   

    pdo_execute($sql);
}
?>