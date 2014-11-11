    <?php get_header(); ?>

	<div class="container-fluid" id="affiche1">
			
        <div class="row">
           <?php if (have_posts()) : ?><!-- si il y a des postes affiche les  -->
            	<?php $counter = 0; ?>
            	<?php while (have_posts()) : the_post(); ?><!--  jusqu'a plus de post -->
              		<div class="col-md-4">
                		<article class="visuel">
                  		<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('large', array("class" => "img-responsive centered visuel")); ?></a>
                  		<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                  		<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md">en savoir +</button>
                 		<p>
                  			<?php the_excerpt(); ?><!-- affiche le resume -->
                 		</p>
               			</article>
             		</div> <!--closing la row de l'article-->

             	<?php $counter++;
             	if ($counter % 3 == 0) {
             	echo '</div><div class="row">';
             	}
             	?>

            	<?php endwhile; ?>
          		<?php endif; ?>
        </div> <!-- closing row -->

			
		<!-- <div id="show2" class="visuel col-md-4 col-sm-push-4"><img src="images/disneysurglace-2014.png" height="250px"><p class="titre">DISNEY SUR GLACE 2014</p><button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md">en savoir +</button></div>

			<div id="show1" class="visuel col-md-4 col-sm-pull-4">
				<img src="images/zorro-2014.png" height="250px">
				<p class="titre">ZORRO 2014</p><button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md">en savoir +</button>
			</div>


			<div id="show3" class="visuel col-md-4"><img src="images/feteforaine-2014.png" height="250px"><p class="titre">FETE FORAINE DE NOEL 2014</p><button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-md">en savoir +</button></div>	 -->

	</div> <!-- closing container -->

		<div class="container">
			<div class="row">
				<div class="col-md-12" id="tous-nos-spectacles"><p>Découvrez TOUS NOS SPECTACLES 2014</p></div>
			</div>
		</div>
<!-- </div>	 -->

<a href="#top"><i class="fa fa-caret-square-o-up"></i></a>

		
	<?php get_footer(); ?>
		<!--LES MODALES-->

		<!-- Large modal -->
		



