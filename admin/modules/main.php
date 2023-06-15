<div id="main">

            <div class="maincontent">
                <?php
                    if(isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }else{
                        $tam = '';
                    }
                    if($tam=='thongtin'){
                        include("main_campaign/infomation.php");
                    }elseif ($tam =='makhuyenmai'){
                        include("main_campaign/promo_code.php");
                    }elseif ($tam =='nhapmakhuyenmai'){
                        include("main_campaign/import_promo_code/import_promo_code.php");
                    }elseif ($tam =='cauhinh'){
                        include("main_campaign/configuration.php");
                    }elseif ($tam =='lichsudoithuong'){
                        include("main_campaign/redemption_history.php");
                    }
                    else{
                        include("main_campaign/index.php");
                    }


                    if(isset($_GET['manage'])){
                        $tam = $_GET['manage'];
                    }else{
                        $tam = '';
                    }
                    if($tam=='usersetting'){
                        include("main_menu/user_setting.php");
                    }elseif($tam=='add_user'){
                        include("main_menu/xuly/add_user.php");
                    }elseif($tam=='deactivate'){
                        include("main_menu/xuly/deactivate.php");
                    }

                    elseif($tam=='report'){
                        include("main_menu/report.php");
                    }
                ?>
            </div>    
</div>