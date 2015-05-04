<?php
session_start();

if(!isset($_SESSION['count'])){
	$_SESSION['count'] = 0;
}
else{
	$_SESSION['count']++;
}
echo $_SESSION['count'];


?>
<html>
<head>
	<title>Survey Form</title>
<style>
input, label{
	display: block;
	padding: 5px;
}
label, input, textarea, option, select{
	width: 200px;
		margin: 5px;
}
</style>
</head>
<body>
<p>You came to this website</p>
<p>xx times</p>
<input type="submit" value="GoSomeWhere">
</body>
</html>