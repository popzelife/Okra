<?php
    include_once "common/base.php";

    if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn']==1):
        $pageTitle = "Your Account";
        include_once "common/header.php";
        include_once 'inc/class.users.inc.php';
        $users = new OKRListsUsers($db);
 
        if(isset($_GET['email']) && $_GET['email']=="changed")
        {
            echo "<div class='message good'>Your email address "
                . "has been changed.</div>";
        }
        else if(isset($_GET['email']) && $_GET['email']=="failed")
        {
            echo "<div class='message bad'>There was an error "
                . "changing your email address.</div>";
        }
 
        if(isset($_GET['password']) && $_GET['password']=="changed")
        {
            echo "<div class='message good'>Your password "
                . "has been changed.</div>";
        }
        elseif(isset($_GET['password']) && $_GET['password']=="nomatch")
        {
            echo "<div class='message bad'>The two passwords "
                . "did not match. Try again!</div>";
        }
 
        if(isset($_GET['delete']) && $_GET['delete']=="failed")
        {
            echo "<div class='message bad'>There was an error "
                . "deleting your account.</div>";
        }
 
        list($userID, $v) = $users->retrieveAccountInfo();
?>
<div class="center">
<div class="connect-container">
    <div class="center">
        <div>
        
        <div class="title2 center">Your Account</div><br />
        <form method="post" action="db-interaction/users.php" class="center">
            <div>
                <input type="hidden" name="userid"
                    value="<?php echo $userID ?>" />
                <input type="hidden" name="action"
                    value="changeemail" />
                <input type="text" name="username" id="username" />
                <label for="username">Change Email Address</label>
                <br /><br />
                <div class="center">
                <input type="submit" name="change-email-submit"
                    id="change-email-submit" value="Change Email"
                    class="button" />
                </div>
            </div>
        </form><br /><br />
 
        <form method="post" action="db-interaction/users.php"
            id="change-password-form" class="center">
            <div>
                <input type="hidden" name="user-id"
                    value="<?php echo $userID ?>" />
                <input type="hidden" name="v"
                    value="<?php echo $v ?>" />
                <input type="hidden" name="action"
                    value="changepassword" />
                <input type="password"
                    name="p" id="new-password" />
                <label for="password">New Password</label>
                <br /><br />
                <input type="password" name="r"
                    id="repeat-new-password" />
                <label for="password">Repeat New Password</label>
                <br /><br />
                <div class="center">
                <input type="submit" name="change-password-submit"
                    id="change-password-submit" value="Change Password"
                    class="button" />
                </div><br />
            </div>
        </form>
        <hr /><br />
 
        <form method="post" action="deleteaccount.php"
            id="delete-account-form" class="center">
            <div>
                <input type="hidden" name="user-id"
                    value="<?php echo $userID ?>" />
                <div class="center">
                <input type="submit"
                    name="delete-account-submit" id="delete-account-submit"
                    value="Delete Account?" class="red-button" />
                </div><br />
            </div>
        </form><br />
        
        </div>
    </div>
</div>
</div>
 
<?php
    else:
        header("Location: /");
        exit;
    endif;
?>
 
<div class="clear"></div>
 
<?php
    include_once "common/close.php";
?>