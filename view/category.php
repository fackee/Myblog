<?php
    require '../Model/DB/ConnectMysql.php';
    $mysql = new CtMysqli("localhost:3306","root","zjx7532554","myblog");
    $conn = $mysql->connect();
    $cate = $_GET['cate'];
    $catesql = "select * from articles where category = '{$cate}'";
    $result = $conn->query($catesql);
    $data = $result->fetch_all();
    $i=0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/layout.css" />
    </head>
    <body>
    <?php require 'top.php';?>
    <div class="main">
    <?php foreach ($data as $value):?>
    <?php if($value[0]%2==0){ ?>
    <div class="block ">
                    <div class="timeline">
                        <hr class="tlhrtop"/>
                         <?php if($value[4] == 'web'){?>
                        <img class="tlimg" src="images/web.jpg"/>
                        <?php }else if($value[4]=='android'){?>
                        <img class="tlimg" src="images/android.png"/>
                        <?php }?>
                        <hr class="tlhrbtm"/>
                    </div>
                    <div class="timeblockl">
                    <div class="content">
                        <h3><a href="<?php echo 'content.php?index='.$value[0];?>"><?php echo $value[1]?></a></h3>
                        <span><?php echo $value[3]?>/ xiaozhu / code</span>
                        <p><?php echo $value[5];?>
                            <a class="continue" href="<?php echo 'content.php?index='.$value[0];?>">继续阅读</a></p>
                        <div class="tag clr">
                            <ul>
                            <?php
                            $tags = $value[6];
                            $tarr =  array();
                            $i=0;
                            $len = strlen($tags);
                            $pos = stripos($tags,'，');
                            while(is_numeric($pos)){
                                $tarr[$i] = substr($tags,0,$pos);
                                $tags = substr($tags,$pos+3);
                                $pos = stripos($tags,'，');
                                $i++;
                            }
                            $tarr[$i] = $tags;
                            ?>
                            <?php foreach ($tarr as $val) :?>
                                <li><?php echo $val ?></li>
                            <?php endforeach ;?>
                            </ul>
                        </div>
                    </div>
                    <div class="sanjiaor"></div>
                    </div>
            </div>
        <?php }else{?>
        <div class="block ">
                    <div class="timeline">
                        <hr class="tlhrtop"/>
                         <?php if($value[4] == 'web'){?>
                        <img class="tlimg" src="images/web.jpg"/>
                        <?php }else if($value[4]=='android'){?>
                        <img class="tlimg" src="images/android.png"/>
                        <?php }?>
                        <hr class="tlhrbtm"/>
                    </div>
                    <div class="timeblockr">
                        <div class="sanjiaol"></div>
                    <div class="content">
                        <h3><a href="<?php echo 'content.php?index='.$value[0];?>"><?php echo $value[1]?></h3>
                         <span><?php echo $value[3]?>/ xiaozhu / code</span>
                           <p><?php echo $value[5];?>
                            <a class="continue" href="<?php echo 'content.php?index='.$value[0];?>">继续阅读</a></p>
                        <div class="tag clr">
                            <ul>
                                 <?php
                            $tags = $value[6];
                            $tarr =  array();
                            $i=0;
                            $len = strlen($tags);
                            $pos = stripos($tags,'，');
                            while(is_numeric($pos)){
                                $tarr[$i] = substr($tags,0,$pos);
                                $tags = substr($tags,$pos+3);
                                $pos = stripos($tags,'，');
                                $i++;
                            }
                            $tarr[$i] = $tags;
                            ?>
                            <?php foreach ($tarr as $val) :?>
                                <li><?php echo $val ?></li>
                            <?php endforeach ;?>
                            </ul>
                        </div>
                    </div>
                    
                    </div>
            </div>
        <?php }?>
    <?php endforeach;?>
    </div>
    <?php require 'bottom.php';?>
    </body>
</html>