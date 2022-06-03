    <?php
        $sql_lietke_nguoidung="SELECT * FROM tbl_dangky ORDER BY id_khachhang DESC";
        $result_lietke_nguoidung= mysqli_query($connect,$sql_lietke_nguoidung);
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
                <tr><th colspan="9">DANH SÁCH NHÂN VIÊN</th></tr>
                <tr>
                    <th>ID</th>
                    <th>Name </th>
                    <th>Account</th>
                    <th>Email</th>
                    <th>Number phone</th>
                    <th>Address</th>
                    <th colspan="2">Quản lý</th>
                    <th>Chức vụ</th>
                    

                    
                </tr>
                    <?php
                        $i=0;
                        while($row=mysqli_fetch_array($result_lietke_nguoidung)){
                        $i++;
                        
                    ?>
                
                <tr>
                    <td style="height:100px;"> <?php echo $i ?></td>
                    <td> <?php echo $row ['hovaten']?></td>
                    <td> <?php echo $row ['taikhoan']?></td>
                    <td> <?php echo $row ['email']?></td>
                    <td> <?php echo $row ['sodienthoai']?></td>
                    <td style="width:100px;"> <?php echo $row ['diachi']?></td>
                    <td>
                        <button class="button" style="vertical-align:middle"><span><a style="text-decoration: none" href="?action=quanlynguoidung&query=sua&idnguoidung=<?php echo $row['id_khachhang'] ?>"> Sửa </a></span></button>
                    </td>
                    <td>
                        <button class="button" style="vertical-align:middle"><span><a style="text-decoration: none" href="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $row['id_khachhang']?>">Xóa</a></span> </button>
                    </td>
                    <td><?php if($row['chucvu']==1){
                        echo "Bán hàng";
                }else{
                        echo "Không";
                }?>
                </td>
                </tr>


                    <?php
                        }
                    ?>
            </table>
        </div>
    </body>
    </html>
    
    