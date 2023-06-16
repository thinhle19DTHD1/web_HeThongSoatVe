<?php 
    $sql_lietke = "SELECT * FROM tbl_ve ORDER BY id_ve DESC";
    $query_lietke = mysqli_query($mysqli,$sql_lietke);
?>
<h3>Liệt kê vé</h3>
<table style= "width:100%" border="1" style="border-collapse:collapse">
  <tr>
    <th>Id</th>
    <th>Tên vé</th>
    <th>Hình ảnh</th>
    <th>Giá vé</th>
    <th>Số lượng</th>
    <th>Sự kiện</th>
    <th>Mã vé</th>
    <th>Địa điểm</th>
    <th>Tình trạng</th>
    <th>Quản lý</th>

  </tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke)){
    $i++
?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tenve'] ?></td>
    <td><img src="modules/add_tickets/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['giave'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['sukien'] ?></td>
    <td><?php echo $row['ma_ve'] ?></td>
    <td><?php echo $row['diadiem'] ?></td>
    <td><?php if($row['trangthai']==1){
        echo 'Còn vé';
      }else{
        echo 'Tạm hết';
      }
      ?>
    </td>

    <td> 
        <a href="modules/add_tickets/xuly.php?id_ve=<?php echo $row['id_ve'] ?>">Xóa</a>||<a href="modules/add_tickets/xuly.php?id_ve=<?php echo $row['id_ve'] ?>">Chỉnh sửa</a>
    </td>

  </tr> 

  <?php 
}   
  ?>
</table>