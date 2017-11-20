


<html>
<body background="heart.jpg">
<form action="" method="post"><br><br><br>
<h1><center>Love Percentage Calculator</center></h1><br>
<h2><marquee name="WELCOME" align="left" color="blue">WELCOME</marquee></h2>
<center><h4>Enter Boyname</h4> <input type="text" name="boyname" required></center><br>
<center><h4>Enter Girlname</h4> <input type="text" name="girlname" required></center><br><br>
<center><h4>Calculate Love Percentage</h4> <input type="submit" name="sub" value="Click">

</center>
</form>
</body>
</html>

	
<?php
if(isset($_POST['sub']))
{
	$boy=$_POST['boyname'];
	$girl=$_POST['girlname'];
	
	$rand=rand(60,100); 
	
  echo $boy.'+'.$girl.'='.$rand.'%';

}