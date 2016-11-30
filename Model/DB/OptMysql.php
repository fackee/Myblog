<?php
/**
 * @Author: anchen
 * @Date:   2016-09-24 11:09:21
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-09-24 11:24:17
 */
require_once 'ConnectMysql.php';
class OptDb{
    private $conn;
    function __construct($conn){
        $this->conn = $conn;
    }

    function insertDb($sql){
        mysqli_query($this->conn,$sql);
    }

    function deletDb($sql){
        mysqli_query($this->conn,$sql);
    }

    function updateDb($sql){
        mysqli_query($this->conn,$sql);
    }

    function selectDb($sql){
        return mysqli_query($this->conn,$sql);
    }
}
$conn = new CtMysqli("localhost:3308","root","","sc");
$db = new OptDb($conn->connect());



