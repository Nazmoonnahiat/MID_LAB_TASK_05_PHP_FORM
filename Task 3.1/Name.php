<?php
$name="";
 if($_SERVER["REQUEST_METHOD"] == "POST") {	
$name=$_POST["name"];

}
echo $name;

?>
<html>
<head>

	<title></title>
</head>
<body>
	<form method="post" action="#">
	 name:<br>
	 <input type="text" name="name" value="<?=$name?>"><br>
		<input type="submit" name="submit" value="submit"/> <br>


	</form>

</body>
</html>
