<html>
	<body>
		<h2>Javascript</h2>
		<div id="mydiv">
		   <h3 id="heading"></h3>
		   <p id="p1">JS</p>
		   <button type="button" onclick="show()">Click</button>
		</div>
		<script>
			var x=10;
			var w=39;
			var X="Hello";
			function show()
			{
				//document.getElementById('heading').innerHTML="Welcome to Web Technologies";
				//document.getElementById('heading').innerHTML=X+" "+w;
				document.getElementById('mydiv').style.backgroundColor="blue";
				//document.getElementById('p1').innerHTML="Hello";
				document.getElementById('p1').innerHTML="Hello"+(student.name);
				document.getElementById('p1').style.color="white";
			}
			/*
			//Array in Javascript
			let arr=[12,34,56];
			let a=['red','white','green'];
			alert(arr[2]);
			arr[3]=67;
			alert(arr[3]);
			*/
			//Objects in Javascript
			let student={
				id:"18-XXXXX-1",
				name:"John"
			};
			alert(student.id);
			//alert('The number of students are:'+x);
			//alert(x+w);
			//console.log(x);
			//console.log(X);
			//console.log(X+"world");
			
		</script>
	</body>
</html>