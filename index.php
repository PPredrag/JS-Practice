<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Java Script Vezba</title>
</head>
<body>
	<h1 id="pera">Ovo je H1</h1>
	<script>
		var x = document.getElementById('pera');
			x.innerHTML = ('Ovo je sada X');

		/*var input = prompt('Koji je vas horoskopski znak?');
		   switch(input){
		   	case'bik':
		   	document.write('bik');
		   	break;
		   	case'lav':
		   	document.write('lav');
		   	break;
		   	default:
		   	document.write('sve ostalo');
		   }*/

		var i = 0;
		while(i<2){
			document.write('<h1>RAdi </h1>');
			i++;
		}   
		for(var i = 0; i < 5; i++){
			document.write("<h" +i+">Povecavam se </h" +i+ ">");
		}

		var bb = [33,5,2,55,8,94];
		var bb1 = new Array(5,65,5,248,66,64);
		var bb2 = Array(5,9,3,4);
		for(var i = 0; i< bb.length; i++){
			console.log(bb[i]);
		}

		/*var tenk = {
			name:"Ruski Tenk",
			health:340,
			attack:75,
			info:function(){
				document.write("Ime je" + tenk.name + "Jacina" + tenk.health + "Napad:" + tenk.attack);
			}
		}
		tenk.info();*/


		function detalji(){
				document.write("Ime je" + this.name + "Jacina" + this.health + "Napad:" + this.attack + '</br>');
			}
			var tenk = {
			name:"Ruski Tenk",
			health:340,
			attack:75,
			info:detalji
			}
			var tenk2 = {
			name:"Americi",
			health:320,
			attack:750,
			info:detalji
			}
			tenk.info();
			tenk2.info();
	</script>
</body>
</html>
<?php 
