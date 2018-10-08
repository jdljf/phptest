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

	// 给表格进行操作之前必须要选择数据库
	mysql_select_db('my_db', $con);
	// 位数据库创建表格Persons并添加列
	$sql = "CREATED TABLE Persons
	(
		personID int NOT NULL AUTO_INCREMENT;
		PRIMARY KEY(personID);
		FirstName varchar(15);
		LastName varchar(15);
		Age int
	)";
	mysql_query($sql, $con);
	// 给Persons表格添加数据
	$data = "INSERT INTO Persons (FirstName, LastName, Age)
	VALUES ('Peter', 'Griffin', '35')";

	mysql_query($data);

	mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
	VALUES ('Glenn', 'Quagmire', '33')");
	// 从表格中删除数据
	// DELETE 表格名字	选择表格名字
	// WHERE 列 = 值	选择某列拥有某值得那行进行删除
	mysql_query("DELETE FROM Persons
	WHERE FirstName = 'Peter'");

	mysql_close($con);
?>