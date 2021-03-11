<?php
include '../db.php';

if(isset($_GET['offset']) && isset($_GET['limit'])){
  $a=0;
$offset=$_GET['offset'];
$limit=$_GET['limit'];
$data=mysqli_query($connect,"SELECT * FROM `posts`  ORDER BY  date DESC LIMIT {$limit} OFFSET {$offset} ; ");


while($row=mysqli_fetch_assoc($data)){
   ?>
  <a href="post/<?php echo $row['post_id']; ?> " style="text-decoration:none">
  <div class="col-md-4 wow bounce">
    <div class="bimg" style="background:url('img/<?php echo $row['post_image']?>')">
      <div class="w-overlay">
        <button class="se-btn">See More</button>
      </div>
  </div>
  <h4><?php
            echo $row['post_title'];
            ?>

    <br>
<span style="font-size:14px;">
<?php echo $row['date']?></span>
</h4>
    </div>
  </a>
<?php
?>
<?php


} ?>
<div class="clearfix">

</div>
<?php

  }
  ?>
