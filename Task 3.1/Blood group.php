<?php
$bloodGroup="";
 if($_SERVER["REQUEST_METHOD"] == "POST") {	
$bloodGroup=$_POST["bloodGroup"];

}
echo $bloodGroup;
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
		BLOOD GROUP:
		<select name="bloodGroup" value="<?=$bloodGroup?>">
							<option >A+</option>
							<option >0+</option>
							<option value="B+">B+</option>
						</select><hr> </hr><br>
						<input type="submit" name="submit" value="submit"/> <br>


</body>
</html>