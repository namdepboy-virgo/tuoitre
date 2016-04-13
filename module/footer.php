<div class="bar1">
  <div class="list-title">
    <ul>
      <li><a href="#">Tuổi Trẻ News </a></li>
      <li><a href="#">Tuổi Trẻ Cuối Tuần </a></li>
      <li><a href="#">Tuổi trẻ TV</a></li>
      <li><a href="#">Tủ Sách Tuổi Trẻ</a></li>
    </ul>
  </div>
  <div class="logoApp" >
    <ul>
      <li><a href="#"><img src="img/btn-googleplay.jpg" width="100%"  alt=""/></a></li>
      <li><a href="#"> <img src="img/btn-ios.jpg"  alt=""/> </a></li>
    </ul>
    <span class="toasan"><a href="#">Gửi bài về Tòa sạn</a> </span> </div>
  <div class="clear"> </div>
</div>
<div class="bar2">
  <div style="width:17%; float:left; margin-left:10px; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Chính trị - Xã hội</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='44'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:16%; float:left; line-height: 22px;">
    <ul>
      <li><a href="#" title="Thế giới"><strong>Thế giới</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='45'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:19%; float:left; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Giáo dục</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='49'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:16%; float:left; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Nhịp sống trẻ</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='52'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:17%; float:left; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Du lịch</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='55'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:12%; float:left; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Media</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='56'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:17%; clear:both; float:left; margin-top:20px; margin-left:10px; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Nhịp sống số</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='53'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:16%; float:left; margin-top:20px; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Kinh tế</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='47'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:19%; float:left; margin-top:20px; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Thể thao</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='50'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:16%; float:left; margin-top:20px; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Sống khoẻ</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='48'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:17%; float:left; margin-top:20px; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Văn hoá - Giải trí</strong></a> </li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='51'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
    </ul>
  </div>
  <div style="width:12%; float:left; margin-top:20px; line-height: 22px;">
    <ul>
      <li><a href="#"><strong>Pháp luật</strong></a></li>
      <?php 
	  $sql=mysqli_query($con,"SELECT * FROM loaitincon WHERE idloaitincha='46'");
      while($dong=mysqli_fetch_array($sql))
      {
      ?>
      <li><a href="#"><?php echo $dong["tenloaitincon"] ?></a> </li>
      <?php 
      }
      ?>
      <li><a href="#"><br><strong>Bạn đọc</strong></a></li>
      <li><a href="#"><strong>Cơ hội mua sắm</strong> </a></li>
      <li><a href="#"><strong>Cần biết</strong> </a></li>
    </ul>
  </div>
  <div class="clear"> </div>
</div>
<div class="clear"> </div>
<!-------------------------------------------------------------------------------->
<div>
  <div style="width:15%; height:60px; float:left"> <img src="img/logo-footer.png"/> </div>
  <p style="width:40%; float:left; font-size:13px; margin-left:15px">©<b> Copyright 2016 TUOITRE.VN</b>, All rights reserved <br>
    ® Tuổi Trẻ Online giữ bản quyền nội dung trên website này.</p>
  <p style="width:40%; float:right; font-size: 13px; text-align: right;">Thông tin Toà soạn - Thông tin Thành Đoàn - Liên hệ Quảng cáo <br>
    Điện thoại liên hệ:<b> 0918.033.133</p>
</div>
<div class="clear"></div>
