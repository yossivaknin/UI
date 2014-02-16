<?php
    include_once 'C:\wamp\www\UI\config.php';

    //Connect to Database
    function connect(){
        
        mysql_connect(DB_HOST,DB_USER,DB_PASS) or die ('Failed to connect to ' . mysql_error());
        mysql_select_db(DB_NAME);

    }

    //Close connection to DB
     function close()
     {
         mysql_close();
     }
     
     
     //Insert form data into DB 
    function insert_data(){
       global $insert_data_query;
       
       $insert_data_query="INSERT INTO first_level_details_user (name, fname, email, tel, height, width, thick, material_type,decoration)
       VALUES('$_POST[name]','$_POST[fname]','$_POST[email]','$_POST[tel]','$_POST[height]','$_POST[width]','$_POST[thick]','$_POST[material]','$_POST[decoration]')";
       
    }

     
     //Fetching data to materials DDL
     function ddl_query(){
        $ddl_data_query = mysql_query("SELECT * FROM admin_prices");
        
        while ($record = mysql_fetch_array($ddl_data_query)) {
            echo '<option value="' . $record['mat_selected'] . '">' . $record['mat_selected'] . '</option>';
        }
        
     }
?>