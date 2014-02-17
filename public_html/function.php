<?php
    require_once 'C:\wamp\www\UI\config.php';
    $db_conn = $db_conn;
    

    

    
    
    
   
    //Fetching data to materials DDL
    function ddl_query(){
        global $db_conn;           
        $query = 'SELECT * 
                  FROM admin_prices';
                      
            $ddl_data_query = mysqli_query($db_conn,$query);
            
            while ($record = mysqli_fetch_array($ddl_data_query)) {
                echo '<option value="' . $record['mat_selected'] . '">' . $record['mat_selected'] . '</option>';
            } 
    }
    

?>