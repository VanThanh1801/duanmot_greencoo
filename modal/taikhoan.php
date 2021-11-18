<?php 

function checkuser($user,$pass){
    $sql="SELECT * from customer where user='".$user."' AND  pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
?>