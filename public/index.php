<?php 
    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'gestion_tache_projet' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';  
    // require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'gestion_tache_projet' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'login.php';  

    // ini_set('display_error', 1);
    // ini_set('display_startup_errors',1);
    // error_reporting(E_ALL);
    // phpinfo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Gestion</title>
</head>
<body>
    <div class="container"></div>
    <div class="welcome-section">
        Welcome back
    </div>
    <div class="login-section">
        <h1>Connectez-vous</h1>
        <form action="" method="post">
            <input type="text" id="" placeholder="matricule" name="matricule">
            <input type="text" id="" placeholder="Entrez votre adresse email" name="email">
            <input type="password" id="" placeholder="Mot de passe" name="password">
            <input type="submit" value="Se connecter" name="signup">
            
        </form>
        <a href="#" class="forgot-password">Forgot Password?</a>
    </div>
</body>
</html>

<!-- https://accounts.google.com/o/oauth2/v2/auth?client_id=TON_CLIENT_ID&redirect_uri=TON_URI_DE_REDIRECTION&response_type=code&scope=https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile  -->