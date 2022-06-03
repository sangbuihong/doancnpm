<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_admincp.css">
</head>
<body>
    <div class="clear"></div>
    <div class="main">
        <?php 
                        
                        if(isset($_GET['action']) && $_GET['query']){                        
                            $bientam=$_GET['action'];
                            $query =$_GET['query'];
                        }else{
                            $bientam='';
                            $query='';
                        }
                        if ($bientam=='quanlydanhmucsanpham' && $query=='them'){
                            include("modules/quanlydanhmucsp/them.php");
                            include("modules/quanlydanhmucsp/lietke.php");

                        }elseif($bientam=='quanlydanhmucsanpham' && $query=='sua'){
                            include("modules/quanlydanhmucsp/sua.php");

                        }elseif($bientam=='quanlydoanhso' && $query=='thongke'){
                            include("modules/quanlydoanhso/thongke.php");

                        }elseif($bientam=='quanlysanpham' && $query=='them'){
                            include("modules/quanlysp/them.php");
                            include("modules/quanlysp/lietke.php");

                        }elseif($bientam=='quanlysanpham' && $query=='sua'){
                            include("modules/quanlysp/sua.php");

                        }elseif($bientam=='quanlynguoidung' && $query=='them' ){
                            include("modules/quanlynguoidung/lietke.php");
                            
                        }elseif($bientam=='quanlynguoidung' && $query=='sua'){
                            include("modules/quanlynguoidung/sua.php");
                            
                        }elseif($bientam=='quanlydonhang' && $query=='them' ){
                            include("modules/quanlydonhang/lietke.php");
                            
                        }elseif($bientam=='quanlydonhang' && $query=='sua'){
                            include("modules/quanlydonhang/sua.php");
                            
                        }elseif($bientam=='quanlydonhang' && $query=='xemdonhang'){
                            include("modules/quanlydonhang/xemdonhang.php");
                            
                        }elseif($bientam=='dangxuat'){
                            include("../login.php");
                        }
                        else{
                            include("modules/dashboard.php");
                        }
        ?>
    </div>
</body>
</html>
