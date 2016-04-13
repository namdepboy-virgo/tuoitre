<?
	$sql="SELECT idanh, anhminhhoa, loaianh, tenanh FROM quangcao ORDER BY idanh DESC";
	$anh = mysql_query($sql);
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
        <td width="38" height="46"><strong>Tên quảng cáo</strong></td>
        <td width="91"><strong>Ảnh minh họa</strong></td>
        <td width="83">Loại ảnh</td>
        <td colspan="2"><strong>Quản lý</strong></td>
      </tr>
      <?php
	  	$i=1;
	  	while($dong = mysql_fetch_array($anh)){
			if($dong["idanh"]==$_GET["id"]){
	  ?>     
      <tr class="doimaunen">
      <? }else{ ?>
      <tr> 
      <? } ?>
      	<td><? echo $dong["idanh"] ?></td>
        <td><? echo $dong["tenanh"] ?></td>
        <td>
			<img src="../<? echo $dong["anhminhhoa"] ?>" width="60" />
        </td>
        <td><? echo $dong["loaianh"] ?></td>
        
		<td width="31">
        	<a href="index.php?quanly=quangcao&ac=sua&id=<? echo $dong["idanh"] ?>">
            	<img src="img/b_edit.png" />
            </a>
        </td>
                
        <td width="31">
            <a href="modules/quangcao/xuly.php?xoa=anh&id=<? echo $dong["idanh"] ?>">
                <img src="img/b_drop.png" />		
            </a>
         </td>    
      </tr>
      <? $i++;
		}
	  ?>
    </table>
    
</div>

