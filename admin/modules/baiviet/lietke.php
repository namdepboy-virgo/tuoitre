<?
	$sql="SELECT idbaiviet, tenbaiviet, anhminhhoa, tenloaitin, baiviet.trangthai, idloaitincon FROM baiviet, loaitin WHERE baiviet.idloaitin=loaitin.idloaitin ORDER BY idbaiviet DESC";
	$baiviet = mysql_query($sql);
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
        <td width="91"><strong>Tên bài viết</strong></td>
        <td width="83">Ảnh minh họa</td>
        <td width="83">Loại tin</td>
        <td width="83"><strong>Trạng thái</strong></td>
        <td width="83">Loại tin con</td>
        <td colspan="2"><strong>Quản lý</strong></td>
      </tr>
      <?
	  	$i=1;
	  	while($dong = mysql_fetch_array($baiviet)){
			if($dong["idbaiviet"]==$_GET["id"]){
	  ?>
              <tr class="doimaunen">
	  <? }else{ ?>
      		  <tr>
      <? } ?>
                <td><? echo $dong["idbaiviet"] ?></td>
                <td><? echo $dong["tenbaiviet"] ?></td>
                <td>
					<img src="../<? echo $dong["anhminhhoa"] ?>" width="60" />
                </td>
                <td><? echo $dong["tenloaitin"] ?></td>
                <td><? echo $dong["trangthai"] ?></td>
                <?php 
					$sql=mysql_query("SELECT * FROM loaitincon WHERE idloaitincon='$dong[idloaitincon]'");
					$arr=mysql_fetch_array($sql);					
				?>
                <td><? echo $arr["tenloaitincon"] ?></td>
                
                <td width="31">
                    <a href="index.php?quanly=baiviet&ac=sua&id=<? echo $dong["idbaiviet"] ?>">
                        <img src="img/b_edit.png" />
                    </a>
                </td>
                
                <td width="31">
                    <a href="modules/baiviet/xuly.php?xoa=baiviet&id=<? echo $dong["idbaiviet"] ?>">
                        <img src="img/b_drop.png" />		
                    </a>
                </td>
              </tr>
      
      <? $i++;
		}
	  ?>
    </table>
</div>

