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
	// 从表格中更新数据
	// UPDATE 表格名字 
	// SET 列名字 = 值	赋值某列
	// WHERE 列名字 = 值	找出是哪一行对应的列
	mysql_query("UPDATE Persons SET Age = '36'
	Where FirstName = 'Peter' AND LastName = 'Griffin'");

	mysql_close($con);
?>