<?php 

function insert_event($hinh,$title1,$title2,$intro, $evepro,$price_old,$price_new,$status){
    $sql = "INSERT INTO event(img,title1,title2,intro,evepro,price_old,price_new,status) Values ('$hinh','$title1','$title2','$intro','$evepro','$price_old','$price_new','$status')";
    pdo_execute($sql);
}

function update_event($id,$status){
    $sql="UPDATE event set status='".$status."' where id=".$id;   
    pdo_execute($sql);
}

function del_event($id){
    $sql="DELETE from event where id=".$id;
    pdo_execute($sql);
}
function loadall_event(){
    $sql="SELECT * from event order by id desc";
    $listban=pdo_query($sql);
    return $listban;
}
function loadone_event($id){
    $sql="SELECT * from event where id=".$id;
    $bn=pdo_query_one($sql);
    return $bn;
}
?>