<?php
    include_once "common/base.php";
    $pageTitle = "Verify Your Account";
    include_once "common/header.php";
 
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
        $ret = $users->updatePassword();
    }
    else
    {
        header("Location: /signup.php");
        exit;
    }
 
    if(isset($ret[0])):
        echo isset($ret[1]) ? $ret[1] : NULL;
 
        if($ret[0]<3):
?>
 
    <div class="connect-container">
        
        <div class="center">
        <div>
        <div class="title2 center">Choose a Password</div>
 
        <form method="post" action="accountverify.php" class="center">
            <div>
                <label for="p">Choose a Password:</label>
                <input type="password" name="p" id="p" /><br />
                <label for="r" style="position:relative;left:9px;">Re-Type Password:</label>
                <input type="password" name="r" id="r" style="position:relative;left:9px;"/><br />
                <input type="hidden" name="v" value="<?php echo $_GET['v'] ?>" /><br />
                <div class="center">
                    <input type="submit" name="verify" id="verify" value="Verify Your Account" />
                </div>
            </div>
        </form><br />
            
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