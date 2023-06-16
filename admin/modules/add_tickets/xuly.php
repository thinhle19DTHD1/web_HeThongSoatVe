<?php 
include('../../config/config.php');
    
$tenve = $_POST['tenve'];
$mave = $_POST['mave'];
$giave = $_POST['giave'];
$soluong = $_POST['soluong'];
//xu ly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$noidung = $_POST['noidung'];
$diadiem = $_POST['diadiem'];
$motadiadiem = $_POST['motadiadiem'];
$sukien = $_POST['sukien'];
$trangthai = $_POST['trangthai'];


if(isset($_POST['themve'])){
    //them
    $sql_them = "INSERT INTO tbl_ve (tenve,masp,giave,soluong,hinhanh,noidung,diadiem,motadiadiem,sukien,trangthai) VALUE ('".$tenve."','".$mave."','".$giave."','".$soluong."','".$hinhanh."','".$noidung."','".$diadiem."','".$motadiadiem."','".$sukien."','".$trangthai."')";
    //ket noi voi mysqli 
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    // header('Location:../../index.php?manage=addtickets');
}elseif (isset($_POST['suave'])){
    //sua
    if($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    //update anh len    
        $sql_update = "UPDATE tbl_ve SET tenve='".$tenve."',mave='".$mave."',giave='".$giave."',soluong='".$soluong."',hinhanh='".$hinhanh."',noidung='".$noidung."',
        diadiem='".$diadiem."',motadiadiem='".$motadiadiem."',sukien='".$sukien."' WHERE id_ve='$_GET[id_ve]'";
    //xoa anh cu
        $sql = "SELECT * FROM tbl_ve WHERE id_ve = '$_GET[id_ve]' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
    }else{
        $sql_update = "UPDATE tbl_ve SET tenve='".$tenve."',mave='".$mave."',giave='".$giave."',soluong='".$soluong."',noidung='".$noidung."',
        diadiem='".$diadiem."',motadiadiem='".$motadiadiem."',sukien='".$sukien."' WHERE id_ve='$_GET[id_ve]'";
    }
    mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?manage=addtickets');
}else{
    $id=$_GET['id_ve'];
    $sql = "SELECT * FROM tbl_ve WHERE id_ve = '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_ve WHERE id_ve='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?manage=addtickets');      
}
?>
