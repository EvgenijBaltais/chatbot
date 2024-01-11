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
			
			<div class = "manager-phrase">
				<div class = "manager-img"></div>
				<div class = "manager-text">Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Libero animi maxime velit provident possimus amet sequi officiis eligendi recusandae sint quas enim voluptatum dolorem quia optio consequuntur deleniti aliquam, sed.</div>
			</div>

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

		.dialog-wrapper {
			padding: 20px;
			box-sizing: border-box;
		}

		.manager-phrase {
			display: flex;
		}

		.manager-img {
			width: 50px;
			height: 50px;
			background-image: url('pics/manager.png');
			background-size: cover;
			background-repeat: no-repeat;
			border-radius: 50%;
			margin-right: 10px
		}

		.manager-text {
			font-size: 16px;
		    line-height: 20px;
		    letter-spacing: normal;
		    max-width: calc(100% - 60px);
		    padding: 5px 10px;
		    box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    -o-box-sizing: border-box;
		    -ms-box-sizing: border-box;
		    display: inline-block;
		    vertical-align: top;
		    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .4);
		    -webkit-border-radius: 10px;
		}

	</style>

<script src = 'js/script.js'></script>

</body>
</html>