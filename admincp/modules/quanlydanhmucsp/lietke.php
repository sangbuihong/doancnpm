<?php
    $sql_lietke="SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $result_lietke= mysqli_query($connect,$sql_lietke);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lietke</title>
    <link rel="stylesheet" href="css/style_admincp.css">
</head>
<body>
    <div class="table-wrapper">
                
        <table class="fl-table" > 
            <tr>
                <th colspan="5">LIỆT KÊ DANH MỤC</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Thứ tự</th>
                <th colspan="2">Quản lý</th>
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($result_lietke)){
                $i++;
            
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tendanhmuc'] ?></td>
                <td><?php echo $row['thutu']?></td>
                <td>
                    <button class="button" style="vertical-align:middle"><span><a style="text-decoration: none" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a></span></button>
                </td>
                <td>
                    <button class="button" style="vertical-align:middle"><span><a style="text-decoration: none" href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a></span></button> 
                </td>
            </tr>

            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
