<?PHP

	// 连接一个数据库mysql_connect('服务器域名', '登录服务器的用户名', '密码')

	$con = mysql_connect('localhost', 'peter', '111');
	if (!$con) {
		die('不能连接' . mysql_error());
	}
	else {
		// 该干嘛干嘛
	}
	mysql_close($con);
?>