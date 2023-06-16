
<div class="menu"> 
        <ul class="list_menu">
            <img src="../../images/logo.png">
            <li><a href="index.php">Dashboard </a></li>
            <li><a href="index.php?manage=addtickets">Add tickets </a></li>
            <li><a href="index.php?manage=campaign">Campaign </a></li>
            <li><a href="index.php?manage=report">Report </a></li>
            <li><a href="index.php?manage=usersetting">User Setting </a> </li>

            <?php 
            if(isset($_SESSION['dangnhap'])){
            ?>
                <h2 style="margin-left: 1154px;margin-top:-40px;color:aliceblue;">Wellcome <?php echo '<span style="color:aliceblue">'.$_SESSION['dangnhap'].'</span>';?></h2>
            <?php
            }   
            ?>
         </ul>
</div>