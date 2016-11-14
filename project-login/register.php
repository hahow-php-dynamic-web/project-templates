<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>會員註冊</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<br><br><br><br>
<div class="container">
	<div class="row jumbotron">
		<div class="col-md-6 col-md-offset-3">			
			<h2 class="text-center">會員註冊</h2>
			<hr>
			<div class="form-group">
				<label for="input-email">Email 帳號 *</label>
				<input type="email" class="form-control" id="input-email" name="email">
			</div>
			<div class="form-group">
				<label for="input-name">真實姓名 *</label>
				<input type="text" class="form-control" id="input-name" name="name">
			</div>
			<div class="form-group">
				<label for="input-nick">暱稱 *</label>
				<input type="text" class="form-control" id="input-nick" name="nick">
			</div>
			<div class="form-group">
				<label for="input-password">密碼 *</label>
				<input type="password" class="form-control" id="input-password" name="password">
			</div>
			<br>
			<input type="submit" class="btn btn-primary btn-lg btn-block" value="註冊">
		</div>
	</div>
</div>
</body>
</html>