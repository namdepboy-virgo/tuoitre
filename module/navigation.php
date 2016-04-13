<?php
	//$sql=mysql_query("SELECT * FROM loaitin");
?>

<!--<ul>
  <li><a title="H" href="#">|O|</a> </li>
  <?php 
  //while($dong=mysql_fetch_array($sql))
  //{
  ?>
  	<li><a href="#"><?php echo $dong["tenloaitin"] ?></a> </li>
  <?php 
  //}
  ?>
</ul>-->


<?php
	$sql=mysqli_query($con,"SELECT * FROM loaitin");
?>

<ul>
  <li > <a href="#" > <img src="resource/home.png" width="15px" height="15px" ></a> </li>
  <?php 
  while($dong=mysqli_fetch_array($sql))
  {
  ?>
  	<li><a href="#"><?php echo $dong["tenloaitin"] ?></a> </li>
  <?php 
  }
  ?>
</ul>
