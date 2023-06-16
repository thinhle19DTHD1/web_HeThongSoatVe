<?php
    session_start();
    include('../../admin/config/config.php');
    $id_khachhang = $_SESSION['id_dangky'];
    $code_other = rand(0,999999);
    $insert_cart = "INSERT INTO tbl_cart(id_dangky,code_cart,cart_status) VALUE ('".$id_khachhang."','".$code_other."',1)";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){
        
        foreach($_SESSION['cart'] as $ket => $value){
            $id_ve = $value['id_ve'];
            $soluong = $value['soluong'];
            $insert_other_details = "INSERT INTO tbl_cart_details(id_ve,code_cart,soluongmua) VALUE ('".$id_sanpham."','".$code_other."','".$soluong."')";
            mysqli_query($mysqli,$insert_other_details);
        }
    }
    unset($_SESSION['cart']);
    header('Location: ../../index.php?quanly=thankyou');
?>