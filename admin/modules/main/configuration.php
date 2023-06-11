<h3 style="color: mediumblue;">1. Landing page (microsite)</h3>

<form>
  <tr>
    <td>Landing page Url</td><br>
    <td><input type="text" size="218" name="url_landing_page"></td>
  </tr> 
</form><br><br>

<!-- ********************* -->

<h3 style="color: mediumblue;">2. SMS content <i>(check to activate the SMS for your campaign)</i></h3> 
<form>
<tr>
    <td>
      <input type="checkbox" id="check" name="sms_content" value="success"><label for="sms_content"> Success SMS </label><br>
      <input type="text" size="218" name="success_sms">
    </td>  
</tr><br>

<tr>
    <td>
      <input type="checkbox" id="check" name="sms_content" value="failure"><label for="sms_content">  Failure SMS </label><br>
      <input type="text" size="218" name="failure_sms">
    </td>  
</tr>
</form> <br><br>

<!-- ********************* -->

<h3 style="color: mediumblue;">3. Daily Report <i>(check to send daily report automatically)</i></h3> 
<form>
  <tr>
  <input type="checkbox" id="check" name="send" value="daily_report"><label for="send">   Send report automatically </label>
  <div style="float:right; margin-right: 500px">  
    <td>*Time send : </td>
    <td><input type="date" size="30" name="select_time"></td>

    <tr>
      <td>*Send to email : </td>
      <td><input type="text" size="50" name="email_client"></td>
    </tr>
</div>
  </tr> 
</form>