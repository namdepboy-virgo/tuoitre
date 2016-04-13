<!-----------------New--------------------->

<div class="section-new">

  <div class="new-left">
  	<?php
		$sql=mysqli_query($con,"SELECT * FROM baiviet ORDER BY idbaiviet DESC LIMIT 20");
		$dong=mysqli_fetch_array($sql);
	?>
    
    <div class="main-content"> <a href="">     
      <img width="490px" height="275px" src="<?php echo $dong["anhminhhoa"] ?>"></a>
      <h3> <a href=""><?php echo $dong["tenbaiviet"] ?> </a> </h3>
      <a href=""><?php echo $dong["tomtat"] ?>
    </div>
    
    <div class="sub-content">
      <ul>
      	<?php
			$i=0;
			while($i<6){
				$dong=mysqli_fetch_array($sql);
		?>
        <li style="margin-left: 0; margin-right:10px"> <a href=""> 
          <img style="width:150px; height:85px" src="<?php echo $dong["anhminhhoa"] ?>">
          <h4> <?php echo $dong["tenbaiviet"] ?> </h4></a> 
        </li>
        <? $i++;
			}
		?>
        
      </ul>
    </div>
    
  </div>
  <div class="new-right">
    <div class="right-1-scroll">
        
      <div class="scroll-feature"> 
      	<a href=""> <img src="<?php $dong=mysqli_fetch_array($sql); echo $dong["anhminhhoa"] ?>">
          <h4><?php echo $dong["tenbaiviet"] ?></h4>
        </a>
        <p></p>
      </div>
     
      
     <div class="scroll-list" style="overflow: hidden; width: auto; height: 310px;">
        <ul>
          <?php while($dong=mysqli_fetch_array($sql)){
		  ?>
            <li><a href="#"><?php echo $dong['tenbaiviet'] ?></a></li>
          <?php } ?>
        </ul>
     </div>
      
    </div>
    
    <div class="right-2-noscroll">
    
      <div class="noscroll-title"> <a href=""> Thời sự &amp; Suy nghĩ </a> </div>
      <?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitincon='12' ORDER BY idbaiviet DESC LIMIT 3");
	  ?>
      <div class="scroll-feature"> <a href=""> <img src="<?php $dong=mysqli_fetch_array($sql); echo $dong["anhminhhoa"] ?>">
        <h4><?php echo $dong["tenbaiviet"] ?></h4></a>
      </div>
      
      <div class="noscroll-list">
        <ul>
          <li><a href="#"><?php $dong=mysqli_fetch_array($sql); echo $dong["tenbaiviet"] ?> </a> </li>
          <li><a href="#"><?php $dong=mysqli_fetch_array($sql); echo $dong["tenbaiviet"] ?></a> </li>
        </ul>
      </div>
      
    </div>
    
  </div>
  <div class="clear"></div>
</div>
<!-----------------Chinh Tri--------------------->
<div class="section">

  <div class="section-title">
    <ul>
      <li> <a href=""> Chính trị - Xã hội </a> &gt; </li>
      <?php $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='44'");
      	while($dong=mysqli_fetch_array($sql)){
      ?>
        <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php }?>
    </ul>
  </div>
  
  <div class="section-content">
  
  	<?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitin='44' ORDER BY idbaiviet DESC LIMIT 6");
	?>
        
    <div class="content-left">
      <h5> <a href=""> <?php $dong=mysqli_fetch_array($sql); echo $dong["tenbaiviet"] ?> </a> </h5>
      <p> <a href=""><img width="145px" height="80px" src="<?php echo $dong["anhminhhoa"] ?>" align="left"></a><?php echo $dong["tomtat"] ?></p>
    </div>
    
    <div class="content-right">
    
      <div class="right-feature">
        <h5> <a href=""> <img src="<?php $dong=mysqli_fetch_array($sql); echo $dong["anhminhhoa"] ?>" align="left"> <?php echo $dong["tenbaiviet"] ?></a> </h5>
      </div>
      
      <div class="right-list">
        <ul>
          <p></p>
          <?php while($dong=mysqli_fetch_array($sql)){
	  	  ?>
          	<li><a href=""><?php echo $dong["tenbaiviet"] ?> </a> </li>
          <?php } ?>
        </ul>
      </div>
      
    </div>
    
  </div>
  
</div>
<div class="clear"> </div>
<!-----------------The gioi--------------------->

<div class="section">

  <div class="section-title">
    <ul>
      <li> <a href=""> Thế giới </a> &gt; </li>
      <?php $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='45'");
      	while($dong=mysqli_fetch_array($sql)){
      ?>
        <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php }?>
    </ul>
  </div>
  
  <div class="section-content">
  
  	<?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitin='45' ORDER BY idbaiviet DESC LIMIT 6");
	?>
        
    <div class="content-left">
      <h5> <a href=""> <?php $dong=mysqli_fetch_array($sql); echo $dong["tenbaiviet"] ?> </a> </h5>
      <p> <a href=""><img width="145px" height="80px" src="<?php echo $dong["anhminhhoa"] ?>" align="left"></a><?php echo $dong["tomtat"] ?></p>
    </div>
    
    <div class="content-right">
    
      <div class="right-feature">
        <h5> <a href=""> <img src="<?php $dong=mysqli_fetch_array($sql); echo $dong["anhminhhoa"] ?>" align="left"> <?php echo $dong["tenbaiviet"] ?></a> </h5>
      </div>
      
      <div class="right-list">
        <ul>
          <p></p>
          <?php while($dong=mysqli_fetch_array($sql)){
	  	  ?>
          	<li><a href=""><?php echo $dong["tenbaiviet"] ?> </a> </li>
          <?php } ?>
        </ul>
      </div>
      
    </div>
    
  </div>
</div>
<div class="clear"> </div>
<!-----------------Phap Luat--------------------->
<div class="section">

  <div class="section-title">
    <ul>
      <li> <a href=""> Pháp luật </a> &gt; </li>
      <?php $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='46'");
      	while($dong=mysqli_fetch_array($sql)){
      ?>
        <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php }?>
    </ul>
  </div>
  
  <div class="section-content">
  
  	<?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitin='46' ORDER BY idbaiviet DESC LIMIT 6");
	?>
        
    <div class="content-left">
      <h5> <a href=""> <?php $dong=mysqli_fetch_array($sql); echo $dong["tenbaiviet"] ?> </a> </h5>
      <p> <a href=""><img width="145px" height="80px" src="<?php echo $dong["anhminhhoa"] ?>" align="left"></a><?php echo $dong["tomtat"] ?></p>
    </div>
    
    <div class="content-right">
    
      <div class="right-feature">
        <h5> <a href=""> <img src="<?php $dong=mysqli_fetch_array($sql); echo $dong["anhminhhoa"] ?>" align="left"> <?php echo $dong["tenbaiviet"] ?></a> </h5>
      </div>
      
      <div class="right-list">
        <ul>
          <p></p>
          <?php while($dong=mysqli_fetch_array($sql)){
	  	  ?>
          	<li><a href=""><?php echo $dong["tenbaiviet"] ?> </a> </li>
          <?php } ?>
        </ul>
      </div>
      
    </div>
    
  </div>
</div>
<div class="clear"> </div>
<!-----------------TVO--------------------->
<div class="sectionTVO">

  <div class="TVO-title"> <a href=""> TVO </a> <a href=""> Xem thêm </a> </div>
  
 	<?php $sql=mysqli_query($con,"SELECT * FROM video LIMIT 7");
		$dong=mysqli_fetch_array($sql);
	?>
 
  <div class="TVO-content">
    <div class="TVO-left" style="height:300px">
      <div class="TVOleft-video">
        <iframe style="width:100%; height:230px" frameborder="0" allowfullscreen="1" title="YouTube video player" src="<?php echo $dong["duongdan"] ?>"> </iframe>
      </div>
      <h4> <a href=""> <?php echo $dong["tenvideo"] ?> </a> </h4>
      <p><?php echo $dong["noidung"] ?></p>
    </div>
    
    <div class="TVO-right" style="overflow: hidden; width: auto; height: 310px;">
      <ul>
        <?php while($dong=mysqli_fetch_array($sql)){
		?>
          <li> 
          	<a href=""><img src="<?php echo $dong["anhminhhoa"] ?>">
            <h4> <?php echo $dong["tenvideo"] ?></h4></a> 
          </li>
        <?php }?>
       </ul>
    </div>
      
	<div class="clear"> </div>
  </div>    
</div>
<!-----------------Kinh Te--------------------->
<div class="section">

  <div class="section-title">
    <ul>
      <li> <a href=""> Kinh tế </a> &gt; </li>
      <?php $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='47'");
      while($dong=mysqli_fetch_array($sql)){
      ?>
        <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php }?>
    </ul>
  </div>

  <div class="section-content">
  
  	<?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitin='47' ORDER BY idbaiviet DESC LIMIT 6");
	?>
        
    <div class="content-left">
      <h5> <a href=""> <?php $dong=mysqli_fetch_array($sql); echo $dong["tenbaiviet"] ?> </a> </h5>
      <p> <a href=""><img width="145px" height="80px" src="<?php echo $dong["anhminhhoa"] ?>" align="left"></a><?php echo $dong["tomtat"] ?></p>
    </div>
    
    <div class="content-right">
    
      <div class="right-feature">
        <h5> <a href=""> <img src="<?php $dong=mysqli_fetch_array($sql); echo $dong["anhminhhoa"] ?>" align="left"> <?php echo $dong["tenbaiviet"] ?></a> </h5>
      </div>
      
      <div class="right-list">
        <ul>
          <p></p>
          <?php while($dong=mysqli_fetch_array($sql)){
	  	  ?>
          	<li><a href=""><?php echo $dong["tenbaiviet"] ?> </a> </li>
          <?php } ?>
        </ul>
      </div>
      
    </div>
    
  </div>
</div>
<div class="clear"> </div>
<!-----------------Giao Duc--------------------->
<div class="section">

  <div class="section-title">
    <ul>
      <li> <a href=""> Giáo dục </a> &gt; </li>
      <?php $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='49'");
      	while($dong=mysqli_fetch_array($sql)){
      ?>
        <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php }?>
    </ul>
  </div>
  
  <div class="section-content">
  
  	<?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitin='49' ORDER BY idbaiviet DESC LIMIT 6");
	?>
        
    <div class="content-left">
      <h5> <a href=""> <?php $dong=mysqli_fetch_array($sql); echo $dong["tenbaiviet"] ?> </a> </h5>
      <p> <a href=""><img width="145px" height="80px" src="<?php echo $dong["anhminhhoa"] ?>" align="left"></a><?php echo $dong["tomtat"] ?></p>
    </div>
    
    <div class="content-right">
    
      <div class="right-feature">
        <h5> <a href=""> <img src="<?php $dong=mysqli_fetch_array($sql); echo $dong["anhminhhoa"] ?>" align="left"> <?php echo $dong["tenbaiviet"] ?></a> </h5>
      </div>
      
      <div class="right-list">
        <ul>
          <p></p>
          <?php while($dong=mysqli_fetch_array($sql)){
	  	  ?>
          	<li><a href=""><?php echo $dong["tenbaiviet"] ?> </a> </li>
          <?php } ?>
        </ul>
      </div>
      
    </div>
    
  </div>
</div>
<div class="clear"> </div>
<!-----------------The Thao--------------------->
<div class="section">

  <div class="section-title">
    <ul>
      <li> <a href=""> Thể thao </a> &gt; </li>
      <?php $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='50'");
      	while($dong=mysqli_fetch_array($sql)){ 
	  ?>
        <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php } ?>
    </ul>
  </div>
  
  <div class="TheThao-content">
  
  <?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitin=50 ORDER BY idbaiviet DESC LIMIT 6"); 
	  $dong=mysqli_fetch_array($sql)
  ?>
    
    <div class="TheThao-left" style="height:300px"> <img src="<?php echo $dong["anhminhhoa"] ?>" width="385px" height="321px">
      <h4> <a href=""> <?php echo $dong["tenbaiviet"] ?> </a> </h4>
      <p> <? echo $dong["tomtat"] ?> </p>
    </div>
    
    <div class="TheThao-right">
      <ul>
      <?php while($dong=mysqli_fetch_array($sql)){
	  ?>
        <li> <a href=""><img src="<? echo $dong["anhminhhoa"] ?>"><h4> <? echo $dong["tenbaiviet"] ?> </h4></a> </li>
       <? } ?>
      </ul>
    </div>
    
  </div>
</div>
<div class="clear"> </div>

<!-----------------Văn Hóa - Giải Trí --------------------->

<div class="section" style="margin-top: 150px">

  <div class="section-title">
    <ul>
      <li> <a href=""> Văn Hóa - Giải Trí </a> &gt; </li>
      <?php $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='50'");
      	while($dong=mysqli_fetch_array($sql)){ 
	  ?>
        <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php } ?>
    </ul>
  </div>
  
  <div class="VanHoa-content">
  

    
    <div class="VanHoa-left" style="height:300px"> <img src="resource/1-cay-da-di-san-1460543116.jpg">
      <h4> <a href=""> Huế có cây di sản thứ ba </a> </h4>
      <p>TTO - Với việc được công nhận là cây di sản Việt Nam, Cây đa Đá Bạc (thị trấn Phú Lộc, huyện Phú Lộc) trở thành cây di sản thứ ba ở tỉnh Thừa Thiên Huế. </p>
    </div>
    
    <div class="VanHoa-right">
   
      <ul>
     
        <li> <a href=""><img src="resource/5-jpg-1460515670.jpg" ><h4>	Khán giả nhào lên sân khấu nhảy cùng vũ công S-Tour	  </h4></a> </li>
         <li> <a href=""><img src="resource/5-jpg-1460515670.jpg"><h4> Bắc nhịp trái tim kỳ 378: 1001 lý do để chia tay	 </h4></a> </li>
       
      
          <li> <a href=""><img src=""><h4>  </h4></a> </li>
           <li> <a href=""><img src=""><h4>  </h4></a> </li>
      
      </ul>
    </div>
    
  </div>
</div>
<div class="clear"> </div>
<!-----------------Nhip Song Tre--------------------->
<div class="section" style="margin-top: 150px">

  <div class="section-title">
    <ul>
      <li> <a href=""> Nhịp sống trẻ </a> &gt; </li>
      <?php $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='47'");
      while($dong=mysqli_fetch_array($sql)){
      ?>
        <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php }?>
    </ul>
  </div>

  <div class="section-content">
  
  	<?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitin='47' ORDER BY idbaiviet DESC LIMIT 6");
	?>
        
    <div class="content-left">
      <h5> <a href=""> <?php $dong=mysqli_fetch_array($sql); echo $dong["tenbaiviet"] ?> </a> </h5>
      <p> <a href=""><img width="145px" height="80px" src="<?php echo $dong["anhminhhoa"] ?>" align="left"></a><?php echo $dong["tomtat"] ?></p>
    </div>
    
    <div class="content-right">
    
      <div class="right-feature">
        <h5> <a href=""> <img src="<?php $dong=mysqli_fetch_array($sql); echo $dong["anhminhhoa"] ?>" align="left"> <?php echo $dong["tenbaiviet"] ?></a> </h5>
      </div>
      
      <div class="right-list">
        <ul>
          <p></p>
          <?php while($dong=mysqli_fetch_array($sql)){
	  	  ?>
          	<li><a href=""><?php echo $dong["tenbaiviet"] ?> </a> </li>
          <?php } ?>
        </ul>
      </div>
      
    </div>
    
  </div>
</div>

<!-----------------Song Khoe --------------------->
<div class="section" >

  <div class="section-title">
    <ul>
      <li> <a href=""> Sống khỏe </a> &gt; </li>
      <?php $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='47'");
      while($dong=mysqli_fetch_array($sql)){
      ?>
        <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php }?>
    </ul>
  </div>

  <div class="section-content">
  
  	<?php $sql=mysqli_query($con,"SELECT * FROM baiviet WHERE idloaitin='47' ORDER BY idbaiviet DESC LIMIT 6");
	?>
        
    <div class="content-left">
      <h5> <a href=""> <?php $dong=mysqli_fetch_array($sql); echo $dong["tenbaiviet"] ?> </a> </h5>
      <p> <a href=""><img width="145px" height="80px" src="<?php echo $dong["anhminhhoa"] ?>" align="left"></a><?php echo $dong["tomtat"] ?></p>
    </div>
    
    <div class="content-right">
    
      <div class="right-feature">
        <h5> <a href=""> <img src="<?php $dong=mysqli_fetch_array($sql); echo $dong["anhminhhoa"] ?>" align="left"> <?php echo $dong["tenbaiviet"] ?></a> </h5>
      </div>
      
      <div class="right-list">
        <ul>
          <p></p>
          <?php while($dong=mysqli_fetch_array($sql)){
	  	  ?>
          	<li><a href=""><?php echo $dong["tenbaiviet"] ?> </a> </li>
          <?php } ?>
        </ul>
      </div>
      
    </div>
    
  </div>
</div>