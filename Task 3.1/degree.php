<?php
$degree="";
 if($_SERVER["REQUEST_METHOD"] == "POST") {	
$degree=$_POST["degree"];

}
echo $degree;

?>


<html>
<head>
	
	<title></title>
</head>
<body>
	<form method="post" action="#">

	
	<fieldset>
		<legend>Degree</legend>
		<input type="checkbox" name="degree" value="SSC">SSC
						<input type="checkbox" name="degree" value="HSC">HSC 
						<input type="checkbox" name="degree" value="BSc">BSc
						<input type="checkbox" name="degree" value="MSc">MSc

		</fieldset>
		<table>
			<tr>
				<td> <input type="submit" name="submit" value="submit"> </td>

			</tr>
		</table>
		</form>
						


</body>
</html>