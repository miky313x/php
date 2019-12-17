<?php

session_start();
?>
<!DOCTYPE html>
<html>
<title>cipollini michele</title>
<body>
<p>

<?php 
if ($_SESSION["nome"] == $_POST["nome"] and $_SESSION["pass"] == $_POST["password"] ) {
    echo "ciao michele<br>BENVENUTO!";
}else {
    echo "login fallito!!";
}?> 

</p>
</body>
</html>.