<? 
	$sql = "SELECT * FROM loaitincon WHERE idloaitincon= '$_GET[id]'";
	$loaitin = mysql_query($sql);
	$dong = mysql_fetch_array($loaitin);
?>

<form action="modules/loaitincon/xuly.php?id=<? echo $dong["idloaitincon"] ?>" method="post">
    <div class="left">
        <table width="100%" height="165" border="0">
          <tr>
            <td colspan="3"><div align="left"><strong>CHỨC NĂNG SỬA LOẠI TIN</strong></div></td>
          </tr>
          <tr>
            <td width="86">Tên loại tin:</td>
            <td colspan="2"><input type="text" name="tenloaitin" id="tenloaitin" value="<? echo($dong["tenloaitincon"]) ?>"></td>
          </tr>
            <td>Trạng thái</td>
            <td colspan="2">
            
            <? 
                if($dong["trangthai"]=="Hiển thị"){
            ?>
                <select name="trangthai" id="trangthai" >
                    <option value="Hiển thị" selected="selected">Hiển thị</option>
                    <option value="Không hiển thị">Không hiển thị</option>
                </select>
            <? }else{ ?>
                <select name="trangthai" id="trangthai" >
                    <option value="Không hiển thị" selected="selected">Không hiển thị</option>
                    <option value="Hiển thị">Hiển thị</option>
                </select>
            <? } ?>             
            </td>
          </tr>
          <tr height="40px">
            <td>Loại tin cha:</td>
            <td colspan="2">
            <?
				$sql="SELECT *FROM loaitin";
				$loaitin=mysql_query($sql);
			?>
            	<select name="loaitincha">
                <?
					while($dong=mysql_fetch_array($loaitin)){
				?>
                	<option value="<? echo $dong["idloaitin"] ?>"><? echo $dong["tenloaitin"] ?></option>
                    <?
					}
					?>
                </select>
            </td>
          </tr>
          <tr>
            <td height="34"></td>
            <td width="72"><input type="submit" name="sua" id="sua" value="  Sửa  "></td>
            <td width="175"><input type="reset" name="reset" id="Reset" value="  Xoá  "></td>
          </tr>
        </table>
    </div>
</form>