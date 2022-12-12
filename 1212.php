<?php
include("pdoInc.php");
?>

<html><head></head>
<body bgcolor="#ccccff">

<form action="1212.php" method="post">
<input type="text" name="singer_name" placeholder="請輸入藝人名稱" value="">
<input type="submit">
</form>

<table border="1">
<tr>
<th>資料序號</th>
<th>當日排名</th>
<th>前日排名</th>
<th>歌曲名稱</th>
<th>演 唱 者</th>
</tr>
<?php
$singer_name = (isset($_POST['singer_name'])&&$_POST['singer_name']!='')?$_POST['singer_name']:'林俊傑';
$sth = $dbh->prepare('SELECT * FROM songrank WHERE singer_name =?');
$sth->execute(array($singer_name));
while($row = $sth->fetch(PDO::FETCH_ASSOC)){
echo "<tr><td>".$row['id']."</td>";
echo "<td>".$row['this_rank']."</td>";
echo "<td>".$row['prev_rank']."</td>";
echo "<td>".$row['song_name']."</td>";
echo "<td>".$row['singer_name']."</td></tr>";
}
?>
</table>

</body></html>