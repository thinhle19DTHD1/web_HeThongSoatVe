<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1 ";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location: index.php");
        }else{
            echo '<script> alert("Tài khoản hoặc mật khẩu không đúng, vui lòng đăng nhập lại."); </script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleadmin.css">
    <title>Login admin</title>
</head>
<body>
<form method="POST" action="" class="box">
        <h1>LOGIN</h1>
        <input type="text" name="username" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="dangnhap" value="ĐĂNG NHẬP"><br>
        <td><a style="text-decoration:none" href="#">Quên mật khẩu </a></td>

 </form>
        
</body>
</html>