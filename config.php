<?php   
   define("DB_HOST", "localhost");
   define("DB_USER", "root");
   define("DB_PASS", "");
   define("DB_NAME", "pricer");
   
   $db_conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die ('Failed to connect to ' . mysqli_error());
   mysqli_select_db($db_conn,DB_NAME);
?>
