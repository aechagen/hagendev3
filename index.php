<?php get_header(); ?>
<main>
  <div class="container"> <!-- My usual container -->
    <h1 class="hero-header text-center">HagenDev</h1>
  <div class="wrapper"> <!-- Has the flex -->
    <div class="col working-on">
      <h1>Goals for January 2019</h1>
      <ul>
        <li>You did a vlog on Christmas Day and enjoyed it.. Pursue that.</li>
        <li>Actually try and get some OJT in with Respiratory. Your package relies on it.</li>
      </ul>
    </div> <!-- .working-on -->
    
    <div class="col">
      <h1>Randomly Accessible Memories</h1>
      <?php if(have_posts() ): while (have_posts()) : the_post() ?> <!-- Start the loop -->
      
      <article id="blog-post">
        <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <span class="blog-date">Posted <?php the_time('l, F jS, Y'); ?></span>
        <p>
          <?php the_excerpt(); ?>
        </p>
      </article>
      <?php endwhile; else: ?> <!-- End the loop -->
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div> <!-- .col -->
    </div> <!-- .wrapper -->
  </div> <!-- .container -->
</main>
<?php get_footer(); ?>