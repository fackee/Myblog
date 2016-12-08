<?php
    $result = $conn->query("select distinct category from articles");
    $data = $result->fetch_all();
    $countarr = array();
    foreach ($data as $va) {
       $countsql = "select count(*) from articles where category = '{$va[0]}'";
       $res = $conn->query($countsql);
       $tmp = $res->fetch_assoc();
       $countarr[$va[0]] = $tmp['count(*)'];
    }
?>
		<div class="category">
			<div class="cmain">
				<ul class="atcUl">
					<li class="atcLi">Article Category</li>
					<?php foreach($data as $v) :?>
                    <li class="atcLi"><a href="<?php echo "category.php?cate=".$v[0] ;?>"><?php echo $v[0];?></a><?php echo "(".$countarr[$v[0]].")"?></li>
                	<?php endforeach ;?>
				</ul>
				<ul class="elseUl">
					<li class="elseLi">Links</li>
					<li class="elseLi">
						<a href="#">github</a>
					</li>
					<li class="elseLi" id="show">weibo</li>
					<li class="elseLi">weixin</li>
				</ul>
				<img src="images/1480519208.png" class="weibo"/>
			</div>
		</div>
		<div class="cyrt">
			Copyright xs© 2016-10-10
		</div>
	</body>
</html>
<?php
$conn->close();
?>