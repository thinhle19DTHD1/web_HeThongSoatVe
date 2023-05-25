<div id="main">

            <div class="maincontent">
                <?php
                    if(isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }else{
                        $tam = '';
                    }
                    if($tam=='thongtin'){
                        include("../main/infomation.php");
                    }elseif ($tam =='makhuyenmai'){
                        include("../main/promo_code.php");
                    }elseif ($tam =='nhapmakhuyenmai'){
                        include("../main/import_promo_code.php");
                    }elseif ($tam =='cauhinh'){
                        include("../main/configuration.php");
                    }elseif ($tam =='lichsudoithuong'){
                        include("../main/redemption_history.php");
                    }
                    else{
                        include("../../index.php");
                    }
                ?>
            </div>    
</div>