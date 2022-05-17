<!doctype html>
<html lang="zh_tw">
<head>
<meta charset="utf-8">
<title>註冊結果</title>
</head>
<body>
<h3>註冊結果</h3>
<?php
	$mobile=$_REQUEST['mobile'];
	$name=$_REQUEST['name'];
	$pw1=$_REQUEST['pw1'];
	$pw2=$_REQUEST['pw2'];
	$email=$_REQUEST['email'];
	$addr=$_REQUEST['addr'];
	$remark=$_REQUEST['remark'];
	$mysqli = new mysqli("localhost", "h568", "My^4DqPam", "h568");
	$Q="insert into auser2 values('${mobile}','${name}','${pw1}','${pw2}','${email}','${addr}','${remark}');";
	$result = $mysqli->query($Q);
	if (!$result) echo "Error! $Q ";
	$mysqli->close();
	echo '<br/><a href="index.html">註冊成功，按此離開</a>';
?>
</body>
</html>