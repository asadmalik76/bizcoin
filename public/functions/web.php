<?php
include '../db.php';

if(isset($_GET['offset']) && isset($_GET['limit'])){
  $a=0;
$offset=$_GET['offset'];
$limit=$_GET['limit'];
$query=mysqli_query($connect,"SELECT * FROM `portfolio` WHERE category='web' ORDER BY  pid DESC LIMIT {$limit} OFFSET {$offset} ; ");


while ($row=mysqli_fetch_array($query)) {
  // code...
  if ($a<=2) {
    // code...
  ?>
  <div class="col-md-4   wow fadeInUp">
<br>
    <div class="bimg" style=";margin-top:50px;background:url('img/portfolio/<?php echo $row['project_image'] ?> ')">
        <a href="project/<?php echo $row['pid'] ?>"  style="text-decoration:none">
    <div class="w-overlay">
      <button class="se-btn">Visit Project</button>
    </div>
  </a>
    <h4>Project Name : <?php echo $row['project_name'] ?></h4>
  </div>

    </div>
    <?php
    $a++;
  }else{
    ?>
<div class="clearfix">

</div>
  <?php
  $a=0;
}
    }
  }
  ?>
