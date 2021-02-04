<?php
 session_start();
require_once('php/CreateDb.php');
require_once('component.php');
 $database=new CreateDb("Productdb","Producttb");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CART</title>
	<link rel="stylesheet" type="text/css" href="tools/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="tools/fontawesome-free-5.12.1-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="tools/style.css">
</head>
<body class="bg-light">
	<?php require_once('php/header.php'); ?>
	<div class="container-fluid" >
		<div class="row px-5">
			<div class="col-md-7">
		       <div class="shopping-cart">
		       	<h6>My Cart</h6>
		       	<hr>
		       	<?php cartElement('./images/Steak 2.jpg','steak','120'); 
		       
                 

					// if(isset($_POST['add'])){
					// //print_r($_POST['id']);
					// if(isset($_SESSION['cart'])){

					// $item_array_id =array_column($_SESSION['cart'],'id');
					// if(in_array($_POST['id'],$item_array_id)){
					//   echo "<script>alert('product is already in the cart')</script>";
					//   echo "<script>window.location='cart.php'</script>";
					// }else{
					//   $count=count($_SESSION['cart']);
					//   $item_array=array(
					//    'id'=>$_POST['id']
					// );
					//   $_SESSION['cart'][$count]=$item_array;
					//   // print_r($_SESSION['cart'])cartElement($row['product_name'],$row['product_image'],$row['product_price']);;
					//   // while ($_SESSION['cart'][$count]=$item_array {
					//   // 	# code...
					//   // 	foreach ($item_array_id as $id) {
					//   // 		# code...
					//   // 		if($row['id']==$id){
					  			
					//   // 		}
					//   // 	}
					//   // }

					// }



					// }else{
					// $item_array=array(
					//    'id'=>$_POST['id']
					// );
					// //create new session variable
					// $_SESSION['cart'][0]=$item_array;
					// // print_r($_SESSION['cart']);
					// }
					// }
				
		       	?>
		       
		       </div>
			</div>
			<div class="col-md-5"></div>
		</div>	
	</div>



<script type="text/javascript" src="tools/jquery-3.4.1.js"></script>
<script type="text/javascript" src="tools/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>
