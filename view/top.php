<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/layout.css" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<title></title>
	</head>
	<script>
		$(document).ready(function() {
			$("#menu").click(function() {
				var flag = $("div.nav").css("display");
				var menupos = $("#menu").css("top");
				flag == "none" ? $("div.nav").slideDown(500) : $("div.nav").slideUp(400);
				menupos == "-4px" ? $("#menu").css("top", "54px") : $("#menu").css("top", "-4px")
			});

			$("#show").mouseover(function() {
				$("img.weibo").fadeIn(500);
				$("img.weibo").rotate(40);
			});
			$("#show").mouseout(function() {
				$("img.weibo").fadeOut(500);
			});
		});
	</script>

	<body>
		<img src="images/menu.png" id="menu" />
		<div class="nav">
			<ul class="navUl clr">
				<li class="navLi">
					<a href="#">乱写</a>
				</li>
				<li class="navLi">
					<a href="#">乱玩</a>
				</li>
				<li class="navLi">
					<a href="#">乱走</a>
				</li>
				<li class="navLi">
					<a href="#">乱想</a>
				</li>
			</ul>
		</div>
		<div class="header clr">
			<div class="home">
				<a href="main.php"><img src="images/599616552f00501e6b01bd302f3aab64.gif" alt="home" /></a>
				<h1>SZ</h1>
			</div>
		</div>