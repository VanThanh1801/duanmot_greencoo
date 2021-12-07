<?php 

function loadall_in4(){
    $sql="SELECT * from infor";
    $listin4 = pdo_query($sql);
    return $listin4;
}
function loadone_in4($id){
    $sql="SELECT * from infor where id=".$id;
    $in4=pdo_query_one($sql);
    return $in4;
}
function update_ttin($id,$hotline1,$hotline2,$mail,$add,$uudai1,$uudai2){
    $sql="UPDATE infor set hotline1='".$hotline1."', hotline2='".$hotline2."', mail='".$mail."',add='".$add."',uudai1='".$uudai1."',uudai2='".$uudai2."' WHERE id=".$id;   
    pdo_execute($sql);
}
function loadall_banner(){
    $sql="SELECT * from banner order by id desc";
    $listban=pdo_query($sql);
    return $listban;
}
function insert_banner($text2,$text1,$status, $hinh){
    $sql = "INSERT INTO banner(img,text1,text2,status) Values ('$hinh','$text2','$text1','$status')";
    pdo_execute($sql);
}
function update_banner($id,$hinh,$text1,$text2,$status){
    $sql="UPDATE banner set img='".$hinh."', text1='".$text1."', text2='".$text2."',status='".$status."' where id=".$id;   
    pdo_execute($sql);
}
function loadone_banner($id){
    $sql="SELECT * from banner where id=".$id;
    $bn=pdo_query_one($sql);
    return $bn;
}
function del_banner($id){
    $sql="DELETE from banner where id=".$id;
    pdo_execute($sql);
}
function loadall_logo(){
    $sql="SELECT * from logo";
    $listlg=pdo_query($sql);
    return $listlg;}

    function update_logo($id,$img){
        $sql="UPDATE logo set  logo='".$img."' WHERE id=".$id;
        pdo_execute($sql);
            
    }
    function loadone_logo($id){
        $sql="SELECT * from logo where id=".$id;
        $ct=pdo_query_one($sql);
        return $ct;
    }
//by id desc
