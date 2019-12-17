<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>cipollini michele</title>
<body>
<p>

<?php $_SESSION["pass"] = $_POST["password1"];
$_SESSION["nome"] =  $_POST["nome1"]; 
if ( isset($_SESSION["pass"])){
	if (isset($_SESSION["nome"])){
  header("location: index.html");
exit;}}?>
</p>
</body>
</html>