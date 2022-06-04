<?php
    
    
    $sql_lietke_sp="SELECT * FROM tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $result_lietke_sp= mysqli_query($connect,$sql_lietke_sp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lietke</title>
    <link rel="stylesheet" href="css/style_admincp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <div class="table-wrapper">
        <table class="fl-table" > 
            <tr>
                <th colspan="9">DANH MỤC SẢN PHẨM</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Tên sản phảm</th>
                <th>Hình ảnh </th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
                <th>Danh mục</th>
                <th>Mã sản phẩm</th>
                <!-- <th>Tóm tăt</th> -->
                <th>Trạng thái</th>
                <th>Quản lý</th>
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($result_lietke_sp)){
                $i++;
            
            ?>
            <tr>
                <td ><?php echo $i ?></td>
                <td >
                                    <?php echo $row['tensanpham'] ?>   
                </td>
                
                <td style="width:70px;height:150px;" >
                                    <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
                </td>

                <td style="width:150px;text-align: center;">
                                    <?php echo number_format($row['giasanpham'],0,',','.').'VNĐ'  ?>   
                </td>
                <td><?php echo $row['soluong'] ?>      </td>
                <td><?php echo $row['tendanhmuc'] ?>      </td>
                <td><?php echo $row['masanpham'] ?>    </td>
                <!-- <td style="display:block; width:150px;text-align: center;"><?php echo $row['tomtat'] ?>  </td> -->
                <td><?php if($row['trangthai']==1){
                        echo "Mới";
                }else{
                        echo "Cũ";
                }?>
                </td>
                <td>
                    <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    ||
                    <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                </td>
            </tr>

            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
