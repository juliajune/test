<?php
  function connect(
   $host="localhost",
   $user="root",
   $pass="654321",
   $dbname="10597")
  {
  	mysql_connect($host, $user, $pass) or die("Connection error");
  	mysql_select_db($dbname) or die ("Select db error");
  	mysql_query("et names 'utf8'");
    

  }

?>