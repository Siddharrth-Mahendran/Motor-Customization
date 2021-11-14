<?php
$connect= mysqli_connect('localhost','root','','connect');
    session_start();

    $message="";
	$msg="";


    $user_id = $_SESSION["user_id"];
	$query = "SELECT * FROM register_user WHERE register_user_id = '$user_id'";
    
    $res= mysqli_query($connect,$query);
    
    $row=mysqli_fetch_assoc($res);

    if(isset($_POST['wish'])){
        $product_name=$_POST['product_name'];
	    $product_id=$_POST['product_id'];
        $register_user_id=$row['register_user_id'];
        $user_email=$row['user_email'];
        $name=$row['first_name'];
        $status='1';

        $insert_query="INSERT INTO `wishlist` (`wishlist_id`, `product_id`, `register_user_id`) 
        VALUES ('','$product_id','$register_user_id')";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
   
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</head>
<body>
    <?php echo $msg;
    ?>
    
    <script>
    
        var timer = setTimeout(function() {
            window.location='products.php'
        }, 1000);
    </script>

</body>
</html>