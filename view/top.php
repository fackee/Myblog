<div class="head" id="down">
    <div class="nav" id="navi">
    <ul>
        <li><a href="#">乱写</a></li>
        <li><a href="#">乱玩</a></li>
        <li><a href="#">乱走</a></li>
        <li><a href="#">乱想</a></li>
    </ul>
    </div>
    <a class="menu" href="#" id="dorp"><img class="dorpdown" src="images/menu.png" /></a>
    <script type="text/javascript">
    var i =0;
    document.getElementById("dorp").onclick = function(){
        if(i%2==0){
            document.getElementById("navi").style.display="block";
            document.getElementById("down").style.height="250px";
            document.getElementById("mytag").style.top = "140px";
            document.getElementById("dorp").style.top = "46px";
            i++;
        }else{
            document.getElementById("navi").style.display="none";
            document.getElementById("down").style.height="200px";
            document.getElementById("mytag").style.top = "90px";
            document.getElementById("dorp").style.top = "-4px";
            i++;
        }
        }
    </script>
    <center><a href="main.php"><img class="cir" src="images/599616552f00501e6b01bd302f3aab64.gif"/></a></center>
    <center><a href="main.php" class="myname" id="mytag">ZJX</a></center>
    <hr />
</div>