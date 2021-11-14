<?php
include('conection.php');
if (isset($_POST['row'])) {
  $start = $_POST['row'];
  $limit = 10;
  $query = "SELECT * FROM `productlist` ORDER BY `product_id` asc LIMIT ".$start.",".$limit;
  $result = mysqli_query($conn,$query);
  if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="post"><?php echo $row['product_name']; ?></div>
    <?php }
  }
}
?>