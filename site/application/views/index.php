<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146997449-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-146997449-1');
	</script>
	<title>Triskel RPG</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Lora&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/') ?>img/favicon.png" />
	<style media="screen">
		<?php include 'estilos.php'; ?>
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">
		  <a class="navbar-brand" href="<?php echo base_url() ?>">
		  	<img src="<?php echo base_url('assets/') ?>img/logo-menu.svg">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item <?=($menu == 'home') ? 'active' : ''?>">
		        <a class="nav-link" href="<?php echo site_url() ?>">Home</span></a>
		      </li>
		      <!-- <li class="nav-item <?=($menu == 'bestiario') ? 'active' : ''?>">
		        <a class="nav-link" href="<?php echo site_url('bestiario') ?>">Bestiário</a>
		      </li> -->
		      <li class="nav-item <?=($menu == 'sistema') ? 'active' : ''?>">
		        <a class="nav-link" href="<?php echo site_url('sistema') ?>">Regras <span class="beta">BETA</span></a>
		      </li>
		    </ul>
		  </div>
		</div>
	</nav>

	<header>
			<div class="textura">
				<div class="container">
					<div class="row">
						<div class="col col-md-6">
							<div class="black-box">
								<h1>Fantasia Sombria Celta</h1>
								<p>Explore uma Ériu pós-idade dos deuses, onde mortais enfrentam uma terra dominada por forças ancestrais e perigos ocultos. Em meio à decadência e mistérios antigos, o equilíbrio entre natureza e corrupção está por um fio.</p>
							</div>
							<!-- <a href="#contato" id="regras">
								<div class="btn btn-primary botao">
									<img src="img/seta.svg">
									<span>Acompanhe o desenvolvimento das regras</span>
								</div>
							</a> -->
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="Divider" style="padding: 0">
		    <hr class="Divider-rule">
		</div>

		<section class="<?php echo $fundo; ?>">
			<div class="container">
				<?php include $page; ?>
			</div>
		</section>

		<div class="Divider" style="padding: 0">
		    <hr class="Divider-rule">
		</div>

		<footer>
			<div class="container">
				<div class="row">
					Este material é livre para uso. Seu conteúdo pode ser livremente copiado e distribuído. É vetado o uso de parte ou total em qualquer outro material ou documento sem consentimento prévio, e sua venda é expressamente proibida.<br><br>
					<a target="_blank" href="https://www.threads.net/@avengardrpg">Nosso Threads</a>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
	</html>
