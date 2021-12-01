
<?php
function loadall_customer(){
    $sql="select * from customer order by id desc";
    $listcustomer=pdo_query($sql);
    return $listcustomer;
}
function insert_customer($user, $pass, $email){
    $sql="insert into customer(user,pass, email ) values('$user','$pass','$email')";
    // var_dump($sql);
    // die;

    pdo_execute($sql);
}
function checkuser($email,$pass){
    $sql="select * from customer where email='".$email."' AND  pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql="select * from customer where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_customer($id, $user, $pass, $email, $address, $tel){
    $sql="update customer set user='".$user."', pass='".$pass."', email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;   
    pdo_execute($sql);
}
function delete_customer($id){
    $sql="delete from customer where id=".$id;
    pdo_execute($sql);
}
function loadone_taikhoan($id){
    $sql="SELECT * from customer where id=".$id;
    $taikhoan=pdo_query_one($sql);
    return $taikhoan;
}

?>