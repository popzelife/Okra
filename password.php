<?php
    include_once "common/base.php";
    $pageTitle = "Reset Your Password";
    include_once "common/header.php";
?>

<div class="connect-container">
    <div class="center">
        <div>

        <div class="title2 center">Reset Your Password</div><br />
        <p class="center">Enter the email address you signed up with and we'll send you a link to reset your password.</p>
 
        <form action="db-interaction/users.php" method="post" class="center">
            <div>
                <input type="hidden" name="action" value="resetpassword" />
                <input type="text" name="username" id="username" />
                <label for="username">Email</label><br /><br />
                <div class="center">
                    <input type="submit" name="reset" id="reset" value="Reset Password" class="button" />
                </div>
            </div>
        </form><br />
            
        </div>
    </div>
</div>

<?php
    include_once "common/close.php";
?>