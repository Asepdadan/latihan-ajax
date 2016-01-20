<?php
include "config1.php";

$sql = mysql_query("select * from tb_status_facebook order by created DESC");

while ($row = mysql_fetch_array($sql)) {
	echo "<hr>";
	echo $row['created']."<br>";
	 echo $row['nama']."<br>";
	 echo $row['status'];
}

?>