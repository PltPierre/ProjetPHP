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
    
    ?>

    <div class="bgimg"></div>
    <div class="loginForm">
        <form action="" class="login">
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
        <p id="result">test</p>
    </div>
</body>
</html>