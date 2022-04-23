<html>

	<head>
		<title> Desafio! </title>
		
		<link rel="stylesheet"
		href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"
		/>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
				
	</head>

	<body>
	
	<h3>Seções</h3>
	
	<div id="accordion">
		<h3>Seção 1</h3>
		<div>
		TESTE1
		</div>
		<h3>Seção 2</h3>
		<div>
		TESTE2
		</div>
		<h3>Seção 3</h3>
		<div>
		TESTE 3
		</div>
	</div>
	
	
	</body>

	<script>
		$(function() {
		$("#accordion").accordion();
		});
	</script>
</html> 