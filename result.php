<?php
	$month=$_GET["month"];
	if($month=="January"){
		echo "January";
		echo "<br>";
		echo "<img src=http://www.xn--2017-853c378rghq.jp/wp-content/uploads/20160107_1642250.jpg>";
	}elseif ($month=="February"){
		echo "February";
		echo "<br>";
		echo "<img src=http://miyakonojo.tv/kanko/files/2014/01/140121-140121-2x503.jpg>";
	}elseif ($month=="March"){
		echo "March";
		echo "<br>";
		echo "<img src=http://www.misaki.rdy.jp/illust/kisetu/spring/title/sozai/3x503.jpg>";
	}elseif ($month=="April") {
		echo "April";
		echo "<br>";
		echo "<img src=http://blog-imgs-90.fc2.com/s/i/z/sizuko/20160331200356e70.png>";
	}elseif ($month=="May") {
		echo "May";
		echo "<br>";
		echo "<img src=http://komae-kosodate.net/article/2016042100057/files/5.png>";
	}elseif ($month=="June") {
		echo "June";
		echo "<br>";
		echo "<img src=https://4.bp.blogspot.com/-1aOHFP2Q-Mw/VWBvYEK06ZI/AAAAAAAABKM/BKv3-u0p-WE/s1600/%25EF%25BC%2596%25E6%259C%2588.png>";
	}elseif ($month=="July") {
		echo "July";
		echo "<br>";
		echo "<img src=http://8.blog.xuite.net/8/0/6/3/15556560/blog_3358658/txt/86946561/5.jpg>";
	}elseif ($month=="August") {
		echo "August";
		echo "<br>";
		echo "<img src=http://usmamaline.com/data/upload/2014/0417/17/534fa196ac423.jpg>";
	}elseif ($month=="September") {
		echo "September";
		echo "<br>";
		echo "<img src=http://usmamaline.com/data/upload/2014/0417/17/534fa1b92ddbe.jpg>";
	}elseif ($month=="October") {
		echo "October";
		echo "<br>";
		echo "<img src=http://www.reika-clinic.info/wp-content/uploads/2016/10/10x30320202010gatu.jpg>";
	}elseif ($month=="November") {
		echo "November";
		echo "<br>";
		echo "<img src=http://www.matsumoto-dental.biz/blog/images/11x303.jpg>";
	}elseif ($month=="December") {
		echo "December";
		echo "<br>";
		echo "<img src=http://www.ones-e.com/12x703.jpg>";
	}


	echo "<br>";
	echo "<br>";
	$changed=strtotime("+8 hours");
	echo date("現在是Y年F d l G時i分s秒",$changed);
	echo "<br>";
	$now=$changed;
	$end=mktime(0,0,0,12,31,2017);
	$time=$end-$now;
	$show1=intval($time%60);
	$show2=intval(($time/60)%60);
	$show3=intval(($time/60/60)%24);
	$show4=intval($time/60/60/24);
	echo "距離世界末日2017/12/31 24:00還有".$show4."日".$show3."時".$show2."分".$show1."秒";

?>