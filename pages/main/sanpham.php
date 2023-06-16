<h2 style="color: darkgreen">Chi tiết vé :</h2>
<?php
    $sql_chitiet = "SELECT * FROM tbl_ve WHERE tbl_ve.id_ve='$_GET[id_ve]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
                              
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
    <div class="wrapper_chitiet">
        <div class="hinhanh_sanpham">
            <img width="80%" src="admin/modules/addtickets/uploads/<?php echo $row_chitiet['hinhanh']?>">
        </div>
        <form method="POST" action="pages/main/themgiohang.php?id_ve=<?php echo $row_chitiet['id_ve'] ?>">
            <div class="chitiet_ve">
                <h3 style="margin: 0;">Tên vé: <?php echo $row_chitiet['tenve'] ?></h3>
                <p>Mã sản phẩm: <?php echo $row_chitiet['ma_ve'] ?></p>
                <p>Giá tiền: <?php echo number_format($row_chitiet['giave'],0,',','.') .' '.'vnđ' ?></p>
                <p>Kho: <?php echo $row_chitiet['soluong'] ?></p>
                <p>Tên địa điểm: <?php echo $row_chitiet['diadiem'] ?></p>
                <p>Mô tả: <?php echo $row_chitiet['motadiadiem']?></p>
                <p><input class="muave" name="muave" type="submit" value="Mua vé"></p>
        </div>
        </form>
    </div>
    <?php
    }
    ?>