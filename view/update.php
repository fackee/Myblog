<?php
/**
 * @Author: anchen
 * @Date:   2016-10-08 16:38:08
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-10-19 14:32:22
 */
require '../Model/DB/ConnectMysql.php';
$mysql = new CtMysqli("localhost:3306","root","zjx7532554","myblog");
$conn = $mysql->connect();
$title = $_POST['title'];
$desc = $_POST['desc'];
$content = $_POST['edit'];
$category = $_POST['category'];
$time = date('y-m-d',time());
$sql = "insert into articles(title,content,time,category,descrption) values('{$title}','{$content}','{$time}','{$category}','{$desc}')";
$result = $conn->query($sql);
if($result){
    echo "<script>
    alert('发表成功');
    history.go(-1);
    </script>";
}else{
    echo mysqli_error($conn);
}
$conn->close();
