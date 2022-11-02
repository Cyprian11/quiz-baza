<!DOCTYPE html>
<html>
    <head>
    
    
    
    
    </head>
    <body>
    <form method="POST" action="wynik.php">
    <?php
    
        $con = new mysqli("127.0.0.1","root","","quiz");
        echo"Witaj to twój quiz!".'</br></br>';
        $res=$con->query("SELECT * FROM questions");
         
        $rows=$res->fetch_all(MYSQLI_ASSOC);



        for ($i=0;$i<count($rows);$i++){
            
            echo '<b>'.$rows[$i]["content"].'</b>'.'</br>';
            $res_2=$con->query("SELECT * FROM answers where questions_id = ".$rows[$i]['id']);
            $rows_2=$res_2->fetch_all(MYSQLI_ASSOC);
            for($j=0;$j<count($rows_2);$j++){
                echo '<input type="checkbox">'.$rows_2[$j]["content"].'</br>';
            }
        }
        echo '<input type="submit"/>';
        echo '</form>';
        
        // print_r($rows);
        

        // <form method="POST" action="wynik.php">
        // <input type="checkbox" name="odp1">
        // <input type submit>
        // </form>
        
    ?>
     
    </form>
    </body>
</html>