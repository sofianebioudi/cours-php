<?php
    function connect () {
        if ($bdd = mysqli_connect ('172.16.205.104','sio','slam','ordinateur')) {
            echo 'Connexion Reussie'
        }
        else(
            echo 'Erreur'
        )
    }
?>