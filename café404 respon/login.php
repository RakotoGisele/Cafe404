<html>
    <head>
       <meta charset="utf-8">
        <!-- CSS -->
    <link rel="stylesheet" href="style_login.css">
        <!--Police-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    </head>
<body>
    <div id="logo">
        <img src="https://zupimages.net/up/20/45/i2fx.png" alt="Logo" width="200" height="150">
    </div>
    <div id="contour">
        <form class="form" action="verification.php" method="POST">
            <h1>Admin login</h1>
            <div class="trait1"></div>
            <div class="trait2"></div>
            <div id="svg">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
            </div>
            <div id="int">
            <input type="text" class="form-control " placeholder="Nom d'utilisateur" name="username" required>
            </div>
            <div id="svg">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                </svg>
            </div>
            <div id="int">
            <input type="password" class="form-control " placeholder="Mot de passe" name="password" required>
            </div>
            <div id="int">
                <input type="submit" value="Sign in"/>
            </div>
                <?php
                    if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";}
                ?>
            <p>© 2020-2090</p>
        </form>
    </div>
  
</div>
</body>
</html>