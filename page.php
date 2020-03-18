<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
    <div class="main">
      <div class="main_title">
        <h1 class="title"><?php the_title(); ?></h1>
      </div>
      <a href="http://<?php echo($_SERVER['HTTP_HOST']) ?>/home/">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full', array('class' => 'main_img')); ?>
        <?php else : ?>
            <img class="main_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top.png">
        <?php endif ; ?>
      </a>
    </div>
      <?php the_content(); ?>
  </div>
</div>
</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>