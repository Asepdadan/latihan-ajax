<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		
	</head>
	
	<script src="jquery-1.9.0.js"></script>
	<script>
	$(document).ready(function(){
		$("#tombol").click(function(){

			$('div').load("action.html");

		});

	/*	$("#tombol1").click(function(){

			$('#isi').load("action.html");

		});*/

		$("#tombol1").click(function(){

			$.post('action.php',
				{'nama': 'asep dadan',
				 'alamat': 'Garut'
				} 
				).done(function(data){

					$('#isi').html(data);
				});
			

		});



		$("#ajax").click(function(){

			$.ajax({
				method : "POST",
				url   : "action.php",
				data  : { nama : "asep", alamat : "garut"}

				}).done(function(data2){

					$('#isiajax').html(data2);
				});
			

		});




		$('#btn').click(function() {
                    var vnama = $('#nama').val();
                    var vnpm = $('#npm').val();

						$.ajax({
						method : "POST",
						url   : "lihat.php",
						data  : { npm : vnpm, nama : vnama}

						}).done(function(data2){

							$('#tampil').html(data2);
						});

						document.getElementById("form").reset();
                });

		$("button").click(function(){

			alert("hello button");

		});

		$("#npm").keyup(function(){
			var npm = $("#npm").val();

			$.ajax({

				type : "POST",
				url : "periksanpm.php",
				data : "npm"+npm,
				success : function(html){

					$("notif").html(html);
				}


			});



		});



	});

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

		<div>
			
		</div>

		<p id="isi"></p>
		<p id="isiajax"></p>

	<button type="button" id="tombol">load</button><button type="button" id="tombol1">post</button>
		<button type="button" id="ajax">ajax</button>
		


		<form action="" method="POST"  id="form">
			
		<input type="text" id="npm" name="npm">
		<input type="text" id="nama" name="nama">
			
		
			
		</form>
		<button type="submit"  id="btn">Tampil</button>
		<h1 id="tampil"></h1>	
			
	
		<select name="mahasiswa" onchange=ambildata(this.value) id="mahasiswa">
			<option value="" selected>--pilih npm anda ---</option>
			<?php
		include "ambil.php";

		$result = mysql_query("select * from mahasiswa");
		 while ($data = mysql_fetch_array($result)){
			
		

		?>

			<option value="<?php echo $data['npm']; ?>"><?php echo $data['npm']; ?></option>
			<?php
		}
		?>
		</select>
		

		<textarea rows="4" id="tgl_lahir" name="tgl_lahir" cols="42"></textarea>
		

		<input type="text" name="npm" id="npm" placeholder="npm">
		<div id="notif">
			
		</div>

	</body>
</html>