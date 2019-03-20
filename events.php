<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Events</title>
	<style>
		#div1,#div2,#div3{
			width: 150px;
			height:150px;
			display: inline-block;
		}
		#div1{
			background-color: red;
		}
		#div2{
			background-color: blue;
		}
		#div3{
			background-color: gray;
		}
	</style>
</head>
<body>
	<div id="div1" onclick="reci()"></div>
	<div id="div2"></div>
	<div id="div3"></div>

	<script>
		// prvi nacin
			function reci(){   // na sam div sam dodau onclick="reci()"
				alert('prvi div');
			}
		// drugi nacin
			
		var div2 = document.getElementById('div2');
			div2.onclick = function(){
				alert('div2');
			}
		// treci nacin
		var div3 = 	document.getElementById('div3');
			div3.addEventListener('click',reci);
			
			
	</script>
</body>
</html>