<?php 
        include('../../../config/config.php');

        if(isset($_GET['id_admin']) && isset($_GET['admin_status'])==1){
            $id_admin = $_GET['id_admin'];
            $status = $_GET['admin_status'];
            $sql_update ="UPDATE tbl_admin SET admin_status= 0 WHERE id_admin='".$id_admin."' AND admin_status='".$status."'";
            $query = mysqli_query($mysqli,$sql_update);
            header('Location: ../../../../index.php?manage=usersetting');
        }
    ?>