<?php
    require '../Model/DB/ConnectMysql.php';
    $mysql = new CtMysqli("localhost:3306","root","zjx7532554","myblog");
    $conn = $mysql->connect();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <title></title>
  <link rel="icon" href="images/7a3925c34e1c35f2b93a2fba0a2b1c6c.jpg" type="image/x-icon"/>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/froala_editor.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/layout.css" />
  <style type="text/css" media="screen">
    #editor{
      margin: 50px 0 20px 0;
    }
    #title{
      background-color: #ffffff;
      border: 1px solid #e3e3e3;
      width: 250px;
      height:30px;
      margin-bottom: 20px;
      border-radius: 5px;
    }
    #desc{
      background-color: #ffffff;
      border: 1px solid #e3e3e3;
      width: 450px;
      height:30px;
      margin-bottom: 20px;
      border-radius: 5px;
    }
    #category{
      background-color: #ffffff;
      border: 1px solid #e3e3e3;
      width: 200px;
      height:30px;
      margin-bottom: 20px;
      border-radius: 5px;
    }
  </style>
</head>
<body>
 <?php require 'top.php';?>
  <div id="editor">
  <form method="post" action="update.php" accept-charset="utf-8" enctype="multipart/form-data">
  TITLE  <input type="text"  id="title" name="title"/><br/>
  DESCR  <input type="text" id="desc" name="desc"/><br/>
  CATEG  <input type="text" id="category" name="category"/>
    <textarea id="edit" name="edit">
      
    </textarea>

    <BUTTON type="submit">提交</BUTTON>
  </form>
  </div>
  <?php require 'bottom.php';?>
  <script src="js/libs/jquery-1.11.1.min.js"></script>
  <script src="js/froala_editor.min.js"></script>
  <!--[if lt IE 9]>
    <script src="../js/froala_editor_ie8.min.js"></script>
  <![endif]-->
  <script src="js/plugins/tables.min.js"></script>
  <script src="js/plugins/lists.min.js"></script>
  <script src="js/plugins/colors.min.js"></script>
  <script src="js/plugins/media_manager.min.js"></script>
  <script src="js/plugins/font_family.min.js"></script>
  <script src="js/plugins/font_size.min.js"></script>
  <script src="js/plugins/block_styles.min.js"></script>
  <script src="js/plugins/video.min.js"></script>

  <script>
      $(function(){
          $('#edit').editable({
          	inlineMode: false, 
          	alwaysBlank: true,
          	height:'400px'})
      });
  </script>
</body>
</html>