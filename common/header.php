<!doctype html>
<html>
<!-- 
==========================================
# Page Info
==========================================
-->
    <head>
    	<link rel="icon" href="media/vg-logo.png">
        <link rel="shortcut icon" href="media/vg-logo.png">
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="style_okra.css" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Questrial" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lemon" />
        <title>Okra | <?php echo $pageTitle ?></title>
    </head>
<!-- 
==========================================
# Body
==========================================
-->
    <body>
        
<!-- 
==========================================
# Header
==========================================
-->
        <div class="header">

            <div class="logo"><img src="media/vg-logo.png" alt=""></div>
            <a href="/" class="okra-title">Okra <span class="version"> alpha</span></a>

            <!-- IF LOGGED IN -->
            <?php
                if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])):
            ?>
            
            <a href="account.php" class="login-pic"><img src="media/login.png" alt="Your Account"></a>
            <a href="logout.php" class="login button">Log out</a>

            <!-- IF LOGGED OUT -->
            <?php else: ?>
            <div class="login-pic pointer"><img src="media/sidebar.png" alt="Sidebar"></div>
            <a href="signup.php" class="signin button">Sign up</a>
            <a href="login.php" class="login button">Log in</a>

            <?php endif; ?>

        </div>