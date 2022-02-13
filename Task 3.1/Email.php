<?php
$email="";
 if($_SERVER["REQUEST_METHOD"] == "POST") {	
$email=$_POST["email"];

}
echo $email;

?>
<html>
<head>

	<title></title>
</head>
<body>
	<form method="post" action="#">
	 Email:<br>
	 <input type="text" name="email" value="<?=$email?>"><br>
		<input type="submit" name="submit" value="submit"/> <br>


	</form>

</body>
</html>



