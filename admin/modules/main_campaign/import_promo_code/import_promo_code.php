<h3><i>Import Promo Code History</i></h3>
<h3><i><a style="float:right; margin-right:20px" href="#">Import(xlsx)</a></i></h3>
<h3><i><a style="float:right; margin-right:50px" href="#">Download template</a></i></h3>
<?php 
    $sql_import_promocode = "SELECT * FROM tbl_promocode,tbl_admin WHERE tbl_promocode.id_admin=tbl_admin.id_admin ORDER BY id_promocode DESC";
    $query_lietke = mysqli_query($mysqli,$sql_import_promocode);
?>

<table style= "width:100%" border="1" style="border-collapse:collapse">
  <tr>
    <th>Author</th>
    <th>Imported Date</th>
    <th>File Name</th>
    <th>Action</th>
  </tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke)){
    $i++
?>
  <tr style="text-align:center">
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['imported_date'] ?></td>
    <td><?php echo $row['file_name'] ?></td>
    <td><a href="#">Download</a></td>
    
  </tr> 
  <?php 
}   
  ?>
</table>