<form action="modules/loaitincon/xuly.php" method="post"> 
    <div class="left">
        <table width="100%" height="165" border="0">
          <tr>
            <td colspan="3"><div align="left"><strong>CHỨC NĂNG THÊM MỚI LOẠI TIN</strong></div></td>
          </tr>
          <tr>
            <td width="86">Tên loại tin con:</td>
            <td colspan="2"><input type="text" name="tenloaitin" id="tenloaitin"></td>
          </tr>
          <tr>
            <td>Trạng thái</td>
            <td colspan="2">
              <select name="trangthai" id="trangthai">
                    <option value="Hiển thị" selected="selected">Hiển thị</option>
                    <option value="Không hiển thị">Không hiển thị</option>
                </select></td>
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
            <td width="72"><input type="submit" name="them" id="them" value="  Thêm  "></td>
            <td width="175"><input type="reset" name="reset" id="Reset" value="  Xoá  "></td>
          </tr>
        </table>
    </div>
</form>