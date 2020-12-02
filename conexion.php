<?php 
    $con = mysql_connect("localhost", "root", "12345678");
    mysql_select_db("crud", $con);
    mysql_query("SET NAME 'utf8'");
?>