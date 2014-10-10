<!DOCTYPE html>

<html>
<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
</head>

<body>
	<!-- NAVBAR -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div align="center">
					<div class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.jpg" class="img-responsive">
					</div>
				</div>
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- COLAPSE BUTTON -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hn-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><?php bloginfo( 'name' ); ?></a>
						</div>

						<!-- NAVWALKER -->
						<?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 2,
				                'container'         => 'div',
				                'container_class'   => 'collapse navbar-collapse',
				        		'container_id'      => 'hn-navbar-collapse-1',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</div>
	<!-- END OF NAVBAR -->