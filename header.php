
	<!DOCTYPE html>
  <html>
  <head>
        

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">

        

      <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />


  <?php wp_head(); ?>

  </head>

  <body>

  <div class="container-fluid">
    <!-- FAIRE UNE MEGA DIV au dessus pour la video<video autoplay loop poster="polina.jpg" id="bgvid">
      <source src="ridea-argente.mp4" type="video/mp4">
    </video><-->



  <header>

	

		<div class="container-fluid" id="header">

  				<div class="row">

						<div id="noel-2014" class="inline espace">NOEL 2014</div>
			
						<a href="<?php echo home_url(); ?>">
              <img src="<?php bloginfo('template_directory'); ?>/images/logo-absolu.png" alt="absolu productions logo" height="140px" id="logo" class="inline espace">
            </a>
	    		
						<div class="inline tel espace">Tél : 01 34 34 01 01</div>	

						<div id="preparer" class="inline espace">Préparez 2015</div>

	    		</div>
  		</div>

  					<!--NAVBAR de BOOTSTRAP-->


		<nav class="navbar navbar-default navperso" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Tous les spectacles</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Spectacles NOEL 2014</a></li>
        <li><a href="#">Spectacles NOEL 2015</a></li>
        <li><a href="#">GRANDS SPECTACLES</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="recherche">
        </div>
        <button type="submit" class="btn btn-default">rechercher</button>
      </form>
          </ul>
        </li>
      </ul>
    </div> /.navbar-collapse -->
      <?php
          wp_nav_menu( array(
            'menu' => 'third-nav',
            'theme_location' => 'third-nav',
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse row',
            'container_id' => 'bs-example-navbar-collapse-1',
            'menu_class' => 'nav navbar-nav',
            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
            'walker' => new wp_bootstrap_navwalker())
          );
        ?>
    
  </div><!-- /.container-fluid -->
</nav>

<!--FIN DE LA NAVBAR de BOOTSTRAP-->

		<h1 class="row"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

	</header>	