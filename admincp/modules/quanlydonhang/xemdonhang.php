 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>xemdonhang</title>
 </head>
 <body>
     <div class="table-wrapper">
        <b><p>XEM ĐƠN HÀNG</p></b>
        <hr>
        <?php
            $code=$_GET['code'];
            $sql_lietke_dh="SELECT * FROM tbl_cart_detail ,tbl_sanpham  WHERE tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham 
                AND tbl_cart_detail.code_cart=$code
                ORDER BY tbl_cart_detail.id_cart_detail DESC";
            $result_lietke_dh= mysqli_query($connect,$sql_lietke_dh);
        ?>
        <p>Đơn hàng</p>
        <table class="fl-table"> 
            <tr>
                <td>ID</td>
                <td>Mã đơn hàng</td>
                <td>Tên Sản phẩm</td>
                <td>Hình </td>
                <td>Số lượng</td>
                <td>Đơn giá</td>
                <td>Thành tiền</td>
                
            </tr>
            <?php
            $i=0;
            $tongtien=0;
            while($row=mysqli_fetch_array($result_lietke_dh)){
                $i++;
                $thanhtien= $row['giasanpham'] * $row['soluongmua'];
                $tongtien+=$thanhtien;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['code_cart'] ?></td>
                <td><?php echo $row['tensanpham']?></td>
                <td style="width:150px;height:150px;" >
                                    <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
                </td>
                <td><?php echo $row['soluongmua']?></td>
                <td><?php echo number_format($row['giasanpham'],0,',','.').'VNĐ' ?></td>
                <td><?php echo number_format($thanhtien,0,',','.').'VNĐ' ?></td>
                
            </tr>
            <?php
            }
            ?>
            <tr>
                <th colspan="7">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'VNĐ' ?></th>
                
            </tr>
            <tr>
            
            </tr>
            
        </table>
     </div>
 </body>
 </html>
 


 