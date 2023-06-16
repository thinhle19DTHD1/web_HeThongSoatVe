<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        
?>
<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
        header('Location: index.php?quanly=dangnhap');
    }
?>
<div class="menu"> 
            <ul class="list_menu">
                <!-- <li><a href="index.php?quanly=dangnhap">Đăng nhập </a></li> -->
                <li><a href="index.php">Home </a></li>
                <li><a href="index.php?quanly=điaiem">Các địa điểm </a></li>
                <li><a href="index.php?quanly=tintuc">Tin tức </a></li>
                <li><a href="index.php?quanly=lienhe">Liên hệ </a></li>
                <li><a href="index.php?quanly=giohang">Thanh toán </a></li>
                <?php
                if(isset($_SESSION['dangky'])){ 
                ?>
                <li><a href="index.php?dangxuat=1">Đăng xuất </a></li>
                <li><a href="index.php?quanly=doimatkhau">Đổi mật khẩu  </a></li>
                <?php
                }else{
                ?>
                <li><a href="index.php?quanly=dangnhap">Đăng nhập </a></li>
                <?php
                } 
                ?>
            </ul>

            <form style="float:right;" action="index.php?quanly=timkiem" method="POST">
                <p>
                    <input type="text" placeholder="Nhập địa điểm cần tìm..." name="tukhoa"></input>
                    <input type="submit" name="timkiem" value="Tìm kiếm">
                </p>

            </form>
</div>