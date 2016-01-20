<?php
include "config1.php";

$nama = "asep";
$status = $_POST['status'];

$sql = mysql_query("INSERT INTO `tb_status_facebook` (`id`, `nama`, `status`, `created`) VALUES ('', '$nama', '$status', CURRENT_TIMESTAMP);");


?>