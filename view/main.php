<?php
    require '../Model/DB/ConnectMysql.php';
    $mysql = new CtMysqli("localhost:3306","root","zjx7532554","myblog");
    $conn = $mysql->connect();
    $result = $conn->query("select * from articles order by time desc");
    $data = $result->fetch_all();
    $i=0;
?>
	<?php //var_dump($data);?>
    <?php require 'top.php';?>
    <div class="wrap">
		<div class="content">
    <?php foreach ($data as $value):?>
    <?php if($value[0]%2==0):?>
    	<div class="timeline-left">
					<div class="card-left">
						<h3><a href="content.php?index=<?=$value[0]?>"><?=$value[1]?></a></h3>
						<span>xiaozhu / code /	<?=$value[3]?></span>
						<p><?=$value[5]?>
							<a href="content.php?index=<?=$value[0]?>">More...</a>
						</p>
						<div class="tag clr">
							<ul>
							<?php $tagArr = explode("，",$value[6]);?>
							<?php foreach($tagArr as $tag):?>
								<li><?=$tag?></li>
							<?php endforeach;?>
							</ul>
						</div>
					</div>
					<div class="forword-right"></div>
					<?php if($value[4]=="web"):?>
						<img src="images/web.jpg" />
					<?php else:?>
						<img src="images/android.png" />
					<?php endif;?>	
				</div>
   	<?php else:?>
   		<div class="timeline-right">
					<div class="card-right">
						<h3><a href="content.php?index=<?=$value[0]?>"><?=$value[1]?></a></h3>
						<span>xiaozhu / code /	<?=$value[3]?></span>
						<p><?=$value[5]?>
							<a href="content.php?index=<?=$value[0]?>">More...</a>
						</p>
						<div class="tag clr">
							<ul>
							<?php $tagArr = explode("，",$value[6]);?>
							<?php foreach($tagArr as $tag):?>
								<li><?=$tag?></li>
							<?php endforeach;?>
							</ul>
						</div>
					</div>
					<div class="forword-left"></div>
					<?php if($value[4]=="web"):?>
						<img src="images/web.jpg" />
					<?php else:?>
						<img src="images/android.png" />
					<?php endif;?>
				</div>
   	<?php endif;?>
    <?php endforeach;?>
    	</div>
    </div>
    <?php require 'bottom.php';?>
    </body>
</html>