<div class="blog-post">
  <h2 class="blog-post-title">
    <?php if(is_single()) : //Détermine si la requête concerne une publication unique existante.?> 
      <?php the_title(); //Affichez ou récupérez le titre de l'article actuel avec un balisage facultatif. ?>
    <?php else : ?>
      <a href="<?php the_permalink();//Affiche le permalien du message actuel. ?>">
        <?php the_title(); ?>
      </a>
    <?php endif; ?>
  </h2>
  <p class="blog-post-meta">
    <?php the_time('F j, Y g:i a'); ?>
     by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); //Récupérez l'URL de la page d'auteur de l'utilisateur avec l'ID fourni.?>">
       <?php the_author(); ?>
     </a>
  </p>
  <?php if(has_post_thumbnail()) : //Détermine si une publication a une image attachée. ?>
    <div class="post-thumb">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <?php if(is_single()) : ?>
    <?php the_content(); ?>
  <?php else : ?>
    <?php the_excerpt(); //affiche extrait du post?>
  <?php endif; ?>

  <?php if(is_single()) : ?>
    <?php comments_template(); ?>
  <?php endif; ?>
</div><!-- /.blog-post -->
