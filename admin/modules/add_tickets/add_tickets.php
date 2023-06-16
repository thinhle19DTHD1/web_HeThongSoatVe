<h3>Thêm vé</h3>
<table border="1" width="100%" style="border-collapse:collapse">
<form method="POST" action="modules/add_tickets/xuly.php" enctype="multipart/form-data">
  <tr>
    <td>Tên vé:</td>
    <td><input type="text" name="tenve"></td>
  </tr>
  <tr>
    <td>Mã vé:</td>
    <td><input type="text" name="mave"></td>
  </tr>
  <tr>
    <td>Giá vé:</td>
    <td><input type="text" name="giave"></td>
  </tr>
  <tr>
    <td>Số lượng:</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
    <td>Hình ảnh:</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
    <td>Nội dung:</td>
    <td><textarea rows="10"  name="noidung" style="resize: none;"></textarea></td>
  </tr>

  </tr>
    <td>Địa điểm diễn ra:</td>
    <td><input type="text" name="diadiem"></td>
  </tr>
  <tr>
    <td>Mô tả địa điểm:</td>
    <td><textarea rows="10"  name="motadiadiem" style="resize: none;"></textarea></td>
  </tr>
  <tr>
  <tr>
    <td>Sự kiện:</td>
    <td><textarea rows="10"  name="sukien" style="resize: none;"></textarea></td>
  </tr>
  <tr>

  <tr>
    <td>Tình trạng</td>
    <td>
      <select name="trangthai">
        <option value="1">Còn vé</option>
        <option value="0">Tạm hết</option>
      </select> 
    </td>
  </tr>
  <tr>
    <td colspan="2"> <input type="submit" name="themve" value="Thêm vé"></td>
  </tr>
</form>
</table>