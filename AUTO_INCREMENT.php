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

	// CREATE TABLE 必须在mysql_query()函数里执行才有用
	// CREATE TABLE 创建一个数据库名叫persons

	// CREATE TABLE table_name
	// (
	// column_name1 data_type,
	// column_name2 data_type,
	// column_name3 data_type,
	// .......
	// )

	// 在创建表格之前必须要选择数据库
	// 通过 mysql_select_db() 函数选取数据库。
	mysql_select_db('my_db', $con);
	// 主键字段通常是 ID 号，且通常使用 AUTO_INCREMENT 设置。
	// 要确保主键字段不为空，我们必须向该字段添加 NOT NULL 设置。
	$sql = "CREATED TABLE persons
	(
		personID int NOT NULL AUTO_INCREMENT;
		PRIMARY KEY(personID);
		FirstName varchar(15);
		LastName varchar(15);
		Age int
	)";
	mysql_query($sql, $con);

	mysql_close($con);
?>