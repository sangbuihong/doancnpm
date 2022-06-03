<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admincp.css">
    <title>AdminCp</title>
</head>
<body style="background-color: #e9ecef;">
    <h3 class="admincp_tile">Welcome to Admin</h3>
    <div class="wrapper">
        <?php
            include("config/connect.php");
        ?>
        <div class="tach">
            <div id = left>
                <?php
                    include("modules/menu.php");
                ?>
            </div>
            <div id = right>
                <div id = index-header><?php include("modules/header.php"); ?></div>
                <div id = index-main><?php include("modules/main.php"); ?></div>
                <div id = index-footer><?php include("modules/footer.php");?></div>
                
            </div>
        </div>
    
    </div>
</body>
</html>