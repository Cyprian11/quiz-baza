<!DOCTYPE html>
<html>
    <head>
    
    
    
    
    </head>
    <body>
    <?php
     print_r($_POST);
    $wynik=0;
     foreach($_POST as $key=>$value){
        echo"$key $value";
        $wynik=$wynik + $value;
     }
    ?>
    
    </body>
</html>