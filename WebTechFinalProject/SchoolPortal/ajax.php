<body>
	<h2>Data will be loaded in ajax from the database</h2>
	<button id="load">Click!</button>
	<div id="main">
	</div>
	<script src="jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"second.php",
					type:"POST",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
	</script>
</body>