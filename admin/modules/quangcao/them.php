<form action="modules/quangcao/xuly.php" method="post" enctype="multipart/form-data"> 
    <div class="left" style="padding-left:0%; width:49%">
        <table width="100%" border="0">
        
          <tr>
            <td colspan="3"><div align="left"><strong>CHỨC NĂNG THÊM MỚI ẢNH</strong></div></td>
          </tr>

		  <tr height="40px">
            <td width="20%">Tên ảnh:</td>
            <td colspan="2"><input type="text" name="tenanh" id="tenanh" size="58"></td>
          </tr>

          <tr height="40px">
            <td width="20%">Đường dẫn:</td>
            <td colspan="2"><input type="text" name="duongdan" id="duongdan" size="58"></td>
          </tr>
          
          <tr height="40px">
            <td>Ảnh minh họa:</td>
            <td colspan="2">
            	<input type="file" name="anhminhhoa" />
            </td>
          </tr>
          
          <tr>
            <td>Loại ảnh</td>
            <td colspan="2">
              <select name="loaianh" id="loaianh">
                    <option value="Banner" selected="selected">Banner</option>
                    <option value="Quảng cáo Content">Quảng cáo Content</option>
                    <option value="Quảng cáo Right">Quảng cáo Right</option>
                    <option value="Quảng cáo Square">Quảng cáo Square</option>
                </select></td>
          </tr>
          
          <tr height="40px">
            <td height="34"></td>
            <td width="65"><input type="submit" name="them" id="them" value="  Thêm  "></td>
            <td width="441"><input type="reset" name="reset" id="Reset" value="  Xoá  "></td>
          </tr>
          
        </table>
    </div>
</form>