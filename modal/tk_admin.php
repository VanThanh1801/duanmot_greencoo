<?php // include_once "../modal/pdo.php" ?>
<?php 
function checkuser($user,$pass){
    $sql="SELECT * from qtv where user='".$user."' AND  pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function insert_taikhoan($email,$user,$pass){
    $sql="INSERT into qtv(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
    
}
function update_taikhoan($id,$user,$pass,$email,$address,$tel){
    $sql="UPDATE qtv set user='".$user."', pass='".$pass."', email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;   
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