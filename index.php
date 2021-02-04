<?php 
//start session
session_start();

require_once('php/CreateDb.php');
require_once('./component.php');
//create instance of CreateDb class
$database=new CreateDb("Productdb","Producttb");

if(isset($_POST['add'])){
 //print_r($_POST['id']);
  if(isset($_SESSION['cart'])){

    $item_array_id =array_column($_SESSION['cart'],'id');
    if(in_array($_POST['id'],$item_array_id)){
      echo "<script>alert('product is already in the cart')</script>";
      echo "<script>window.location='index.php'</script>";
    }else{
      $count=count($_SESSION['cart']);
      $item_array=array(
       'id'=>$_POST['id']
    );
      $_SESSION['cart'][$count]=$item_array;
      print_r($_SESSION['cart']);
    }

   

  }else{
    $item_array=array(
       'id'=>$_POST['id']
    );
    //create new session variable
    $_SESSION['cart'][0]=$item_array;
    // print_r($_SESSION['cart']);
  }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Shoping Cart</title>
    <link rel="stylesheet" type="text/css" href="tools/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="tools/fontawesome-free-5.12.1-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="tools/style.css">
</head>

<body>
    <?php require_once("php/header.php") ?>

    <div class="container">
        <div class="row text-center py-5">
            <?php
                 display();
              ?>
        </div>
    </div>
    <script type="text/javascript" src="tools/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="tools/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>