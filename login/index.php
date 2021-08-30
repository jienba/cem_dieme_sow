<?php
// require_once  '../asset/operations.php';
 ?>
<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="../css/styleLogin.css">
            <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">
            <title>Login</title>
            <meta charset="utf-8">
        </head>
        <body>
            <span class="app"><h1 >CEM Samba Ndiémé Sow</h1></span>
             <div class="login-box">
                 <form method="post" action="../asset/operations.php">
                 <h2>Connexion</h2>
                 <div class="text-box">
                     <span class="fa fa-user fa-2x "></span>
                     <input type="text" name="pseudo" placeholder=" Pseudo">
                 </div>
                 <div class="text-box">
                     <span class="fa fa-lock fa-2x"></span>
                     <input type="password" name="password" placeholder="Mot de passe">
                 </div>
                 <input style="cursor:pointer;" name="connexion" class="bton" type="submit" value="Se connecter">
                 </form>

            </div>


        </body>
    </html>
