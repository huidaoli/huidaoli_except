<?php 
$id=mysql_connect("localhost","root","8748");
mysql_select_db("db_example",$id);
mysql_query("set names gb2312");/*客户端字符集设置*/
?>