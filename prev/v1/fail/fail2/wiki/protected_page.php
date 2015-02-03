<?php
include 'db_connect.php';
include 'functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome logged in user!</p>
            <p>
                This is an example protected page.  To access this page, users
                must be logged in.  At some stage, we'll also check the role of
                the user, so pages will be able to determine the type of user
                authorised to access the page.
            </p>
            <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>You are not authorized to access this page, please <a href="index.php">login</a>.</p>
        <?php endif; ?>
    </body>
</html>
