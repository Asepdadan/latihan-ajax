
<?php
include "config1.php";

$keyword = $_GET['keyword'];
$fields = $_GET['field'];



$sql = mysql_query("select * from tb_status_facebook where $fields like '%$keyword%'");

while ($row = mysql_fetch_array($sql)) {
	echo "<hr>";
	echo $row['created']."<br>";
	 echo $row['nama']."<br>";
	 echo $row['status'];
}
?>

