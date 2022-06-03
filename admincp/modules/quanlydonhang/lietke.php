<?php
    $sql_lietke_dh="SELECT * FROM tbl_giohang ,tbl_dangky  WHERE tbl_giohang.id_khachhang=tbl_dangky.id_khachhang ORDER BY id_cart DESC";
    $result_lietke_dh= mysqli_query($connect,$sql_lietke_dh);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lietke</title>
    <link rel="stylesheet" href="css/style_admincp.css">
</head>
<body>
    <div class="table-wrapper">
                <p>Danh sách đơn hàng </p>
        <table class="fl-table"> 
            <tr>
                <td>ID</td>
                <td>Mã đơn hàng</td>
                <td>Tên khách hàng</td>
                <td>Địa chỉ</td>
                <td>Tài khoản</td>
                <td>Hình thức thanh toán</td>
                <td>Điện thoại</td>
                <td>Tinh Trạng </td>
                <td>Ngày đặt</td>
                <td colspan="2">Quản lý </td>
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($result_lietke_dh)){
                $i++;
            
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['code_cart'] ?></td>
                <td><?php echo $row['hovaten']?></td>
                <td><?php echo $row['diachi']?></td>
                <td><?php echo $row['taikhoan']?></td>
                <td><?php echo $row['cart_payment']?></td>
                <td><?php echo $row['sodienthoai']?></td>
                <td>
                <?php if($row['cart_status']==1){
                    echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
                }else{
                    echo 'Đã xem';
                }
                ?>
                </td>
                <td><?php echo $row['cart_date'] ?></td>
                <td>
                    <a href="index.php?action=quanlydonhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
                    <th><a href="modules/quanlydonhang/xuly.php?iddonhang=<?php echo $row['code_cart']?>">Xóa</a></th>
                </td>
            </tr>
            
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
