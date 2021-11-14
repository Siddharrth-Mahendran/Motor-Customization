<?php
require 'conection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fliter test</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <h3> filter </h3>

                <hr>
                <h6 class="text-info">IE</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT ie from `productlist` ORDER BY ie";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['ie']; ?>" id="ie"><?= $row['ie'];?>
                            </label>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>

                <hr>
                <h6 class="text-info">Phase</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT phase from `productlist` ORDER BY phase";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['phase']; ?>" id="phase"><?= $row['phase'];?>
                            </label>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>

                <hr>
                <h6 class="text-info">Output</h6>
                <div style="height: 220px; overflow-y: auto; overflow-x: hidden;">
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT output from `productlist` ORDER BY output";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    
                    <li class="list-group-item">
                    
                        <div class="form-check">
                        
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['output']; ?>" id="output"><?= $row['output'];?>
                            </label>
                        </div>
                       
                    </li>
                   
                    <?php
                        }
                    ?>
                </ul>
                </div>
                
                <hr>
                <h6 class="text-info">Poles</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT poles from `productlist` ORDER BY poles";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['poles']; ?>" id="poles"><?= $row['poles'];?>
                            </label>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>

                <hr>
                <h6 class="text-info">rpm</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT rpm from `productlist` ORDER BY rpm";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['rpm']; ?>" id="rpm"><?= $row['rpm'];?>
                            </label>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>

                <hr>
                <h6 class="text-info">Mount</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT mount from `productlist` ORDER BY mount";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['mount']; ?>" id="mount"><?= $row['mount'];?>
                            </label>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>

                <hr>
                <h6 class="text-info">Body Material</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT body_material from `productlist` ORDER BY body_material";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['body_material']; ?>" id="body_material"><?= $row['body_material'];?>
                            </label>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>

                <hr>
                <h6 class="text-info">Frame Size</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT frame_size from `productlist` ORDER BY frame_size";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['frame_size']; ?>" id="frame_size"><?= $row['frame_size'];?>
                            </label>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>

                <hr>
                <h6 class="text-info">volts</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT volts from `productlist` ORDER BY volts";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['volts']; ?>" id="volts"><?= $row['volts'];?>
                            </label>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>

                <hr>
                <h6 class="text-info">Frequency</h6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT frequency from `productlist` ORDER BY frequency";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= $row['frequency']; ?>" id="frequency"><?= $row['frequency'];?>
                            </label>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <h5 class="text-center" id="textChange"> All products</h5>
                <hr>
                <div class="row" id="result">
                    <?php
                        include_once("conection.php");
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
                        $empSQL = "SELECT * FROM `productlist` LIMIT $startFrom, $showRecordPerPage";
                        $empResult = mysqli_query($conn, $empSQL);		
                        while($row = mysqli_fetch_assoc($empResult)){
                    ?>
                    <div class="col-md-3 mb-2">
                        <div class="card-deck">
                            <div class="card-border-secondary">
                                <img src="assets/img/product/b3.jpg" class="card-img-top" alt="Image" id="img1">
                                <div class="card-img-overlay">
                                    <h6 style="margin-top: 175px;" class="text-light bg-info text-center rounded p-1"><?= $row['product_name']; ?> </h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title text-danger"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <ul class="pagination">
              <?php if($currentPage != $firstPage) { ?>
              <li class="page-item">
                <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
                <span aria-hidden="true">First</span>			
                </a>
              </li>
              <?php } ?>
              <?php if($currentPage >= 2) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
              <?php } ?>
              <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
              <?php if($currentPage != $lastPage) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
                <li class="page-item"><a class="page-link" href="?page=<?php echo ($nextPage)+1 ?>"><?php echo ($nextPage)+1 ?></a></li>
                <li class="page-item">
                  <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
                  <span aria-hidden="true">Last</span>
                  </a>
                </li>
              <?php } ?>
            </ul>
            </div> 
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){

        $(".product_check").click(function(){
            var action='data';
            var ie = get_filter_text('ie');
            var phase = get_filter_text('phase');
            var output = get_filter_text('output');
            var poles = get_filter_text('poles');
            var rpm = get_filter_text('rpm');
            var mount = get_filter_text('mount');
            var body_material = get_filter_text('body_material');
            var frame_size = get_filter_text('frame_size');
            var volts = get_filter_text('volts');
            var frequency = get_filter_text('frequency');

            $.ajax({
                url:'action.php',
                method:'POST',
                data:{action:action,ie:ie,phase:phase,output:output,poles:poles,rpm:rpm,mount:mount,body_material:body_material,frame_size:frame_size,volts:volts,frequency:frequency},
                    success:function(response){
                        $("#result").html(response);
                        $("#textchange").text("Filtered Product");
                    }
            });

        });

        function get_filter_text(text_id){
            var filterData=[];
            $('#'+text_id+':checked').each(function(){
                filterData.push($(this).val());
            });
            return filterData;
        }
    });
    </script>
</body>
</html>