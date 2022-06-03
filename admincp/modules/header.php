<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>header</title>
	<link rel="stylesheet" href="css/style_admincp.css">
</head>
<body>
	<div class="logout">
	<table>
		<tr>
			<td>
				<p>		
				<i class="fas fa-user-tie"><a style="text-decoration:none;" href="index.php?dangxuat=1">  Đăng xuất </a></i>
				</p>
			</td>
			<td><i class="fas fa-cog fa-pulse"><a href="#"></a></i></td>
			<td><i class="fas fa-bell"><a href="#"></a></i></td>
		</tr>
	</table>	
	</div>

</body>
</html>
