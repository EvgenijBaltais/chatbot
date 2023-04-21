<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="style.css" rel="stylesheet">
<body>

	<div class = "wrapper">
		<nav class = "nav">
			<div class="main-logo-w">
				<img src="img/logo.png" class="main-logo" alt="">
				<p class="main-logo-text">Umbrella Inc.</p>
			</div>
			<ul class="nav-ul">
				<li class="nav-li">
					<a href="" class="nav-li-a">Преимущества</a>
				</li>
				<li class="nav-li">
					<a href="" class="nav-li-a">Подробнее</a>
				</li>
				<li class="nav-li">
					<a href="" class="nav-li-a">Доставка</a>
				</li>
				<li class="nav-li">
					<a href="" class="nav-li-a">FAQ</a>
				</li>
				<li class="nav-li">
					<a href="" class="nav-li-a">Дополнительно</a>
				</li>
				<li class="nav-li">
					<a href="" class="nav-li-a">Контакты</a>
				</li>
			</ul>
		</nav>

		<div class = "first-block">
			<div class="content content-top">
				<div class = "top-info">
					<h1 class = "h1-title">Купите надежный недорогой зонт</h1>
					<h3 class = "h1-subtitle">Купите мужской или женский зонт</h3>
				</div>
				<div class = "top-slider">
					<div class="slider-w">

						<div class="glide">
							<div class="glide__track" data-glide-el="track">
								<ul class="glide__slides">
									<li class="glide__slide">0</li>
									<li class="glide__slide">1</li>
									<li class="glide__slide">2</li>
								</ul>
							</div>
							<div data-glide-el="controls">
							  <button data-glide-dir="<<">Start</button>
							  <button data-glide-dir=">>">End</button>
							</div>
							<div class="glide__bullets" data-glide-el="controls[nav]">
								<button class="glide__bullet" data-glide-dir="=0"></button>
								<button class="glide__bullet" data-glide-dir="=1"></button>
								<button class="glide__bullet" data-glide-dir="=2"></button>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class = "second-block">
			
		</div>
	</div>
		<script src = "/node_modules/@glidejs/glide/dist/glide.min.js"></script>
		<script>
			import Glide from '/node_modules/@glidejs/glide/dist/glide.modular.esm.js'

			new Glide('.glide').mount()
		</script>
	<!--<script src = "dialog.js"></script>-->
</body>
</html>