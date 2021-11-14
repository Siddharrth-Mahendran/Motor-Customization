<?php
    include('conection.php');
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                    $count_query = "SELECT count(*) as allcount FROM productlist";
                    $count_result = mysqli_query($conn,$count_query);
                    $count_fetch = mysqli_fetch_array($count_result);
                    $postCount = $count_fetch['allcount'];
                    $limit = 3;
               
                    $query = "SELECT * FROM `productlist` ORDER BY `product_id` asc LIMIT 0,".$limit; 
                    $result = mysqli_query($conn,$query);
                    if ($result->num_rows > 0) {
                        while($row = mysqli_fetch_assoc($result)){ 
                        ?>
                        <div class="post"><?php echo $row['product_name']; ?></div>
                        <?php }
                    } ?> 
                    </div>
                    <div class="loadmore">
                    <input type="button" id="loadBtn" value="Load More">
                    <input type="hidden" id="row" value="0">
                    <input type="hidden" id="postCount" value="<?php echo $postCount; ?>">
                    </div>
                </div>
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

            function get_filter_text(text_id){
            var filterData=[];
            $('#'+text_id+':checked').each(function(){
                filterData.push($(this).val());
            });
            return filterData;
            }
            
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
    });
    </script>
<script>
  $(document).ready(function () {
    $(document).on('click', '#loadBtn', function () {
      var row = Number($('#row').val());
      var count = Number($('#postCount').val());
      var limit = 3;
      row = row + limit;
      $('#row').val(row);
      $("#loadBtn").val('Loading...');
 
      $.ajax({
        type: 'POST',
        url: 'loadmore-data.php',
        data: 'row=' + row,
        success: function (data) {
          var rowCount = row + limit;
          $('.postList').append(data);
          if (rowCount >= count) {
            $('#loadBtn').css("display", "none");
          } else {
            $("#loadBtn").val('Load More');
          }
        }
      });
    });
  });
</script>
</body>
</html>