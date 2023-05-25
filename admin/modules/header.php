<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header('Location: login.php');
    }
?>

<p style="margin-left:2050px";><a href="index.php?dangxuat=1">Log out</a></p> 