<?php

// 檢查是否有登入（Session 有被設定）

	// 如果沒有，轉址到登入頁面

	// 如果有，繼續顯示網頁內容

?>

<!DOCTYPE html>
<html>
<head>
	<title>Message Board</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<br><br><br><br>
<div class="container">
	<h3 class="text-center">會員留言板</h3>
	<hr>
	<?php
		// 讀取是否有留言

			// 如果有，開始逐一列出留言內容

		// 如果沒有，顯示「沒有任何留言」的訊息
		echo "<p class=\"text-center\">沒有任何訊息！</p>"

	?>

	<!-- 以下是一篇留言應該顯示的內容範本 -->
	<div class="panel panel-default">
		<div class="panel-heading">[留言者姓名]<span class="pull-right">[日期] <a href="msg-del.php?id=[這篇留言的ID]" class="btn btn-danger btn-xs">DELETE</a></span></div>
		<div class="panel-body">[留言內容]</div>
	</div>
	<!-- 以上是一篇留言應該顯示的內容範本 -->

	<hr>
	<p class="pull-right">以 [登入者的姓名] 的身份留言</p>
	<h4>新增留言</h4>
	<form action="msg-add.php" method="post">
		<textarea name="msg" class="form-control"></textarea>
		<br>
		<input type="submit" name="submit" value="送出" class="btn btn-primary btn-sm pull-right">
	</form>
</div>

</body>
</html>