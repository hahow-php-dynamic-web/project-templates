<?php

$error_flag = FALSE;
$notfound_flag = FALSE;

// 對資料庫伺服器進行連線，並選擇對應的會員資料庫

// 如果收到 POST 表單送來的登入資料，到資料庫檢查是否有這個人存在
//（使用 mysql_query("SELECT ...... ")，然後把回傳的東西透過 mysql_fetch_array(......) 來檢查）

	// 如果有找到，檢查密碼是否相符

		// 如果相符合，則設定 Session（記得要先 session_start()！），並轉址到會員中心（member.php）
		// 讓網頁轉址的 PHP 寫法：header('Location: member.php');

		// 如果不符合，則設定 $error_flag 為 TRUE，繼續顯示網頁內容

	// 如果沒有找到，則設定 $notfound_flag 為 TRUE，繼續顯示網頁內容

// 如果沒收到，繼續顯示網頁內容

?>

<!DOCTYPE html>
<html>
<head>
	<title>會員登入</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<br><br><br><br>
<div class="container">
	<div class="row jumbotron">
		<div class="col-md-6 col-md-offset-3">			
			<h2 class="text-center">會員登入</h2>
			<br>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
				<input class="form-control input-lg" type="text" name="email" id="pass" required="TRUE" placeholder="E-Mail">
				<br>
				<input class="form-control input-lg" type="password" name="pass" id="pass" required="TRUE" placeholder="密碼">
				<br>
				<input type="submit" class="btn btn-primary btn-lg btn-block" value="登入">
				<a class="btn btn-default btn-lg btn-block" href="register.php">會員註冊</a>
			</form>
			<br>
			<?php if($error_flag){ ?>
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					密碼錯誤！
				</div>
			<?php }?>
			<?php if($notfound_flag){ ?>
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					未找到本使用者，請重新確認！
				</div>
			<?php }?>
		</div>
	</div>
</div>
</body>
</html>