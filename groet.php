<!DOCTYPE html>
<html>

<body>

    <?php
    
        echo "Hallo gebruiker!" ;
    
    ?>
    
    <br>
    <br>
    
    <form method="post">

        <label for="naam">Wat is je naam?</label>
        <input type="text" name="naam" required><br>

        <input type="submit" value="verzend" name="groet">


    </form>


    <?php
        if(isset($_POST['naam']))
        {
            echo "Hallo, " . $_POST['naam'];
        }

 ?>




</body>









</html>
