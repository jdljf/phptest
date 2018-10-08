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

	// 选择数据库
	mysql_select_db('my_db', $con);
	$sql = "CREATED TABLE persons
	(
		FirstName varchar(15);
		LastName varchar(15);
		Age int
	)";
	mysql_query('my_db', $con);

	mysql_close($con);
?>