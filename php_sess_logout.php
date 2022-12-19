<?php
session_start();
session_destroy();
die ('<meta http-equiv=REFRESH CONTENT=0;url=php_sess_login.php>');
?>