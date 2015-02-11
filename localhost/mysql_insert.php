<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset =utf-8"/>
<title>Страница сайта</title>
</head>
<body>
<?php
if(isset($_POST['name']))
{
  $name= $_POST['name'];
}

if(isset($_POST['lastname']))
{
  $lastname=$_POST['lastname'];
}

if(isset($_POST['post']))
{
  $post=$_POST['post'];
}

$db = mysql_connect("localhost","Sergey","12345");
mysql_select_db("firstbd",$db);

$result = mysql_query("INSERT INTO firma(name,lastname,post)VALUES('$name','$lastname','$post')");

if($result =='true')
{
  echo " Информация в базу занесена успешна.";
}
else 

{
    echo "Информация  в базу не занесена.";
}

?>
</body>
</html>

