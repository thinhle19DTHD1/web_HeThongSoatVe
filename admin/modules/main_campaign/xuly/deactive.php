<?php 
        include('../../../config/config.php');

        if(isset($_GET['code']) && isset($_GET['status'])==1){
            $promo_code = $_GET['code'];
            $promocode_status = $_GET['status'];
            $sql_update ="UPDATE tbl_promocode_details SET promocode_status= 0 WHERE promo_code='".$promo_code."' AND promocode_status='".$promocode_status."'";
            $query = mysqli_query($mysqli,$sql_update);
            // header('Location:../../../../index.php?quanly=makhuyenmai');

        }
    ?>