<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_project1";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接数据库成功";
$conn->close();
