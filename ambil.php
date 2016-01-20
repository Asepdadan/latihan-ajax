<?php
include "config.php";

$npm = $_GET['q'];

if($npm){
$result = mysql_query("select * from mahasiswa where npm=$npm");
while($row = mysql_fetch_assoc($result)){
echo $row['tgl_lahir'];
}
}
?>