<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		
	</head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script src="jquery-1.9.0.js"></script>
	<script src="bootstrap.js"></script>
	
<body onload="load_status()">	</body>
<script type="text/javascript">
    $(document).ready(function(){
        $("#keyword").keyup(function(){
            var keyword=$("#keyword").val();
            var field  =$("#field").val();
            $.ajax({
                type:"GET",
                url:"pencarian.php",
                data:"keyword="+keyword+"&field="+field,
                success:function(html){
                    $("#list_status").html(html);
                }
            });
            
        });
    });
</script>


<script type="text/javascript">
	$(document).ready(function(){

		$("#posting").click(function(){

			var status = $("#status").val();

			$.ajax({
				type : "POST",
				url : "post.php",
				data : "status="+status,
				success : function(html){
					load_status();

				}


			});

			document.getElementById("form").reset();
		});

	});


</script>
<script type="text/javascript">
	

		function load_status()
		{

			$.ajax({
				type : "GET",
				url : "show_status.php",
				data : '',
				success : function(html){
					$("#list_status").html(html);

				}


			});

		}
		
</script>

<div class="container">
<br><br>

<div class="row">
	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<div class="form-group">
					<legend>Form title</legend>
				</div>
		
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<textarea id="status"></textarea>
					</div>
				</div>


		
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" class="btn btn-primary" id="posting">posting</button>
					</div>
				</div>
		

	</div>

	<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
		<div class="panel panel-primary">
			  <div class="panel-heading">
					<h3 class="panel-title">Showing Status</h3>
			  </div>
			  <div class="panel-body">
				<select id="field" >
					<option value="nama">nama</option>
					<option value="status">status</option>
				</select>
				<input type="text" id="keyword" placeholder="kata kunci pencarian">
			  <div id="list_status">

			  </div>

			  </div>
		</div>

	</div>

</div>
		


</div>





	
</html>