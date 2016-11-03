<?php
    $pageTitle = "Home";
    include_once "common/base.php";
    include_once "common/header.php";
?>

<!-- 
==========================================
# JQuery
==========================================
-->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/jquery-jeditable.min.js"></script>

<script type="text/javascript" src="js/jquery-lists.js"></script>
<script type="text/javascript">
    initialize();
</script>

<noscript>This site just doesn't work, period, without JavaScript</noscript>

<!-- 
==========================================
# Section
==========================================
-->

        <!-- IF LOGGED IN -->
        <?php
            if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])):
        ?>
            
            <?php include_once "lists.php"; ?> 

        <!-- IF LOGGED OUT -->
        <?php else: ?>

            <?php include_once "home.php"; ?>

        <?php endif; ?>

<?php include_once "common/sidebar.php"; ?>

<?php include_once "common/footer.php"; ?>