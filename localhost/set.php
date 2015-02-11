<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset =utf-8"/>
<title>Страница сайта</title>
</head>


<body>
<?php

echo $_GET["a"];
echo "<br/>";
echo $_GET["b"];"<br/>";
 $_GET["c"] = $_GET["a"] + $_GET["b"];"<br/>";
 echo "<br/>";
 echo $_GET["c"];


?>

</body>
</html>