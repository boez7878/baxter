<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset =utf-8"/>
<title>Страница сайта</title>
</head>
<body>
<?php
$db = mysql_connect("localhost","Sergey","12345");
mysql_select_db("firstbd",$db);

$result = mysql_query("SELECT * FROM firma ",$db);
$myrow = mysql_fetch_array($result);
do 
{
   /* echo "Сотрудник N-".$myrow['id']."<br/>";
    echo $myrow['name']."<br/>";
    echo $myrow['lastname']."<br/>";
    echo $myrow['post']."<br/>";*/
    
    printf("Сотрудник N - %s<br/>%s<br/>%s<br/>%s<br/>",$myrow['id'],$myrow['name'],$myrow['lastname'],$myrow['post']);
}
while($myrow = mysql_fetch_array($result));
?>


</body>
</html>