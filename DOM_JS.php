<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DOM</title>
</head>
<body>
	<div class="col-sm-12" id="lista">
					
					<table class="table table-hover" id="table">
						
						<tr>
							
							
							<th>CAN</th>
							<th> JPY</th>
							<th> RUB</th>
						</tr>
						</table>
		</div>
	
	<script type="text/javascript">
		
		var li = document.getElementsByTagName('th');
		for(var i = 0; i<li.length; i++){
			console.log(li[i]);
		}

	</script>					
</body>
</html>