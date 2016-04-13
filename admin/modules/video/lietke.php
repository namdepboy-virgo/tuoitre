<?
	$sql="SELECT idvideo, tenvideo, anhminhhoa, trangthai, duongdan, noidung FROM video ORDER BY idvideo DESC";
	$video = mysql_query($sql);
?>
<style type="text/css">
.right #customers {
	font-weight: bold;
}
</style>

<div class="right">

  <table width="100%" border="1" id="customers">
      <tr>
        <td width="38" height="46"><strong>ID</strong></td>
        <td width="91"><strong>Tên video</strong></td>
        <td width="83">Ảnh minh họa</td>
        <td width="83"><strong>Trạng thái</strong></td>
        <td width="83">Nội dung</td>
        <td colspan="2"><strong>Quản lý</strong></td>
      </tr>
      <?php
	  	$i=1;
	  	while($dong = mysql_fetch_array($video)){
			if($dong["idvideo"]==$_GET["id"]){
	  ?>     
      <tr class="doimaunen">
      <? }else{ ?>
      <tr> 
      <? } ?>
      	<td><? echo $dong["idvideo"] ?></td>
        <td><? echo $dong["tenvideo"] ?></td>
        <td>
			<img src="../<? echo $dong["anhminhhoa"] ?>" width="60" />
        </td>
        <td><? echo $dong["trangthai"] ?></td>
        <td><? echo $dong["noidung"] ?></td>
        
		<td width="31">
        	<a href="index.php?quanly=video&ac=sua&id=<? echo $dong["idvideo"] ?>">
            	<img src="img/b_edit.png" />
            </a>
        </td>
                
        <td width="31">
            <a href="modules/video/xuly.php?xoa=video&id=<? echo $dong["idvideo"] ?>">
                <img src="img/b_drop.png" />		
            </a>
         </td>    
      </tr>
      <? $i++;
		}
	  ?>
    </table>
    
</div>

