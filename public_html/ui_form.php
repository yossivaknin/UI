    <?php
    require_once 'C:\wamp\www\UI\config.php';
    require 'C:\wamp\www\UI\public_html\function.php'; 
    ?>
<html>
    <head>

    </head>
    <body>
    <form method="post" action="typ.php">
        <fieldset>
            <legend>Personal Data</legend>
            <label>Name: </label><input type="text" name="name" placeholder="Example: David" /><br />
            <label>Family Name: </label><input type="text" name="fname" placeholder="Example: Blum" /><br />
            <label>Email: </label><input type="text" name="email" placeholder="Example: user@user.com" /><br />
            <label>Tel: </label><input type="tel" name="tel" placeholder="+972456434433" />
        </fieldset>
        <fieldset>
            <legend>Get a Quate!</legend>
 
            <input type="radio" name="inchorcm" value="cm"> Centimeter 
            <input type="radio" name="inchorcm" value="inch"> Inches <br />
            <label>Height </label><input type="text" name="height" /><br />
            <label>Width: </label><input type="text" name="width" /><br />
            <label>Thickness: </label><input type="text" name="thick" /><br />
            <label>Material: </label>

            <select name="material"> 
               <option value="">--- Select ---</option>
                       <?php ddl_query(); ?>       
               
            </select>
            
            <br />
            <label>Decoration: </label><input type="text" name="decoration" /><br />
        </fieldset>
        <input type="submit" name="ui_submit" />
    </form>
    </body>
</html>