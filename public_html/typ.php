
<?php
    include 'C:\wamp\www\UI\public_html\ui_form.php';

    
    if(isset($_POST['ui_submit'])){
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $inchorcm = $_POST['inchorcm'];
        $height = $_POST['height'];
        $width = $_POST['width'];
        $thick = $_POST['thick'];
        $material = $_POST['material'];
        $decoration = $_POST['decoration'];
        
        $push_data= "INSERT INTO first_level_details_user(name, fname, email, tel, inchorcm, height, width, thick, material_type, decoration) VALUES('$name', '$fname', '$email', '$tel', '$inchorcm', '$height', '$width', '$thick', '$material', '$decoration')";
        mysqli_query($db_conn,$push_data);
        
        header("location: config.php");
        exit;   
        }
 
    ?>
            
    