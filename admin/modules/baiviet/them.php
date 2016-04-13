<?
	include("modules/editor/editor1.php");
?>
<form action="modules/baiviet/xuly.php" method="post" enctype="multipart/form-data"> 
    <div class="left" style="padding-left:0%; width:49%">
        <table width="100%" border="0">
          <tr>
            <td colspan="3"><div align="left"><strong>CHỨC NĂNG THÊM MỚI BÀI VIẾT</strong></div></td>
          </tr>
          <tr height="40px">
            <td width="20%">Tên bài viết:</td>
            <td colspan="2"><input type="text" name="tenbaiviet" id="tenbaiviet" size="58"></td>
          </tr>
          <tr height="40px">
            <td>Ảnh minh họa:</td>
            <td colspan="2">
            	<input type="file" name="anhminhhoa" />
            </td>
          </tr>
          <tr>
            <td>Tóm tắt:</td>
            <td colspan="2">
            	<textarea cols="45" rows="10" name="tomtat"></textarea>
            </td>
          </tr>
          <tr>
            <td>Nội dung:</td>
            <td colspan="2">
            	<textarea cols="45" rows="10" name="noidung"></textarea></td>
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
            	<select name="trangthai">
                	<option value="Hiển thị" selected="selected">Hiển thị</option>
                    <option value="Không hiển thị">Không hiển thị</option>
                </select>
			</td>
          </tr>
          <tr height="40px">
            <td height="34"></td>
            <td width="65"><input type="submit" name="them" id="them" value="  Thêm  "></td>
            <td width="441"><input type="reset" name="reset" id="Reset" value="  Xoá  "></td>
          </tr>
        </table>
    </div>
</form>