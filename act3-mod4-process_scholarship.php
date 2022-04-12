<!DOCTYPE html>
<html>
    <head>
        <title>
            Scholarship Form
        </title>
    </head>

    <body>
    <h2 style="text-align:center">Scholarship Form</h2>
    <form name="scholarship" action= "act2-mod4-process_scholarship.php" method="post">
    <p>First Name: <input type="text" name="fName" /></p>
    <p>Last Name: <input type="text" name="lName" /></p>
    <p><input type="reset" value="Clear Form" />&nbsp; &nbsp;<input type="submit" name="Submit" value="Send Form" />
    </form>


    </body>

    <body>
    <?php 
        $firstName = stripslashes($_POST['fName']);
        $lastName = stripslashes($_POST['lName']);
        echo "Thank you for filling out the scholarship form,  ".$firstName." ".$lastName . ".";
    ?>
    
</html>