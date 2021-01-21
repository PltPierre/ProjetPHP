<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Document</title>
</head>
<body>
    <?php   
    
        session_start();
        $_SESSION["isConnected"] = false
    ?>

    <div class="bgimg"></div>
    <div class="loginForm">
        <form action="phpScript/connection.php" method="POST" class="login">
            <label>Mail</label>
            <br>
            <input type="text" name="mail" id="mail" class="loginInput">
            <br>
            <label>Mot de passe</label>
            <br>
            <input type="password" name="password" id="password" class="loginInput">
            <br>
            <br>
            <input type="submit" value="Valider" class="submitInput">
        </form>
        <?php
            if($_SESSION['isConnected']){
                echo '<p id="result">ça marche</p>';
            }
            else{
                echo '<p id="result">paco ou marche pas</p>';
            }
        ?>
    </div>
</body>
</html>