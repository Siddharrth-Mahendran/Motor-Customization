<?php

    require 'conection.php';

    if(isset($_POST['action'])){
        $showRecordPerPage =32;
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = $_GET['page'];
        }else{
            $currentPage = 1;
        }
        $startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
        $totalEmpSQL = "SELECT * FROM productlist";
        $allEmpResult = mysqli_query($conn, $totalEmpSQL);
        $totalEmployee = mysqli_num_rows($allEmpResult);
        $lastPage = ceil($totalEmployee/$showRecordPerPage);
        $firstPage = 1;
        $nextPage = $currentPage + 1;
        $previousPage = $currentPage - 1;
        $sql = "SELECT * FROM `productlist` WHERE product_id !='' LIMIT $startFrom, $showRecordPerPage";
        
        if(isset($_POST['ie'])){
            $ie = implode("','", $_POST['ie']);
            $sql .="AND ie IN('".$ie."')";
        }
        if(isset($_POST['phase'])){
            $phase = implode("','", $_POST['phase']);
            $sql .="AND phase IN('".$phase."')";
        }
        if(isset($_POST['poles'])){
            $poles = implode("','", $_POST['poles']);
            $sql .="AND poles IN('".$poles."')";
        }
        if(isset($_POST['output'])){
            $output = implode("','", $_POST['output']);
            $sql .="AND output IN('".$output."')";
        }
        if(isset($_POST['rpm'])){
            $rpm = implode("','", $_POST['rpm']);
            $sql .="AND rpm IN('".$rpm."')";
        }
        if(isset($_POST['mount'])){
            $mount = implode("','", $_POST['mount']);
            $sql .="AND mount IN('".$mount."')";
        }
        if(isset($_POST['body_material'])){
            $body_material = implode("','", $_POST['body_material']);
            $sql .="AND body_material  IN('".$body_material."')";
        }
        if(isset($_POST['frame_size'])){
            $frame_size = implode("','", $_POST['frame_size']);
            $sql .="AND frame_size IN('".$frame_size."')";
        }        
        if(isset($_POST['volts'])){
            $volts = implode("','", $_POST['volts']);
            $sql .="AND volts IN('".$volts."')";
        }       
        if(isset($_POST['frequency'])){
            $frequency = implode("','", $_POST['frequency']);
            $sql .="AND frequency IN('".$frequency."')";
        }
        $result = $conn->query($sql);
        $outpu  = '';

        if($result != false && $result->num_rows>0){
            
            while($row = $result->fetch_assoc()){
                $outpu .=   '<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item"><a href="productdetails.php?product_id='.$row['product_id'].' "></a>
                                <div class="block2">
                                    <div class="block2-pic hov-img0">
                                        <img src="assets/img/product/b3.jpg"class="block2-pic hov-img0"alt="Image"id="img1">
                                        <a href="productdetails.php?product_id='.$row['product_id'].'" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">Quick View</a><br><br>
                                    </div>
                                    <div class="block2-txt flex-w flex-t p-t-14">
                                        <div class="block2-txt-child1 flex-col-l ">
                                            <h4 class="stext-104" class="cl4 hov-cl1 trans-04 js-name-b2 p-b-6"><a>'.$row['product_name'].'</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>';
            }
        }
        else{
            $outpu ="<h3> No Product Found!</h3>";
        }
        echo $outpu;
    }

?>