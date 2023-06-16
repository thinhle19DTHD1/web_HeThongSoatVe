<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <title>Bán vé sự kiện</title>
</head>
<body>
    <div class="wrapper"> 
        <?php
        session_start();     

            include("admin/config/config.php");
            include("pages/header.php");
            include("pages/menu.php"); 
            include("pages/main.php"); 
            include("pages/footer.php"); 
        ?>

</div>
</body>
</html>