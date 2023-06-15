<?php
    if(isset($_POST['save'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email']; 
        $phone_num = $_POST['phone_num'];       
        $organization = $_POST['organization'];
        $role = $_POST['role'];
        $sql_add = mysqli_query($mysqli,"INSERT INTO tbl_admin(username,email,phone_num,organization,role) VALUE('".$fullname."','".$email."','".$phone_num."','".$organization."','".$role."')");
        if($sql_add){
            echo '<p style="color:green"> Add success! </p>';
            
            $_SESSION['save'] = $fullname;
            
            $_SESSION['id_admin'] = mysqli_insert_id($mysqli);

            header('Location: index.php?manage=usersetting');
        }   
    }
?>
<h3><b>ADD/ EDIT USER</b></h3>
<style type="text/css">
    table.dangky tr td {
    padding: 5px;
}
</style>
<form action="" method="POST">
    <table class="dangky" border="1" width="50%" style="border-collapse: collapse;">
        <tr>
            <td>Full Name</td>
            <td> <input type="text" size="50" name="fullname"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <input type="text" size="50" name="email"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td> <input type="text" size="50" name="phone_num"></td>
        </tr>
        <tr>
            <td>Organization</td>
            <td> <input type="text" size="50" name="organization"></td> 
        </tr>
        <tr>
            <td>Role</td>
            <td> <input type="text" size="50" name="role"></td>
        </tr>
        <tr>
            <td><input type="submit" name="save" value="Save changes"></td>
        </tr>
    </table>
</form>