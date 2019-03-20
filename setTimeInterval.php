<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SetInetrvalTime</title>
	<style>
		#semafor{
			width: 150px;
			height: 450px;
			border:1px solid silver;
			border-radius: 20px; 
			margin-left: 450px;
		}
		.boja{
			width: 130px;
			height: 130px;
			border: 1px solid silver;
			border-radius: 50px;
			margin-top: 15px;
			margin-left:10px;

		}
	</style>
</head>
<body>
	<div id="semafor">
		<div class="boja"></div>
		<div class="boja"></div>
		<div class="boja"></div>
	</div>
	
	<script>
	/*	var x = setTimeout(run,2000);
		function run(){
		document.write('Hello');
	}


		var y = setInterval(pisi,1000);
		var i = 0;
		function pisi(){
			document.write('Da vidim da li saljaka');
			i++;
			if(i>2){
				clearInterval(y);
			}
		}*/
		function semafor(){
	var boja = document.getElementsByClassName('boja');
				boja[0].style.background = 'red';
				boja[1].style.background = 'gray';
				boja[2].style.background = 'gray';
			function zuta() {
					boja[1].style.background = 'yellow';
				}	
			function zelena(){
				boja[0].style.background = 'gray';
				boja[1].style.background = 'gray';
				boja[2].style.background = 'green';
			}	
			var y = setTimeout(zuta,2000);
			var z = setTimeout(zelena,3000);
			setInterval(semafor,5000);
		}
		semafor();
		
		

	</script>
	
</body>
</html>