<!DOCTYPE html>
<html>
s
<style>
    #groet {
        font-family: cursive;
    }
</style>

<body>
    <p id="groet">Hallo, wat is jouw naam?</p>

    <form method="post">

        <input type="text" name="naam" required>
        <input type="submit" value="verzend" name="groet">


    </form>


    <?php
        if(isset($_POST['naam']))
        {
            echo "<br>Hallo, " . $_POST['naam'];
        }

 ?>




</body>









</html>
