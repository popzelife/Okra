<?php
    include_once "common/base.php";
 
    if(isset($_GET['v']) && isset($_GET['e']))
    {
        include_once "inc/class.users.inc.php";
        $users = new OKRListsUsers($db);
        $ret = $users->verifyAccount();
    }
    elseif(isset($_POST['v']))
    {
        include_once "inc/class.users.inc.php";
        $users = new OKRListsUsers($db);
        $status = $users->updatePassword() ? "changed" : "failed";
        header("Location: /account.php?password=$status");
        exit();
    }
    else
    {
        header("Location: /login.php");
        exit();
    }
 
    $pageTitle = "Reset Your Password";
    include_once "common/header.php";
 
    if(isset($ret[0])):
        echo isset($ret[1]) ? $ret[1] : NULL;
 
        if($ret[0]<3):
?>
<div class="connect-container">
    <div class="center">
        <div>
        
        <div class="title2 center">Reset Your Password</div><br />
 
        <form method="post" action="accountverify.php" class="center">
            <div>
                <label for="p">Choose a New Password:</label>
                <input type="password" name="p" id="p" /><br />
                <label for="r">Re-Type Password:</label>
                <input type="password" name="r" id="r" /><br />
                <input type="hidden" name="v" value="<?php echo $_GET['v'] ?>" />
                <div class="center">
                    <input type="submit" name="verify" id="verify" value="Reset Your Password" />
                </div><br />
            </div>
        </form>
        
        </div>
    </div>
</div>
 
<?php
        endif;
    else:
        echo '<meta http-equiv="refresh" content="0;/">';
    endif;
 
    include_once 'common/close.php';
?>