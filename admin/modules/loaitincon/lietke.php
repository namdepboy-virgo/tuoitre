<?
	$sql="SELECT idloaitincon, tenloaitincon, loaitincon.trangthai, loaitin.tenloaitin FROM loaitincon,loaitin WHERE loaitincon.idloaitincha=loaitin.idloaitin ORDER BY idloaitincon DESC";
	$loaitin = mysql_query($sql);
?>

<div class="right">
  <table width="100%" border="1" id="customers">
      <tr>
        <td width="38" height="46"><strong>ID</strong></td>
        <td width="91"><strong>Tên loại tin con</strong></td>
        <td width="83"><strong>Trạng thái</strong></td>
        <td width="59"><strong>Loại tin cha</strong></td>
        <td colspan="2"><strong>Quản lý</strong></td>
      </tr>
      <?
	  	$i=1;
	  	while($dong = mysql_fetch_array($loaitin)){
			if($dong["idloaitincon"]==$_GET["id"]){
	  ?>
              <tr class="doimaunen">
      <? }else{ ?>
      		  <tr>
      <? } ?>
                <td><? echo $dong["idloaitincon"] ?></td>
                <td><? echo $dong["tenloaitincon"] ?></td>
                <td><? echo $dong["trangthai"] ?></td>
                <td><? echo $dong["tenloaitin"] ?></td>
                <td width="31">
                    <a href="index.php?quanly=loaitincon&ac=sua&id=<? echo $dong["idloaitincon"] ?>">
                        <img src="img/b_edit.png" />
                    </a>
                </td>
                
                <td width="31">
                    <a href="modules/loaitincon/xuly.php?xoa=loaitincon&id=<? echo $dong["idloaitincon"] ?>">
                        <img src="img/b_drop.png" />		
                    </a>
                </td>
              </tr>
     
      <? $i++;
		}
	  ?>
    </table>
</div>

