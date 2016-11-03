<?php
    include_once "common/base.php";
    $pageTitle = "Log In";
    include_once "common/header.php";
?>
<div class="center">
<div class="connect-container">
    <div class="center">
        <div>

<?php
    if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])):
?>
        <p class="center">You are currently&nbsp;<strong>logged in.</strong></p>
        <p class="center"><a href="logout.php">Log out</a></p>
<?php
    elseif(!empty($_POST['username']) && !empty($_POST['password'])):
        include_once 'inc/class.users.inc.php';
        $users = new OKRListsUsers($db);
        if($users->accountLogin()===TRUE):
            echo "<meta http-equiv='refresh' content='0;/'>";
            exit;
        else:
?>
 
        <div class="title2 center">Login Failed &mdash; Try Again?</div><br />
        <form method="post" action="login.php" name="loginform" id="loginform" class="center">
            <div>
                <input type="text" name="username" id="username" />
                <label for="username">Email</label>
                <br /><br />
                <input type="password" name="password" id="password" />
                <label for="password">Password</label>
                <br /><br />
                <div class="center">
                    <input type="submit" name="login" id="login" value="Login" class="button" />
                </div>
            </div>
        </form><br /><br />
        <p class="center"><a href="password.php">Did you forget your password?</a></p><br />
<?php
        endif;
    else:
?>
        <div class="title2 center">Welcome Back!</div><br />
        <form method="post" action="login.php" name="loginform" id="loginform" class="center"><br />
            <div>
                <input type="text" name="username" id="username" />
                <label for="username">Email</label>
                <br /><br />
                <input type="password" name="password" id="password" />
                <label for="password">Password</label>
                <br /><br />
                <div class="center">
                    <input type="submit" name="login" id="login" value="Login" class="button" />
                </div>
            </div>
        </form><br /><br />
        <p class="center"><a href="password.php">Did you forget your password?</a></p><br />

<?php
    endif;
?>
            
        </div>
    </div>
</div>
</div>
 
<div style="clear: both;"></div>
<?php
    include_once "common/close.php";
?>