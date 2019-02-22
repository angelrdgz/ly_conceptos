<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ly Conceptos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css' ?>">
</head>
<body>
	<nav class="nav">
		<div class="container">
			<ul class="float-left" style="margin-left: 50px;">
				<li class="title"><img style="width:180px;" src="<?php echo base_url().'assets/images/Logowhite.png' ?>" alt=""></a></li>
			</ul>
			<ul class="ul float-right" style="margin-right: 50px;">
				<li><a href="<?php echo base_url().'/' ?>">Nosotros</a></li>
				<li><a href="<?php echo base_url().'projects' ?>">Proyectos</a></li>
				<li><a href="<?php echo base_url().'services' ?>">Servicios</a></li>
				<li><a href="<?php echo base_url().'contact' ?>">Contacto</a></li>
			</ul>
		</div>
	</nav>
	<div class="content">
		<?php echo $contents; ?>
	</div>
    <footer>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-1"></div>
    			<div class="col-sm-9">
    				<ul class="float-left">
						<li class="title">Creado por MR WASABI</li>
					</ul>
					<ul class="ul float-right">
						<li><a href=""><img style="width:32px;" src="<?php echo base_url().'assets/images/face_icon.png' ?>" alt=""></a></li>
						<li><a href=""><img style="width:32px;" src="<?php echo base_url().'assets/images/insta_icon.png' ?>" alt=""></a></li>
					</ul>
    			</div>
    		</div>
    	</div>
    </footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>