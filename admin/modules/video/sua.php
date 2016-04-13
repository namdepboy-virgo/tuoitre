<?
	$sql="SELECT * FROM video WHERE idvideo='$_GET[id]'";
	$video=mysql_query($sql);
	$dong=mysql_fetch_array($video);	
	
	include("modules/editor/editor1.php");
?>
<form action="modules/video/xuly.php?id=<? echo $dong["idvideo"] ?>" method="post" enctype="multipart/form-data"> 
    <div class="left" style="padding-left:0%; width:49%">
        <table width="100%" border="0">
        
          <tr>
            <td colspan="3"><div align="left"><strong>CHỨC NĂNG SỬA VIDEO</strong></div></td>
          </tr>
          
          <tr height="40px">
            <td width="20%">Tên video:</td>
            <td colspan="2"><input type="text" name="tenvideo" id="tenvideo" value="<? echo $dong["tenvideo"] ?>" size="58"></td>
          </tr>
          
          <tr>
            <td>Nội dung:</td>
            <td colspan="2">
            	<textarea cols="45" rows="10" name="noidung"><? echo $dong["noidung"] ?></textarea></td>
          </tr>
          
          <tr height="40px">
            <td width="20%">Đường dẫn:</td>
            <td colspan="2"><input type="text" name="duongdan" id="duongdan" value="<? echo $dong["duongdan"] ?>" size="58"></td>
          </tr>
          
          <tr height="40px">
            <td>Ảnh minh họa:</td>
            <td colspan="2">
            	<img src="../<? echo $dong["anhminhhoa"] ?>" width="90"/>
            	<input type="file" name="anhminhhoa" />                
            </td>
          </tr>
          
          <tr height="40px">
            <td>Trạng thái:</td>
            <td colspan="2">
            	<?
				if($dong["trangthai"]=="Hiển thị"){
				?>
                    <select name="trangthai">
                        <option value="Hiển thị" selected="selected">Hiển thị</option>
                        <option value="Không hiển thị">Không hiển thị</option>
                    </select>
                <?
				}else{
				?>
                    <select name="trangthai">
                        <option value="Hiển thị">Hiển thị</option>
                        <option value="Không hiển thị" selected="selected">Không hiển thị</option>
                    </select>
				<?
				}
				?>
			</td>
          </tr>
          
          <tr height="40px">
            <td height="34"></td>
            <td width="65"><input type="submit" name="sua" id="sua" value="  Cập nhật  "></td>
            <td width="441"><input type="reset" name="reset" id="Reset" value="  Xoá  "></td>
          </tr>
          
        </table>
    </div>
</form>