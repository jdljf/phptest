<?PHP

	$con = mysql_connect('localhsot', 'peter', '111');

	if (!$con) {
		die('不能连接数据库：' . mysql_error());
	}

	if (mysql_query("CREATE DATABASE my_db", $con)){
		echo "数据库已创建";
	}
	else{
		echo "创建数据库错误: " . mysql_error();
	}

	// 给表格添加数据之前必须要选择数据库
	mysql_select_db('my_db', $con);
	
	// 创建了一个名为Persons的表
	// INSERT INTO 表格名字(列1, 列2)必须在mysql_query()函数里执行才行
	// VALUES(值1, 值2)
	mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
	VALUES ('Peter', 'Griffin', '35')");

	mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
	VALUES ('Glenn', 'Quagmire', '33')");

	mysql_close($con);
?>