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
    $sql_list_promocode = "SELECT * FROM tbl_promocode_details ORDER BY id_promocode_details DESC";
    $query_lietke = mysqli_query($mysqli,$sql_list_promocode);
?>

<h3><i>List all SMS</i> </h3> 
<h3><i><a style="float:right; margin-right:20px" href="#">Download(csv)</a></i></h3>
<table style= "width:100%" border="1" style="border-collapse:collapse">
  <tr>
    <th>Sent Code</th>
    <th>Requested by</th>
    <th>Requested Date</th>
    <th>Redemption</th>
    <th>Latest Update</th>
    <th>Request Source</th>
    <th>Reference</th>
    <th>Note</th>

  </tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke)){
    $i++
?>
  <tr style="text-align:center">
    <td><?php echo $row['promo_code'] ?></td>
    <td><?php echo $row['owner'] ?></td>
    <td><?php echo $row['start_date'] ?></td>
    <td><?php if($row['redemption']==1){
        echo '<a style="color:green">Success</a>';
      }else{
        echo '<a style="color:red">Failure</a>';

      }
      ?>
    </td>
    <td><?php echo $row['latest_update'] ?></td>
    <td><?php echo $row['request_source'] ?></td>
    
    <td><?php echo $row['reference'] ?></td>
    <td><?php echo $row['note'] ?></td>

  </tr> 
  <?php 
}   
  ?>
</table>

