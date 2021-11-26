<?php 
 

 function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
     $sql = "insert into comment(content,id_customer, id_prd, ngaybinhluan) values('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
    //  var_dump($sql);
    //  die;
     pdo_execute($sql);
 }
 function loadall_binhluan($idpro){

    $sql="select * from comment where  1 ";
    if($idpro > 0 )
    $sql .= " AND id_prd = '".$idpro."' ";
    $sql .= "  order by id desc";

    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id){
    $sql="delete from comment where id=".$id;
    pdo_execute($sql);
}
function selectall_binhluan(){
    $sql="select * from comment ";

    return pdo_query($sql);
    
   
}


?>