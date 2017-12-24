<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script>
		 $(document).ready(function(){
		// 	$.post("ajax.php",{name:"Ngoc"},function(data){
		// 		$('#name').html(data);

		// 	});
				$("#click").click(function(){
					var txtA = $("#txtA").val();
					var txtB = $("#txtB").val();
					$.get("ajax.php",{a:txtA , b:txtB},function(data){
						$("#result").html(data);



					});



			});

		});
		
	</script>
</head>
<body>
	

	
	
		<input type="text" name="txtA" id="txtA"> +
		<input type="text" name="txtB" id="txtB">

		<input type="button" name="" value="=" id="click">
		
		<!-- <input type="text" name="" id="result"> -->
		<div id="result"></div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/FN7ALfpGxiI" frameborder="0" gesture="media" allowfullscreen></iframe>
	

</body>
</html>