
<?php get_header(); ?>

  
<div class="container-fluid" id="affiche1">
  <div class="container-fluid">
        <div class="row">
           <?php if (have_posts()) : ?>
            <?php $counter = 0; ?>
            <?php while (have_posts()) : the_post(); ?>
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
          <?php else : ?>
            <?php echo "no posts"; ?>
          <?php endif; ?>
        </div> <!-- closes row -->
      </div> <!-- fermeture col-md-9 -->

      </div>
    </div>

    </div> <!-- container-fluid -->
  </section>
</div>
  
<?php get_footer(); ?>