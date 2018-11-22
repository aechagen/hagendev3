<!-- Template for blog posts that only took you three days to figure out -->
<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="container-blog-post">
    <article id="blog-post-post">
      <h1 class="blog-post-title"><?php the_title(); ?></h1>
      <p class="blog-post-date">Posted <?php the_time('l, F jS, Y'); ?></p>
      <div class="spacer"></div>
      <?php the_content(); ?>
    </article>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

    <?comments_template( '', true );;?>
  </div> <!-- .container -->

<?php get_footer(); ?>