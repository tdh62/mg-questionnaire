<?php
/*********************************************************
*本程序用于毛概课程问卷
*作者：tdh62
*
*本文件用于：
*1.问卷引导显示
*2.第一个第二个问题的表单
*///*******************************************************
?>
<html>
<form action="index.php" method="post" target="_self">
	<h3>关于大学生毕业后就业心理调查</h3>
  <p>这里有并不多的几个问题，希望能得到你的真实想法</p>
  <hr />
  <p>1.您的性别是</p>
  <p>
      <label>
        <input type="radio" name="ans1" value="1" id="ans1_0">
        A.男</label>
      <br>
      <label>
        <input type="radio" name="ans1" value="2" id="ans1_1">
        B.女</label>
      <br>
  </p>
  <p>
  2.你现在对于毕业后的打算是怎样的?
  </p>
  <p>
    <label>
      <input type="radio" name="ans2" value="1" id="ans2_0">
      A.考研</label>
    <br>
    <label>
      <input type="radio" name="ans2" value="2" id="ans2_1">
      B.就业</label>
    <br>
    <label>
      <input type="radio" name="ans2" value="3" id="ans2_2">
      C.创业</label>
    <br>
  </p>
   <input class="btn btn-primary" name="submit" value="继续" type="submit">
</form>
</html>