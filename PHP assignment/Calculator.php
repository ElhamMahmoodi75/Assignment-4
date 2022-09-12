<!DOCTYPE html>
<html>
<body>
<h1>Calculator for basecamp</h1><br>
Enter your First Number:<input name="n1" value=""><br>
Enter Your Second Number:<input name="n2" value=""><br>
<input type="submit" name="sub" value="ُSum">
<input type="submit" name="sub" value="subtraction">
<input type="submit" name="sub" value="multiplication">
<input type="submit" name="sub" value="Division"><br>
<br>Result: <input type='text' value="<?php echo $ans; ?>"><br>
</form>
<?php
if(isset($_POST['sub'])){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="ُSum")
		$ans=$num1+$num2;
	else if($oprnd=="subtraction")
		$ans=$num1-$num2;
	else if($oprnd=="multiplication")
		$ans=$num1*$num2;
	else if($oprnd=="Division")
		$ans=$num1/$num2; }
?>
</body>
</html>
