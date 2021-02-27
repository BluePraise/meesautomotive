<?php

/**
Template Name: Auto Aanbod
 */

get_header(); ?>
<main class="cars-overview">
    <div class="container section cars">
            <h3 class="section-title"><?php the_title(); ?></h3>
            <div class="cars__list grid">
                <?php $loop = new WP_Query(['post_type' => 'cars', 'posts_per_page' => -1]); ?>

                <?php
                while ($loop->have_posts()) : $loop->the_post(); 

                    get_template_part("template-parts/car-card");

                endwhile;
                wp_reset_query();
                ?>
            </div>
        </section>
    </div>
</main>
<!-- /.wrapper -->


<?php get_footer(); ?>