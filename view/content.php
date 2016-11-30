<?php
    require '../Model/DB/ConnectMysql.php';
    $mysql = new CtMysqli("localhost:3306","root","zjx7532554","myblog");
    $conn = $mysql->connect();
    $index = $_GET['index'];
    $sql = "select * from articles where id = '{$index}'";
    $result = $conn->query($sql);
    $data = $result->fetch_all();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/layout.css" />
    </head>
    <style>
    .maincontent{
        width:1200px;
        background: #FFFFFF;
        margin:50px auto;
        box-shadow: rgba(0, 0, 0, 0.2)1px 1px 2px 1px;
        border-radius: 3px;
        padding: 10px 10px 10px 10px;
    }
    </style>
    <body>
    <?php require 'top.php';?>
    <div class="maincontent">
        <?php 
        echo $data[0][2];?>
    </div>
    <?php require 'bottom.php';?>
    </body>
</html>