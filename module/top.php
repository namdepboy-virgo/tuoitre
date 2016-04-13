<div id="bar1">
  <div class="left" >
    <ul>
      <li> <a href="#">TUỔI TRẺ CUỐI TUẦN </a> </li>
      <li> <a href="#">TRUYỀN HÌNH TUỔI TRẺ</a> </li>
      <li> <a href="#">TUOITRENEWS</a> </li>
    </ul>
  </div>
  <div class="right">
    <ul>
      <li style="border-right: 1px solid #ADADAD;"> <a href="tel:0918033133" title="0918.033.133" style="font-size:12px; color:#D03232;">0918.033.133</a>
      <li> <a href="#">ĐẶT LÀM TRANG CHỦ</a> </li>
      <li> <a href="#"> ĐẶT BÁO TUỔI TRẺ</a> </li>
      <li><a href="#">FB G+ YT</a></li>
    </ul>
  </div>
</div>
<div class="clear"> </div>
<div id="bar2">
  <div class="logo">
    <p style="color: #5E5E5E; font-size: 12px;">Thứ 2, Ngày 25.01.2016 </p>
    <a href="http://www.tuoitre.vn"><img src="img/logo.png"/></a> </div>
</div>



<div style="width:725px; height:90px; float:right; margin-top:20px">
  <?php $sql=mysqli_query($con,"SELECT * FROM quangcao WHERE loaianh='Banner' ORDER BY idanh DESC");
  ?>
  <img style="width:725px; height:90px" src="<?php $dong=mysqli_fetch_array($sql); echo $dong['anhminhhoa'] ?>" /> 
</div>

<div class="clear"> </div>