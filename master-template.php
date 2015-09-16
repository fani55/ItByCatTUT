<?php 
/*
*
*
*
*
*/
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <php language_atteributes(); ?> ><![endif]-->
<!--[if IE 8]><html class="ie ie8" <php language_atteributes(); ?> ><![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset');?>"><!---->
	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query [e.g responsive] to work at mobile good -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	<title><?php the_title('|',true,'right'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/bootstrap.css"><!--Bootstrap css-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url' ); ?>"><!--style.css you can use method from function-->
	<link rel="profile" href="http://gmpg.org/xfn/11"><!-- ??? -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><!-- ??? -->
	<!-- or use get_template_directory_uri() metode note you must add html5shiv.min.js to specific folder js-->
	<!--[if It IE 9]>
	<script type="text/javascript" src="<?php get_template_directory_uri();?>/js/html5shiv.min.js"></script>
	<![endif]-->	<!-- For any css to work good at IE 9-->

	<?php wp_head(); ?>
</head>

<body <?php body_class( ); ?> >

	<div class="container">

		<header class="header">
			
			<div class="row">
				
				<div class="title">
					<?php bloginfo('name' ); ?>
				</div><!-- END Class title -->
				
				<div class="banner">
					<!-- from curosal -->
				</div><!-- END Class banner -->
				
				<!--bootstrap navbar-->
				<nav class="navbar navbar-inverse "><!--navbar-fixed-top class to fixed top-->
					
				</nav><!-- END Class Top-menu -->
			</div>

		</div><!-- END Class row -->

	</header><!-- END Class header -->


	<div class="page-post">
		<div class="row">

		</div>
	</div><!-- END Class /page-post -->


	<footer class="footer">

		<div class="row">

		</div><!-- END Class row -->

	</footer><!-- END Class footer -->


</div>
<?php wp_footer(); ?>
</body>
</html>