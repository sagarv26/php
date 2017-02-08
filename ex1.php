
<!doctype html>
<html>
<body>


<h1>Area of the square</h1>

<form method="post" action="<?php echo $SERVER['php_self'];?>">
<fieldset>
<legend><b>Square</b></legend><br>
<label for="side">Side of the Square:</label>
<input type="text" id="side" name="side"><br><br><br>
<input type="submit" value="Enter" name="submit">
</fieldset>
</form>

</body>
</html>

<br>
<br>
<br>


<?php
$side=$_POST['side'];

$area=$side*$side;
$perimeter=4*$side;
$diagonal=sqrt(2)*$side;

if(count($_POST) > 0)
{
	echo 'Area of the Square: '.$area. "<br />";
	echo 'Perimeter of the Square: '.$perimeter ."<br />";
	echo 'Diagonal of the Square: '.$diagonal ."<br />";
}

?>