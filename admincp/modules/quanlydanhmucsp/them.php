 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Thêm danh mục</title>
     <link rel="stylesheet" href="css/style_admincp.css">
 </head>
 <body>
     <div id = "them">
        <div class="table-wrapper"> 
        <table class="fl-table" >
            <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
                <tr>
                    <th colspan="2">THÊM DANH MỤC</th>
                </tr>
                <tr>
                    <th>Tên danh mục</th>
                    <td><input type="text" name="tendanhmuc" ></td>
                </tr>
                <tr>
                    <th>Thứ tự</th>
                    <td><input type="text" name="thutu"></td>
                </tr>
                <tr>

                    <td colspan="2"><input type="submit" value="Thêm danh mục sản phẩm" name="themdanhmuc"></td>
                </tr>
            </form>
        </table>
        </div> 
     </div>
   

 </body>
 </html>
 