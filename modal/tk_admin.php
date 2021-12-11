
<?php 
function checkadmin($user,$pass){
    $sql="SELECT * from qtv where user='".$user."' AND  pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function insert_taikhoan($email,$user,$pass){
    $sql="INSERT into qtv(email,user,pass) values('$email','$user','$pass')";
    // var_dump($sql);
    // die;
    pdo_execute($sql);
    
}
function update_taikhoan($id,$user,$pass,$email,$tel,$address,$fullName){
    $sql="UPDATE qtv set user='".$user."', pass='".$pass."', email='".$email."',tel='".$tel."',address='".$address."',fullName='".$fullName."' where id=".$id;   
    pdo_execute($sql);
}

function loadall_tk_admin(){

    $sql="SELECT * from qtv order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;

}
function loadall_taikhoan(){
    $sql="SELECT * from customer order by id desc";
    $tkadmin=pdo_query($sql);
    return $tkadmin;
}
function del_taikhoan($id){
    $sql="DELETE from qtv where id=".$id;
    pdo_execute($sql);
}
?>


<!-- Check session để bắt buộc đăng nhập -->
<?php
    class session{
        public static function checkSession(){
            if(session_id()=='') session_start();
            if(!isset($_SESSION['isLogin'])){
                session_destroy();
                header('Location:login-admin/sign-in.php');
            }
        }
        public static function checkLogin(){
            if(session_id()=='') session_start();
            if(isset($_SESSION['isLogin'])){
                header('Location:admin/index.php');
            }
        }
    }
?>