<?php
    include 'C:\wamp\www\UI\config.php';
    
    //Connect to Database
    $con = NULL;
    function connect(){
            
        global $con;
        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS);
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySql: " . mysqli_connect_error();
        }
        else{
            echo "all is good";
        }
        mysqli_select_db($con,DB_NAME);
       
    }

    //Close connection to DB
     function close($con)
     {
         mysqli_close($con);
         
     }
     
     
     
    //Fetching data to materials DDL
    function ddl_query(){
        
        $ddl_data_query = mysqli_query("SELECT * FROM admin_prices");
        
        while ($record = mysqli_fetch_array($ddl_data_query)) {
            echo '<option value="' . $record['mat_selected'] . '">' . $record['mat_selected'] . '</option>';
            
        }
        
     }


?>