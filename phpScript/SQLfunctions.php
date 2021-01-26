<?php
    
    function getUsername($mail, $password){
        session_start();
        try{
            $bdd = new PDO('mysql:host=bukaf1l2mfemb1zjar5b-mysql.services.clever-cloud.com;dbname=bukaf1l2mfemb1zjar5b;charset=utf8', 'ujxbfb6zhhqfxg8r', 'l4Az1c80tR4DlxaVwcCg');
        }
        catch(Exeption $e){
            die('Erreur : ' . $e->getMessage());
        }

        $query = "SELECT NomUser, PrenomUser FROM USERS WHERE AdresseMailUser = '" . $mail ."' AND MDPUser = '". $password ."';";
        $result = $bdd->query($query) or die(print_r($bdd->errorInfo()));

        if($result->rowCount() > 0){
            while($row = $result->fetch()) {
                $_SESSION["nomUser"] = $row['NomUser'];
                $_SESSION["prenomUser"] = $row['PrenomUser'];
                return true;
            }
        }
        else {
            return false;
        }
        $bdd->closeCursor();
    }

?>