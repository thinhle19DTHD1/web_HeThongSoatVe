<form>     
  <div class="search_menu">  
        <div class="search_filter">
            <select name="match_all_filter">
                <option>Match all filter</option>
            </select> 

            <select name="search_criteria">
                <option>Search criteria</option>
            </select>

            <select name="condition">
                <option>Condition</option>
            </select>

            <select name="value">
                <option>Value</option>
            </select> 

            <a style="margin-left:200px;text-decoration: none;" href="">+ Add</a><input style="margin-left: 50px;" type="button" value="Search">
        </div>
    </div>
</form>

<?php 
    $sql_list_promocode = "SELECT * FROM tbl_promo_code_li ORDER BY id_promocode DESC";
    $query_lietke = mysqli_query($mysqli,$sql_list_promocode);
?>
<p>Liệt kê sản phẩm</p>
<table style= "width:100%" border="1" style="border-collapse:collapse">
  <tr>
    <th>Promo Code </th>
    <th>Active</th>
    <th>Start Date</th>
    <th>Expired Date</th>
    <th>Redemption</th>
    <th>Owner</th>
    <th>Latest Update</th>
    <th>Action</th>

  </tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke)){
    $i++
?>
  <tr style="text-align:center">
    <td><?php echo $row['promo_code'] ?></td>
    <td><?php if($row['promocode_status']==1){
        echo '<p style="color:green">Vvvvvvvvvvvvv</p>';
      }else{
        echo '';
      }
      ?>
    </td>
    <td><?php echo $row['start_date'] ?></td>
    <td><?php echo $row['expired_date'] ?></td>
    <td><?php if($row['redemption']==1){
        echo '<a style="color:green">Success</a>';
      }else{
        echo '<a style="color:red">failure</a>';

      }
      ?>
    </td>
    <td><?php echo $row['owner'] ?></td>
    <td><?php echo $row['latest_update'] ?></td>
    <td><?php if($row['promocode_status']==1){
        echo '<a style="text-decoration: none;" href="modules/main/xuly.php?code='.$row['promo_code'].'&status=1">Deactivate</a>';
      }else{
        echo '<a style="text-decoration: none;" href="modules/main/xuly.php?code='.$row['promo_code'].'&status=0">Activate</a>';
      }
      ?>
    </td>
  </tr> 

  <?php 
}   
  ?>
</table>
