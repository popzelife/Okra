<?php
    include_once "common/base.php";
    $pageTitle = "Register";
    include_once "common/header.php";
 
    if(!empty($_POST['username'])):
        include_once "inc/class.users.inc.php";
        $users = new OKRListsUsers($db);
        echo $users->createAccount();
    else:
?>
        <div class="center">
            <div class="connect-container" style="margin-left:auto;margin-right:auto;">
    
                <div class="title2 center">Start managing your OKRs</div><br/>
                <form method="post" action="signup.php" id="registerform" class="center">
                    <div>
                        <label for="username">Email:</label>
                        <input type="text" name="username" id="username" />
                        <br/><br/>
                        <div class="center">
                            <input type="submit" name="register" id="register" value="Sign up" class="button" />
                        </div>
                    </div>
                </form><br/>

            </div>
        </div>
        
 
<?php
    endif;
    include_once 'common/close.php';
?>