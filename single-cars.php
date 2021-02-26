<?php get_header(); ?>

<main class="car-detail-view" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class('container-l'); ?>>
                <div class="help-wrapper flex">
                    <div class="icon d-inline-block">
                        <i data-feather="arrow-left"></i>
                    </div><a href="<?php echo site_url('/aanbod'); ?>" class="" role="link">Terug naar het overzicht</a>
                </div>
                <h1 class="page-title"><?php the_title(); ?></h1>
                <?php edit_post_link(); ?>

                <div class="container">

                    <?php $gallery = get_field('gallery'); ?>
                    <?php if ($gallery) : ?>
                        <div class="owl-carousel -grid gr-id-3-col">
                            <?php foreach ($gallery as $gallery_item) : ?>


                                <img src="<?php echo $gallery_item; ?>" alt="<?php the_title(); ?> bij Mees Automotive">

                            <?php endforeach; ?>
                        </div>
                    <?php else : ?>
                        <?php if (has_post_thumbnail() && !($gallery)) : ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>

                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <section class="car-specifications container-l">
                    <h3>Specificaties:</h3>
                    <div class="flex">
                        <?php get_template_part('template-parts/specificaties'); ?>
                        <?php get_template_part('template-parts/contact-card'); ?>
                    </div>
                </section>
                
                    <?php get_template_part('template-parts/kenmerken'); ?>

                <?php
                the_content(); // Dynamic Content
                ?>

            </article>
            <!-- /article -->

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>