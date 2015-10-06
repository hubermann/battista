<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url('public_folder/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('public_folder/css/frontend.css') ?>">
</head>
<body>

	<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          	<ul class="nav navbar-nav navbar-right" id="menu_principal">
	            <li><a href="#">Quienes <br />somos</a></li>
	            <li><a href="#">Productos</a></li>
	            <li class="active"><a href="#">Mercado <br />nacional</a></li>
	            <li><a href="#">Mercado <br />internacional</a></li>
	            <li><a href="#">Contacto</a></li>
          	</ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container-fluid antiguo">
		<div class="container">
		<div class="row">
			

			<div class="lg12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="<?php echo base_url('public_folder/demo-slider.png') ?>" class="img-responsive">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    <div class="item">
			      <img src="<?php echo base_url('public_folder/demo-slider.png') ?>" class="img-responsive">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    ...
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			</div>


		</div> <!-- row -->

    </div> <!-- /container -->

</div><!-- /container-fluid -->
<div class="container-fluid">

	<img src="<?php echo base_url('public_folder/home.jpg') ?>" class="img-responsive">
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</body>
</html>