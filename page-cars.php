<?php

/**
Template Name: Auto Aanbod
 */

get_header(); ?>
<div class="wrapper">
  <section class="section cars" id="cars">
    <h3 class="section__title">Ons Aanbod</h3>
    <div class="cars__list">
      <?php $loop = new WP_Query(['post_type' => 'cars', 'posts_per_page' => -1]); ?>

      <?php
      while ($loop->have_posts()) : $loop->the_post(); ?>

        <div class="cars__item car">
          <?php the_post_thumbnail('large', ['class' => 'car__img']); ?>
          <div class="car__content">
            <p class="car__name"><?php the_title(); ?>
            </p>
            <p class="car__price">
              <?php echo get_field('price') ? '€' . get_field('price') : '' ?>
            </p>
            <table class="car__table">
              <tr>
                <th>Bouwjaar</th>
                <td><?php the_field('bouwjaar'); ?>
                </td>
              </tr>
              <tr>
                <th>KM STAND</th>
                <td><?php the_field('km_stand'); ?>
                </td>
              </tr>
              <tr>
                <th>TRANSMISSIE</th>
                <td><?php the_field('transmissie'); ?>
                </td>
              </tr>
              <tr>
                <th>KLEUR</th>
                <td><?php the_field('kleur'); ?>
                </td>
              </tr>
            </table>

            <div class="text-center">
              <a href="<?php the_permalink( ); ?>" class="car__link btn-link">Meer Details</a>
            </div>
          </div>
        </div>

      <?php
      endwhile;
      wp_reset_query();
      ?>
    </div>
  </section>
</div>
<!-- /.wrapper -->


<?php get_footer(); ?>
