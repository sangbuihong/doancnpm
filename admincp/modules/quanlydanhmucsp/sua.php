<?php
    $sql_sua="SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $result_sua= mysqli_query($connect,$sql_sua);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sua</title>
</head>
<body>
    <div class="table-wrapper">
            <p>SỬA DANH MỤC SẢN PHẨM</p>
    <table class="fl-table">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
        <?php
            while($dong =mysqli_fetch_array($result_sua)){
        ?>
    <tr>
            <th colspan="2">Điền danh mục sản phẩm</th>
        </tr>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>" ></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" name="thutu" value="<?php echo $dong['thutu']?>"></td>
        </tr>
        <tr>

            <td colspan="2"><input type="submit" value="Sửa danh mục" name="suadanhmuc"></td>
        </tr>
        <?php
            }
        ?>
    </form>
    </table>
    </div>
</body>
</html>
