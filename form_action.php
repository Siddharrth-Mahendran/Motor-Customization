<?php 
session_start();
error_reporting(1);
include('conection.php');
?>

<?php
    $msg="";
    
    if(isset($_POST['submit'])){
        $ie=$_POST['ie'];
	$phase=$_POST['phase'];
        $output=$_POST['output'];
        $poles=$_POST['poles'];
        $rpm=$_POST['rpm'];
	$mount=$_POST['mount'];
        $body_material=$_POST['body_material'];
        $frame_size=$_POST['frame_size'];
        $volts=$_POST['volts'];
        $frequency=$_POST['frequency'];
        $ip=$_POST['ip'];
        $insulation=$_POST['insulation'];
        $message=$_POST['message'];
        
        $insert_query="INSERT INTO `enquiry`(`orderid`, `ie`, `phase` , `output`, `poles`, `rpm`, `mount`, `body_material`, `frame_size`, `volts`, `frequency`, `ip`, `insulation`) 
        VALUES ('','$ie','$phase','$output','$poles','$rpm','$mount','$body_material','$frame_size','$volts','$frequency','ip','insulation')"; 
        
        $res= mysqli_query($connection,$insert_query);
        
         if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
            
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sending Enquiry......</title>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</head>
<body>
    <?php echo $msg;
    ?>
    
    <script>
    
        var timer = setTimeout(function() {
            window.location='index.php'
        }, 1000);
    </script>

</body>
</html>
