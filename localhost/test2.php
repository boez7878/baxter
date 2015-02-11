<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset =utf-8"/>
<title>Страница сайта</title>
</head>
<body>
<?php
$name = $_POST['name'];
$lastname =$_POST['lastname'];

echo  "Имя $name и Фамилия $lastname";
echo "<br/>";
echo "Ваш IP адрес: ".$_SERVER['SERVER_NAME'];
echo "<br/>";
echo "Ваш браузер и операционная система: ".$_SERVER['HTTP_USER_AGENT'];


?>


</body>
</html>