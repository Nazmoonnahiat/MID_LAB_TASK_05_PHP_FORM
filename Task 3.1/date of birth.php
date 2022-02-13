<?php
$dateOfBirth="";
 if($_SERVER["REQUEST_METHOD"] == "POST") {	
$dateOfBirth=$_POST["dateOfBirth"];

}
echo $dateOfBirth;

?>

<html>

<head>

	
	<title></title>
</head>
<body>
	<form method="post" action="#">

	<fieldset>
		<legend><b>Date Of Birth</legend>

			
			<input type="date" name="dateOfBirth" value="<?=$dateOfBirth?>"><br>
			<input type="submit" name="submit" value="submit"/> <br>


		 




	</fieldset>
		</form>


</body>
</html>