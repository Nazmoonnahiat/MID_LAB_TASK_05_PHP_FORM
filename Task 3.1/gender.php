<?php
$gender="";
 if($_SERVER["REQUEST_METHOD"] == "POST") {	
$gender=$_POST["gender"];

}
echo $gender;

?>

<html>
<head>

	<title></title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Gender</legend>
		<br>

		<input type="radio" name="gender" value="Male"> Male
		<input type="radio" name="gender" value="Female"> Female
		<input type="radio" name="gender" value="other"> Other

	</fieldset>
	<input type="submit" name="submit" value="submit"/> <br>

 


 </form>
</body>
</html>