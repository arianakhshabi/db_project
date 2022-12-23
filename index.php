<!DOCTYPE html>
<html lang="en">
<head>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kaykogym</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kaykogym</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<br>
<script>
  new Splide( '#image-slider' ).mount();
  document.addEventListener( 'DOMContentLoaded', function () {
  new Splide( '#image-slider', {
		cover      : true,
		heightRatio: 0.5,
  } ).mount();
} );
</script>

<div id="image-slider" class="splide">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
				<img src="pexels-bruno-bueno-2204196.jpg">
			</li>
			<li class="splide__slide">
				<img src="pexels-victor-freitas-841130.jpg">
			</li>
			
		</ul>
  </div>
</div>
</body>
</html>