
<h3 style="color: mediumblue;">1. Campaign size</h3>
<table border="1" width="100%" style=" margin-left:10px; border-collapse:collapse">
<!-- <form method="POST" action="modules/quanlydanhmucsp/xuly.php"> -->
<form>
  <tr>
    <td>Campaign name:</td>
    <td><input type="text" size="218" name="campaign_name"></td>
  </tr>
  <tr>
    <td>Description: </td>
    <td><input type="text" size="218" name="description"></td>
  </tr>
  <tr>
  <tr>
    <td>Code usage limit: </td>
    <td>
      <input type="text" size="1" name="Code_usage_limit">
      <input type="checkbox" id="check" name="no_limit" value="usage_limit"><label for="no_limit">Unlimited</label><br>
    </td>  
</tr>
</form> 
</table>




<h3 style="color: mediumblue;">2. Time frame</h3>

<form style="margin-left: 10px;">     
  <div style="float:left; margin-right: 400px">  
    <td>Start date*</td>
    <td><input type="date" size="30" name="ngaybatdau"></td>
    <td><input type="time" size="30" name="giobatdau"></td>
</div>
  <div>
    <td>End date*</td>
    <td><input type="date" size="30" name="ngayketthuc"></td>
    <td><input type="time" size="30" name="gioketthuc"></td>
  </div>
</form>
