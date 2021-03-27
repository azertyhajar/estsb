<?php get_header(); //Charger le modèle d'en-tête.?>
      <div class="row">
        <div class="col-sm-8 blog-main">
          <?php if(have_posts()) : //Si la requête WordPress actuelle a des résultats à boucler.?>
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('content', get_post_format());//Charge une pièce de modèle dans un modèle. ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
        </div><!-- /.blog-main -->
<?php get_footer();//Charger le modèle de pied de page. ?>
