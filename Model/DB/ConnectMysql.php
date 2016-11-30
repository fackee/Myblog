<?php
/**
 * @Author: anchen
 * @Date:   2016-09-24 10:09:21
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-10-08 20:49:40
 */
	class CtMysqli{
		private $servername;
		private $username;
		private $password;
		private $db;
		function __construct($servername,$username,$password,$db){
			$this->servername = $servername;
			$this->username = $username;
			$this->password = $password;
			$this->db = $db;
		}

		
		function connect(){
			$conn = mysqli_connect($this->servername,$this->username,$this->password,$this->db);
			if(!$conn){
				die("连接数据库失败".mysqli_connect_error());
			}else{
				$conn->set_charset("utf8");
				return $conn;
			}
		}
	}
?>