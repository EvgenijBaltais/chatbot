<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<div style = "position: relative;width: 700px; height: 700px;margin: 100px auto; outline: 1px solid #ccc;">

	<div class = "dialog">
		<p class = "ask-manager">Есть вопросы?</p>
		<div class = "dialog-wrapper">
			
		</div>
	</div>
</div>

	<style>
		* {
			margin: 0;
			padding: 0
		}
		.dialog {
			position: absolute;
			right: 20px;
			bottom: 30px;
			width: 350px;
			height: 500px;
			background: #0087D2;
		}

		.dialog-wrapper {
			position: absolute;
			top: 50px;
			left: 2px;
			right: 2px;
			bottom: 2px;
			width: calc(100% - 4px);
			height: calc(100% - 52px);
			background: #fff;
		}

		.ask-manager {
			width: calc(100% - 20px);
			position: absolute;
			top: 13px;
			left: 10px;
			color: #fff;
			font-size: 24px;
			line-height: 24px;
			font-family: Arial;
		}

	</style>

<script src = 'js/script.js'></script>

</body>
</html>