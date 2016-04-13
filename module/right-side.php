<?php $sql1=mysqli_query($con,"SELECT * FROM quangcao WHERE loaianh='Quảng cáo Right' ORDER BY idanh DESC");
?>
<div class="qcright">
    <a href="#"><img width="300px" src="<?php $dong=mysqli_fetch_array($sql1); echo $dong['anhminhhoa'] ?>" /></a></li>
</div>
<!-------------------------------------------------------------------------------->
<div class="categories-1">

  <div class="cat1-Title"> <a style="color:#69F" href="#">Góc Sài Gòn</a> </div>
  
  <?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitincon=17 ORDER BY idbaiviet DESC LIMIT 4");
	$dong=mysqli_fetch_array($sql);
	$dong=mysqli_fetch_array($sql);
  ?> 
  
  <div class="cat1-Feature"> <a href="" ><img  src="<?php echo $dong["anhminhhoa"] ?>"></a>
    <h5> <a href=""> <?php echo $dong["tenbaiviet"] ?> </a> </h5>
  </div>
  
  <div class="cat1-list">
    <ul >
    <?php while($dong=mysqli_fetch_array($sql)){
	?>
      <li><a href="#"><?php echo $dong["tenbaiviet"] ?> </a></a> </li>
    <? } ?>
    </ul>
  
  </div>
  
</div>
<div class="clear"></div>
<!-------------------------------------------------------------------------------->
<div class="categories-1">

  <div class="cat1-Title"> <a href="#">Dân đặt hàng lãnh đạo TP.HCM</a> </div>
  
  <?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitin=44 ORDER BY idbaiviet DESC LIMIT 4");
	$dong=mysqli_fetch_array($sql);
  ?> 
  
  <div class="cat1-Feature"> <a href="" ><img src="<?php echo $dong["anhminhhoa"] ?>"></a>
    <h5> <a href=""> <?php echo $dong["tenbaiviet"] ?> </a> </h5>
  </div>
  
  <div class="cat1-list">
    <ul >
    <?php while($dong=mysqli_fetch_array($sql)){
	?>
      <li><a href="#"><?php echo $dong["tenbaiviet"] ?> </a></a> </li>
    <? } ?>
    </ul>
  
  </div>
  
</div>
<div class="clear"></div>
<!---------------------------silde Right----------------------------------------------------->
<div class="categories-slideshow">

    <div class="subTitle" >
     <ul >
      <li> <a href="#">Góc ảnh</a> </li>
      <li> <a href="#"> Audio</a> </li>
      <li> <a href="#">Video</a> </li>
     </ul>
    </div>
  
	<div id="slideshow">
    
        <div class="bigPics"> 
            	<?php $sql=mysqli_query($con,"SELECT * FROM baiviet ORDER BY idbaiviet DESC");
					while($dong=mysqli_fetch_array($sql)){
  				?>  
                <img src="<?php echo $dong["anhminhhoa"] ?>" /> 
                <?php }?>
        </div>
        
        <div class="slideTitle">
        	<ul>
            	<?php $sql=mysqli_query($con,"SELECT * FROM baiviet ORDER BY idbaiviet DESC");
					while($dong=mysqli_fetch_array($sql)){
  				?>
                <li> <a  href="#"> <?php echo $dong["tenbaiviet"] ?> </a></li>
                <?php }?>
        	</ul>
        </div>
    
    </div>
      
</div>
<div class="clear"> </div>
<!-------------------------------------------------------------------------------->
<div class="qcright">
    <ul style="list-style:none">
        <li><a href="#"><img width="300px" src="<?php $dong=mysqli_fetch_array($sql1); echo $dong['anhminhhoa'] ?>" /></a></li>
        <li><a href="#"><img width="300px" src="<?php $dong=mysqli_fetch_array($sql1); echo $dong['anhminhhoa'] ?>" /></a></li>
        <li><a href="#"><img width="300px" src="<?php $dong=mysqli_fetch_array($sql1); echo $dong['anhminhhoa'] ?>" /></a></li>
        <li><a href="#"><img width="300px" src="<?php $dong=mysqli_fetch_array($sql1); echo $dong['anhminhhoa'] ?>" /></a></li>
    </ul>
</div>
<!-------------------------------------------------------------------------------->
<div class="categories-1">
  <div class="cat1-Title"> <a  href="#">Khám phá</a> </div>
  
  <?php	$sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitincon=32 ORDER BY idbaiviet DESC LIMIT 4");
		$dong=mysqli_fetch_array($sql);
		$dong=mysqli_fetch_array($sql);
  ?>
  
  <div class="cat1-Feature"> <a href="" ><img  src="<?php echo $dong["anhminhhoa"] ?>" ></a>
    <h5> <a href=""> <?php echo $dong["tenbaiviet"] ?> </a> </h5>
  </div>
  
  <div class="cat1-list">
    <ul >
    <?php while($dong=mysqli_fetch_array($sql)){
	?>
      <li><a href="#"><?php echo $dong["tenbaiviet"] ?></a> </li>
    <?php }?>
    </ul>
  </div>
  
</div>
<div class="clear"></div>
<!-- Categories 1 -->
<div class="categories-1">

  <div class="cat1-Title"> <a href="#">Tin đồ họa</a> </div>
  
  <?php	$sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitincon=21 ORDER BY idbaiviet DESC LIMIT 4");
		$dong=mysqli_fetch_array($sql);
		$dong=mysqli_fetch_array($sql);
  ?>
  
  <div class="cat1-Feature"> <a href="" ><img src="<?php echo $dong["anhminhhoa"] ?>" </a>
    <h5> <a href=""> <?php echo $dong["tenbaiviet"] ?> </a> </h5>
  </div>
  
  <div class="cat1-list">
    <ul>
    <?php while($dong=mysqli_fetch_array($sql)){
	?>
      <li><a href="#"><?php echo $dong["tenbaiviet"] ?></a> </li>
    <?php }?>
    </ul>
  </div>
  
</div>
<div class="clear"></div>
<!-------------------------------------------------------------------------------->
<div class="categories-1">

  <div class="cat1-Title"> <a href="#">Giải trí 24h</a> </div>
  
  <?php $sql=mysqli_query($con,"SELECT * FROM video ORDER BY idvideo DESC LIMIT 3");
		$dong=mysqli_fetch_array($sql);
  ?>
  
  <div class="cat1-Feature"> <a href="" ><img  src="<?php echo $dong["anhminhhoa"] ?>"></a>
    <h5> <a href=""> <?php echo $dong["tenvideo"] ?> </a> </h5>
  </div>
  
  <div class="cat1-list">
    <ul >
      <?php while($dong=mysqli_fetch_array($sql)){
	  ?>
      <li><a href="#"><?php echo $dong["tenvideo"] ?></a> </li>
      <?php }?>
    </ul>
  </div>
  
</div>
<div class="clear"></div>
<!-- Categories 2 -->
<div class="categories-2">

  <div class="cat2-Title" >  <a href="#">Đọc nhiều</a> </div>
  
 <div class="cat2-Feature">
    <h5> <a href=""> <img src="uploads/2016040211373853.jpg" > TP.HCM tháo dỡ 7 thủy đài bỏ hoang </a> </h5>
  </div>
  
  <div class="cat2-list">
    <ul>
      <li><a href="">Bắt nhiều trộm cướp, thi đua phải xuất sắc chứ!</a></li>
      <li><a href=""> ​Điểm tin: Người dân hiến kế dẹp trộm cướp ở TP.HCM </a></li>
      <li><a  href=""> ​Bạc Liêu: kè Gành Hào bị sạt lở nghiêm trọng</a></li>
       <li><a href="">Bắt nhiều trộm cướp, thi đua phải xuất sắc chứ!</a></li>
      <li><a href=""> ​Điểm tin: Người dân hiến kế dẹp trộm cướp ở TP.HCM </a></li>
       <li><a href=""> ​Bạc Liêu: kè Gành Hào bị sạt lở nghiêm trọng</a></li>
     <li><a  href="">Bắt nhiều trộm cướp, thi đua phải xuất sắc chứ!</a></li>
    </ul>
  </div>
  
</div>
<div class="clear"> </div>
<!-------------------------------------------------------------------------------->
<div class="categories-2">
   <div class="cat2-Title"> <a href="#">Thế giới xe</a> </div>
  
  <?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitincon=50 ORDER BY idbaiviet DESC LIMIT 7");
		$dong=mysqli_fetch_array($sql);
		$dong=mysqli_fetch_array($sql);
  ?>
  
 <div class="cat2-Feature">
    <h5> <a href=""> <img src="<?php echo $dong["anhminhhoa"] ?>" > <?php echo $dong["tenbaiviet"] ?></a> </h5>
  </div>
  
  <div class="clear"></div>
  
  <div class="cat2-list">
    <ul >
    <?php while($dong=mysqli_fetch_array($sql)){
	?>
      <li><a href=""><?php echo $dong["tenbaiviet"] ?></a></li>
    <?php }?>
    </ul>
  </div>
  
</div>
<div class="clear"> </div>
<!-------------------------------------------------------------------------------->
<div class="categories-2">

  <div class="cat2-Title" > <a href="#">Tiêu điểm</a> </div>
  
  <?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitincon=16 ORDER BY idbaiviet DESC LIMIT 7");
		$dong=mysqli_fetch_array($sql);
		$dong=mysqli_fetch_array($sql);
  ?>
  
  <div class="cat2-Feature">
    <h5> <a href=""> <img  src="<?php echo $dong["anhminhhoa"] ?>" > <?php echo $dong["tenbaiviet"] ?></a> </h5>
  </div>
  
  <div class="clear"></div><p></p>
  
  <div class="cat2-list">
    <ul >
    <?php while($dong=mysqli_fetch_array($sql)){
	?>
      <li><a href=""><?php echo $dong["tenbaiviet"] ?></a></li>
    <?php }?>
    </ul>
  </div>

</div>
<div class="clear"> </div>
<div class="clear"> </div>
<!-------------------------------------------------------------------------------->
<div class="qcright">
    <ul style="list-style:none">
        <li><a href="#"><img width="300px" src="<?php $dong=mysqli_fetch_array($sql1); echo $dong['anhminhhoa'] ?>" /></a></li>
        <li><a href="#"><img width="300px" src="<?php $dong=mysqli_fetch_array($sql1); echo $dong['anhminhhoa'] ?>" /></a></li>
    </ul>
</div>