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
<div class="foot">
            <div class="fcontent">
            <div class="atccategory">
                <h6>文章分类</h6>
                <ul>
                <?php foreach($data as $v) :?>
                    <li><a href="<?php echo "category.php?cate=".$v[0] ;?>"><?php echo $v[0];?></a><?php echo "(".$countarr[$v[0]].")"?></li>
                <?php endforeach ;?>
                </ul>
            </div>
            <div class="contact">
                <h6>杂杂杂杂</h6>
                <ul>
                    <li><a href="#">github</a></li>
                    <li><a href="#">weibo</a></li>
                    <li><a href="#">stackoverflow</a></li>
                    <li><a href="#">qq</a></li>
                    <li><a href="#">weixn</a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="cprt"><p>Copyright ZJX© 2016 - 10 - 10</p>
</div>
<?php
$conn->close();
?>