<?php
    
    function getUsername($mail, $password){
        $dbh = @new mysqli('mysql:host=bukaf1l2mfemb1zjar5b-mysql.services.clever-cloud.com', "ujxbfb6zhhqfxg8r", "l4Az1c80tR4DlxaVwcCg", "bukaf1l2mfemb1zjar5b");

        if ($dbh->connect_error) {
            die("Connection failed: " . $dbh->connect_error);
        }

        $query = "SELECT NomUser, PrenomUser FROM USERS WHERE AdresseMailUser = '" . $mail ."' AND MDPUser = '". $password ."';";
        $result = $dbh->query($query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<script>window.location.href = \"../index.php\";</script>";
                return true;
            }
        } else {
            echo "0 results";
            return false;
        }
        $conn->close();
    }

?>