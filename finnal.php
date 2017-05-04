<?php
/*********************************************************
*本程序用于毛概课程问卷
*作者：谭道桓
*
*本文件用于：
*1.接收最终问卷结果
*2.核对结果并保存到数据库中
*3.显示填写完成信息
*///*******************************************************
?>
<?php
	include "system/check.php";//处理数据库session
  include "css/index.php";//处理css
  include "js/index.php";//处理javascript
  
  //处理POST收到的数据
  if(isset($_POST['ans13']))
    $_SESSION['ans13']=$_POST['ans13']; 
  //存入数据库
  //echo "UPDATE biao SET ans1=".$_SESSION['ans1'].",ans2=".$_SESSION['ans2'].",ans3=".$_SESSION['ans3'].",ans4=".$_SESSION['ans4'].",ans5=".$_SESSION['ans5'].",ans6=".$_SESSION['ans6'].",ans7=".$_SESSION['ans7'].",ans8=".$_SESSION['ans8'].",ans9=".$_SESSION['ans9'].",ans10=".$_SESSION['ans10'].",ans11=".$_SESSION['ans11'].",ans12=".$_SESSION['ans12'].",ans13='".$_SESSION['ans13']."' WHERE id=".$_SESSION['id'].";";
  $sql=mysqli_query($con,"UPDATE biao SET ans1=".$_SESSION['ans1'].",ans2=".$_SESSION['ans2'].",ans3=".$_SESSION['ans3'].",ans4=".$_SESSION['ans4'].",ans5=".$_SESSION['ans5'].",ans6=".$_SESSION['ans6'].",ans7=".$_SESSION['ans7'].",ans8=".$_SESSION['ans8'].",ans9=".$_SESSION['ans9'].",ans10=".$_SESSION['ans10'].",ans11=".$_SESSION['ans11'].",ans12=".$_SESSION['ans12'].",ans13='".$_SESSION['ans13']."' WHERE id=".$_SESSION['id'].";");
  
  //显示填写成功
  echo "<center>";
  include "success.php";
  echo "</center>";
  include "system/fooster.php";
?>