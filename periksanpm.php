<?php
include 'config.php';
$npm=$_POST['npm'];
$sql = mysql_query("select * from mahasiswa where npm = '$npm'");
$hasil = mysql_num_rows($sql);


if($hasil == 1){

 echo "npm sudah ada";

 // echo  $id = "inputSuccess1";
// echo "<div class='form-group has-success'>
// 			<input type='text' class='form-control' aria-describedby='helpBlock2' placeholder = 'npm' id='npm' autocomplete='off'>
// 		</div>";

}else{

	echo "npm tidak ada";
	
 

// echo "<div class='form-group has-error'>
// 			<input type='text' class='form-control' aria-describedby='helpBlock2' placeholder = 'npm' id='npm' autocomplete='off'>
// 		</div>";
 }



?>