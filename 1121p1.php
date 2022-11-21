<html><head></head>
<body bgcolor="#ccccff">

<?php
if( isset($_POST['a']) && isset($_POST['b']) ){
    echo (int)$_POST['a'] * (int)$_POST['b'];
}
?>

<form action="1121p1.php" method="post">
    <input type="text" name="a"> *
    <input type="text" name="b">
    <input type="submit">
</form>

</body></html>