<?php
/*********************************************************
*本程序用于毛概课程问卷
*作者：tdh62
*
*本文件用于：
*1.检查并连接数据库
*2.session的初始化
*
*///*******************************************************
?>
<?php
	include "config.php";
	//连接数据库
	$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	if(!$con){
		die("数据库连接失败");
	}
	session_start();
	//若无已经设定的ID，从数据库中查询已经存在的最后一个ID并+1设置为当前ID并将其存回数据库
	if(!isset($_SESSION['id'])){
		$sql=mysqli_query($con,"select lastid from setting");
		$iid=mysqli_fetch_row($sql);
		$_SESSION['id']=$iid[0]+1;
		//print_r($_SESSION['id']);
		mysqli_query($con,"update setting set lastid=$iid[0]+1");
    //数据库中创建对应数值
    $userip=$_SERVER["REMOTE_ADDR"];
    $useragent=$_SERVER["HTTP_USER_AGENT"];
    //echo $userip;
    //echo $useragent;
    mysqli_query($con,"INSERT INTO biao VALUE($iid[0]+1,'$userip','$useragent',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)");
    //初始化session里的数值
    $_SESSION['ans1']=0;
    $_SESSION['ans2']=0;
    $_SESSION['ans3']=0;
    $_SESSION['ans4']=0;
    $_SESSION['ans5']=0;
    $_SESSION['ans6']=0;
    $_SESSION['ans7']=0;
    $_SESSION['ans8']=0;
    $_SESSION['ans9']=0;
    $_SESSION['ans10']=0;
    $_SESSION['ans11']=0;
    $_SESSION['ans12']=0;
    $_SESSION['ans13']=0;
	}else{
    if(!isset($_SESSION['ans1'])){
      session_destory();
      die("数据异常，缓存数据已清空，请尝试刷新页面，若问题反复出现，请联系我们");
    }
  }
?>