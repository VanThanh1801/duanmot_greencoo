<?php 

function insert_contact($name,$email,$subject,$mess){
    $sql="INSERT into contact(name,email,subject,mess) values('$name','$email','$subject','$mess')";
    pdo_execute($sql);
}
function loadall_mess(){
    $sql="SELECT * from contact order by id desc";
    $listcontact=pdo_query($sql);
    return $listcontact;
}
function del_mess($id){
    $sql="DELETE from contact where id=".$id;
    pdo_execute($sql);

}
?>