<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		
	</head>
	
	
	<script>


	var ajaxku;
function ambildata(npm){
ajaxku = buatajax();
var url="ambil.php";
url=url+"?q="+npm;
url=url+"&npm="+Math.random();
ajaxku.onreadystatechange=stateChanged;
ajaxku.open("GET",url,true);
ajaxku.send(null);
}
function buatajax(){
if (window.XMLHttpRequest){
return new XMLHttpRequest();
}
if (window.ActiveXObject){
return new ActiveXObject("Microsoft.XMLHTTP");
}
return null;
}
function stateChanged(){
var data;
if (ajaxku.readyState==4){
data=ajaxku.responseText;
if(data.length>0){
document.getElementById("tgl_lahir").value = data
}else{
document.getElementById("tgl_lahir").value = "";
}
}
}



	</script>


	<body>
		<h1 class="text-center">Hello World</h1>


			
	
		<select name="mahasiswa" onchange=ambildata(this.value) id="mahasiswa">
			<option value="" selected>--pilih npm anda ---</option>
			<?php
		include "config.php";

		$result = mysql_query("select * from mahasiswa");
		 while ($data = mysql_fetch_array($result)){
			
		

		?>

			<option value="<?php echo $data['npm']; ?>"><?php echo $data['npm']; ?></option>
			<?php
		}
		?>
		</select>
		

		<textarea rows="4" id="tgl_lahir" name="tgl_lahir" cols="42"></textarea>
		
	</body>
</html>