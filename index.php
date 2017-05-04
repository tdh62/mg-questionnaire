<?php
/*********************************************************
*本程序用于毛概课程问卷
*作者：tdh62
*
*本文件用于：
*1.显示问卷内容
*2.接受中间过程post并缓存到session里
*
*///*******************************************************
?>
<?php
	include "system/check.php";//处理数据库session
  include "css/index.php";//处理css
  include "js/index.php";//处理javascript
    //处理POST收到的数据
  if(isset($_POST['ans1']))
    $_SESSION['ans1']=$_POST['ans1'];
	//echo $_SESSION['ans1'];
  if(isset($_POST['ans2']))
    $_SESSION['ans2']=$_POST['ans2'];
	//echo $_SESSION['ans2'];
  if(isset($_POST['ans3']))
    $_SESSION['ans3']=$_POST['ans3'];
  if(isset($_POST['ans4']))
    $_SESSION['ans4']=$_POST['ans4'];
  if(isset($_POST['ans5']))
    $_SESSION['ans5']=$_POST['ans5'];
  if(isset($_POST['ans6']))
    $_SESSION['ans6']=$_POST['ans6'];
  if(isset($_POST['ans7']))
    $_SESSION['ans7']=$_POST['ans7'];
  if(isset($_POST['ans8']))
    $_SESSION['ans8']=$_POST['ans8'];
  if(isset($_POST['ans9']))
    $_SESSION['ans9']=$_POST['ans9'];
  if(isset($_POST['ans10']))
    $_SESSION['ans10']=$_POST['ans10'];
  if(isset($_POST['ans11']))
    $_SESSION['ans11']=$_POST['ans11'];
  if(isset($_POST['ans12']))
    $_SESSION['ans12']=$_POST['ans12']; 
?>
<html>
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
  //判断是否填写1,2问题
  if($_SESSION['ans1']==0){
    include "question/mainpage.php";
    goto end1;
  }
  
  //已经完成1,2问题，判断转到哪一个子问卷
  if($_SESSION['ans4']==0&&$_SESSION['ans7']==0&&$_SESSION['ans8']==0){
	  if($_SESSION['ans1']!=0){
		if($_SESSION['ans2']==1){
		  include "question/kaoyan.php";
		  goto end1;
		}
		else{
		  if($_SESSION['ans2']==2){
			include "question/jiuye.php";
			goto end1;
		  }
		  else{
			include "question/chuangye.php";
			goto end1;
		  }
		}
	  }
  }
  //已经完成分类问卷，判断是否从考研区跳转至就业
  if($_SESSION['ans6']==2&&$_SESSION['ans9']==0){
	  include "question/jiuye.php";
	  goto end1;
  }
  //已经完成分类问卷，判断是否符合条件引入就业汇总问卷
  if($_SESSION['ans11']==0){
	  if($_SESSION['ans5']==1||$_SESSION['ans2']==2||$_SESSION['ans2']==3||$_SESSION['ans6']==2){
		include "question/huizong1.php";
		goto end1;
	  }
  }
  //已经完成了之前全部问卷，引入最终汇总
  include "question/huizong.php";
  //显示区结束点
  end1:
  mysqli_query($con,"UPDATE biao SET ans1=".$_SESSION['ans1'].",ans2=".$_SESSION['ans2'].",ans3=".$_SESSION['ans3'].",ans4=".$_SESSION['ans4'].",ans5=".$_SESSION['ans5'].",ans6=".$_SESSION['ans6'].",ans7=".$_SESSION['ans7'].",ans8=".$_SESSION['ans8'].",ans9=".$_SESSION['ans9'].",ans10=".$_SESSION['ans10'].",ans11=".$_SESSION['ans11'].",ans12=".$_SESSION['ans12'].",ans13='".$_SESSION['ans13']."' WHERE id=".$_SESSION['id'].";");
  include "system/fooster.php";
  

?>
</body>
</html>