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
    $sql_list_promocode = "SELECT * FROM tbl_admin ORDER BY id_admin DESC";
    $query_lietke = mysqli_query($mysqli,$sql_list_promocode);
?>

<h3><i>List all user</i> </h3> 
<h3><i><a style="float:right; margin-right:20px" href="index.php?manage=add_user">Add new user</a></i></h3>
<table style= "width:100%" border="1" style="border-collapse:collapse">
  <tr>
    <th>STT</th>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Organization</th>
    <th>Role</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
<?php
$i = 0;
while($row = mysqli_fetch_array($query_lietke)){
    $i++
?>
  <tr style="text-align:center">
    <td><?php echo $row['id_admin'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['phone_num'] ?></td>
    <td><?php echo $row['organization'] ?></td>
    <td><?php echo $row['role'] ?></td>
    <td><?php if($row['admin_status']==1){
        echo '<p>Active</p>';
      }else{
        echo '<p></p>';

      }
      ?>
    </td>
    <td>
        <b><a href=""> Edit</a></b><br>
        <b><a href=""> Reset Password</a></b><br>
        <?php
        $i=$row['admin_status'];
        if($row['admin_status']==1){
          echo '<a href="index.php?manage=deactivate?id_admin='.$row['id_admin'].'&admin_status='.$i.'">Deactivate</a>';
        }else if($row['admin_status']==0){
          echo 'Deactivated...';
        }
      ?>
    </td>

  </tr> 
  <?php 
}   
  ?>
</table>

