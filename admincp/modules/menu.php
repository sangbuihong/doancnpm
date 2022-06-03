<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style_admincp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>
<body>
    <div class="admincp_list">
        <ul >
            <li><table>
                <tr>
                    <td><spam class="fas fa-home "> </spam></td>
                    <td><a href="">Trang chủ</a></td>
                </tr>
            </table></li>
            <li><table>
                <tr>
                    <td><i class="fab fa-buffer"></i></td>
                    <td><a href="index.php?action=quanlydoanhso&query=thongke">Doanh số</a></td>
                </tr>
            </table></li>
            <li><table>
                <tr>
                    <td><i class="fab fa-product-hunt"></i></td>
                    <td><a href="index.php?action=quanlysanpham&query=them">Sản phẩm </a></td>
                </tr>
            </table></li>

            <?php
                if(isset($_SESSION['dangnhap'])){
                    if($_SESSION['dangnhap']=='admin'){
            ?>
            <li><table>
                <tr>
                    <td><i class="fas fa-bookmark"></i></td>
                    <td><a href="index.php?action=quanlydanhmucsanpham&query=them">Danh mục  </a></td>
                </tr>
            </table></li>
            <li><table>
                <tr>
                    <td><i class="fas fa-users"></i></td>
                    <td><a href="index.php?action=quanlynguoidung&query=them">Nhân viên</a></td>
                </tr>
            </table></li>
                
            <?php

                    }
            }
            
            ?>
            <li><table>
                <tr>
                    <td><i class="far fa-address-card"></i></td>
                    <td><a href="index.php?action=quanlydonhang&query=them">Đơn hàng </a></td>
                </tr>
            </table></li>
        </ul>
    </div>
    
</body>
</html>

