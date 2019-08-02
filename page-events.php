<?php
/*
Template Name: Events
*/
get_header(); ?>


<?php

if (is_front_page()) {
  get_template_part('template-parts/content', 'page-events');
} ?>

<?php
$count = 0;
$args = array(
    'type' => 'post',
    'posts_per_page' => -1,
    'cat' => '5',
    'order_by' => 'date');
?>
<?php query_posts($args); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="col-md-3>
      <span class="member-image">
    <img src="<?php the_post_thumbnail_url('full'); ?>"/>
    </span>
    <span class="member-bio">
      <h2 class="member-name"><?php the_title(); ?></h2>
      <hr>
      <br/>
      <?php the_content(); ?>
      </span>
    </div>
  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
