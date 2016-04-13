<?
	$sql="SELECT * FROM baiviet WHERE idbaiviet='$_GET[id]'";
	$baiviet=mysql_query($sql);
	$dong=mysql_fetch_array($baiviet);	
	
	include("modules/editor/editor1.php");
?>
<form action="modules/baiviet/xuly.php?id=<? echo $dong["idbaiviet"] ?>" method="post" enctype="multipart/form-data"> 
    <div class="left" style="padding-left:0%; width:49%">
        <table width="100%" border="0">
          <tr>
            <td colspan="3"><div align="left"><strong>CHỨC NĂNG SỬA BÀI VIẾT</strong></div></td>
          </tr>
          <tr height="40px">
            <td width="20%">Tên bài viết:</td>
            <td colspan="2"><input type="text" name="tenbaiviet" id="tenbaiviet" value="<? echo $dong["tenbaiviet"] ?>" size="58"></td>
          </tr>
          <tr height="40px">
            <td>Ảnh minh họa:</td>
            <td colspan="2">
            	<img src="../<? echo $dong["anhminhhoa"] ?>" width="90"/>
            	<input type="file" name="anhminhhoa" />                
            </td>
          </tr>
          <tr>
            <td>Tóm tắt:</td>
            <td colspan="2">
            	<textarea cols="45" rows="10" name="tomtat">
                	<? echo $dong["tomtat"] ?>
                </textarea>
            </td>
          </tr>
          <tr>
            <td>Nội dung:</td>
            <td colspan="2">
            	<textarea cols="45" rows="10" name="noidung">
                	<? echo $dong["noidung"] ?>
                </textarea>
			</td>
          </tr>
          
          <tr height="40px">
            <td>Loại tin:</td>
            <td colspan="2">
            <?
				$sql="SELECT *FROM loaitincon ";
				$loaitin=mysql_query($sql);
			?>
            	<select name="loaitin">
                <?
					while($dong=mysql_fetch_array($loaitin)){
				?>
                	<option value="<? echo $dong["idloaitincon"] ?>"><? echo $dong["tenloaitincon"] ?></option>
                    <?
					}
					?>
                </select>
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