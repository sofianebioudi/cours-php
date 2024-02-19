<?php  
            if($bdd = mysqli_connect('172.16.201.103','sio','slam','Ordinateur')){
                echo 'Test Reussi';
            } 
            else{
                echo 'Erreur';
            }    
?>