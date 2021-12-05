<?php 

function loadall_in4(){
    $sql="SELECT * from infor";
    $listin4 = pdo_query($sql);
    return $listin4;
}
//by id desc

?>