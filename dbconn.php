<?php
    $connect = mysql_connect("localhost","shinhong","shinhong123");
    
    mysql_select_db("shinhong",$connect);
    
    mysql_query("set names utf8");
    
?>