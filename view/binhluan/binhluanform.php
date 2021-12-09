<?php 
$id_pro = $_REQUEST['idpro'];
session_start();
ob_start();
include "../../modal/pdo.php";
include "../../modal/binhluan.php";
$dsbl = loadall_binhluan($id_pro);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./view/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./view/css/animate.css">

    <link rel="stylesheet" href="./view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./view/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./view/css/magnific-popup.css">

    <link rel="stylesheet" href="./view/css/aos.css">

    <link rel="stylesheet" href="./view/css/ionicons.min.css">

    <link rel="stylesheet" href="./view/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./view/css/jquery.timepicker.css">


    <link rel="stylesheet" href="./view/css/flaticon.css">
    <link rel="stylesheet" href="./view/css/icomoon.css">
    <link rel="stylesheet" href="./view/css/style.css">

</head>

<body>
   
    <div class="panel panel-default widget">



        <div class="panel-body">
            <ul class="list-group">

            <?php 
            foreach($dsbl as $bl){
                extract($bl);
                echo '
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xs-2 col-md-1">
                            <img src="https://i.pinimg.com/736x/6e/af/1a/6eaf1a844ae4b6fa6eeb6ff17f468cc0.jpg" class="img-circle img-responsive" alt="" />
                        </div>
                        <div class="col-xs-10 col-md-11">
                            <div>
                                <a
                                    href="">
                                    </a>
                                <div class="mic-info">
                                    By: <a href="#">'.$id_customer.'</a>
                                </div>
                            </div>
                            <div class="comment-text">
                               '.$content.'
                            </div>
                            <div class="comment-text">
                            '.$ngaybinhluan.'
                         </div>
                            <div class="action">
                                <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                                <button type="button" class="btn btn-success btn-xs" title="Approved">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                                <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                
                
                ';

            }
            
            
            ?>
                
               
            </ul>

        </div>
        <div class="panel-body">
          <?php 
          if(isset($_SESSION['user']['id'] ) == 0){
              ?>
             
                <p>Bạn đăng nhập để bình luận về sản phẩm</p>
           <?php  
          }else { ?>

            

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="hidden" name="idpro" value="<?= $id_pro ?>">

            <input type="text" name="noidung">
            <input type="submit" name="guibinhluan" value="Gui bình luận" class="guibinhluan">
       
          <?php }
          
          ?>
        </div>
        <?php 
       
        if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
            $noidung = $_POST['noidung'];
            $id_pro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y'); 
            up_socmt($id_pro);
            insert_binhluan($noidung, $iduser, $id_pro, $ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
            // var_dump($_SERVER['HTTP_REFERER']);
            // die;

            // include "../../view/product-single.php";
           


        }
        
        ?>

    </div>
</body>

</html>