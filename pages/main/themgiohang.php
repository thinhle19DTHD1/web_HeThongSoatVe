<?php
    session_start();
    include('../../admin/config/config.php');
    // them sp luong
    if(isset($_GET['cong'])){
        $id=$_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){    
                $product[] = array('tenve'=>$cart_item['tenve'],'id_ve'=>$cart_item['id_ve'],'soluong'=>$cart_item['soluong'],'giave'=>$cart_item['giave'],'hinhanh'=>$cart_item['hinhanh'],'mave'=>$cart_item['mave']);
                $_SESSION['cart'] = $product;
            }else{
                $tangsoluong = $cart_item['soluong'] + 1;
                if($cart_item['soluong']<=9){
                    
                    $product[] = array('tensve'=>$cart_item['tenve'],'id_ve'=>$cart_item['id_ve'],'soluong'=>$tangsoluong,'giave'=>$cart_item['giave'],'hinhanh'=>$cart_item['hinhanh'],'mave'=>$cart_item['mave']);
                }else{
                    $product[] = array('tenve'=>$cart_item['tenve'],'id_ve'=>$cart_item['id_ve'],'soluong'=>$cart_item['soluong'],'giave'=>$cart_item['giave'],'hinhanh'=>$cart_item['hinhanh'],'mave'=>$cart_item['mave']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header('Location:../../index.php?quanly=giohang');
    }
    // tru so luong
    if(isset($_GET['tru'])){
        $id=$_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = array('tenve'=>$cart_item['tenve'],'id_ve'=>$cart_item['id_ve'],'soluong'=>$cart_item['soluong'],'giave'=>$cart_item['giave'],'hinhanh'=>$cart_item['hinhanh'],'mave'=>$cart_item['mave']);
                $_SESSION['cart'] = $product;
            }else{
                $giamsoluong = $cart_item['soluong'] - 1;
                if($cart_item['soluong']>1){
                    
                    $product[] = array('tenve'=>$cart_item['tenve'],'id_ve'=>$cart_item['id_ve'],'soluong'=>$giamsoluong,'giave'=>$cart_item['giave'],'hinhanh'=>$cart_item['hinhanh'],'mave'=>$cart_item['mave']);
                }else{
                    $product[] = array('tenve'=>$cart_item['tenve'],'id_ve'=>$cart_item['id_ve'],'soluong'=>$cart_item['soluong'],'giave'=>$cart_item['giave'],'hinhanh'=>$cart_item['hinhanh'],'mave'=>$cart_item['mave']);
                }
                $_SESSION['cart'] = $product;
            }
        }
        header('Location:../../index.php?quanly=giohang');
    }
    // xoa san pham
    if(isset($_SESSION['cart'])&& isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id_ve'] != $id){
                $product[] = array('tenve'=>$cart_item['tenve'],'id_ve'=>$cart_item['id_ve'],'soluong'=>$cart_item['soluong'],'giave'=>$cart_item['giave'],'hinhanh'=>$cart_item['hinhanh'],'mave'=>$cart_item['mave']);
            }

        $_SESSION['cart'] = $product;
        header('Location:../../index.php?quanly=giohang');
        }
    }
    // xoa tat ca san pham 
    if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header('Location:../../index.php?quanly=giohang');
    }







    // them san pham vao gio hang
    if(isset($_POST['muave'])){
        // session_destroy();
        $id=$_GET['id_ve'];
        $soluong=1;
        $sql ="SELECT * FROM tbl_ve WHERE id_ve ='".$id."' LIMIT 1 ";
        $query = mysqli_query ($mysqli,$sql);
        $row = mysqli_fetch_array ($query);
        if($row){
            $new_product=array(array('tenve'=>$row['tenve'],'id_ve'=>$id,'soluong'=>$soluong,'giave'=>$row['giave'],'hinhanh'=>$row['hinhanh'],'mave'=>$row['mave']));
        //kiem tra seesion gio hang ton tai
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach($_SESSION['cart'] as $cart_item){
                //neu du lieu trung
                if($cart_item['id_ve']==$id){
                    $product[] = array('tenve'=>$cart_item['tenve'],'id_ve'=>$cart_item['id_ve'],'soluong'=>$soluong+1,'giave'=>$cart_item['giave'],'hinhanh'=>$cart_item['hinhanh'],'mave'=>$cart_item['mave']);
                $found = true;
                }else{
                    //neu khong trung
                    $product[] = array('tenve'=>$cart_item['tenve'],'id_ve'=>$cart_item['id_ve'],'soluong'=>$cart_item['soluong'],'giave'=>$cart_item['giave'],'hinhanh'=>$cart_item['hinhanh'],'mave'=>$cart_item['mave']);
                }
            }
            if($found == false){
                //noi chuoi
                $_SESSION['cart']=array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }

            
        }else{
            $_SESSION['cart']= $new_product;
        }
        }

        header('Location:../../index.php?quanly=giohang');
    }  
?>