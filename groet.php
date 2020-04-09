<!DOCTYPE html>
<html>

    <head>


    </head>    


<body>
    
    
  <form method="post">
    
    <input type="text" name="naam" required>
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