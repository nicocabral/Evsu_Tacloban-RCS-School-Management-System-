<?php
$connect = mysql_connect("localhost","root","");
mysql_select_db ("rcstacloban", $connect);

$id = addslashes($_REQUEST['id']);

$image = mysql_query("SELECT * FROM tbl_alumni WHERE id = $id");
$image = mysql_fetch_assoc($image);
$image = $image['image'];

header("Content-type: image/jpeg");

echo $image;

?>