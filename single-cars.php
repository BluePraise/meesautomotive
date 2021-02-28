<?php get_header(); ?>

<main class="car-detail-view" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
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
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <?php foreach ($gallery as $gallery_item) : ?>
                                <li>
                                    <img src="<?php echo $gallery_item; ?>" alt="<?php the_title(); ?> bij Mees Automotive">
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                <?php foreach ($gallery as $gallery_item) : ?>
                                <li>
                                    <img src="<?php echo $gallery_item; ?>" alt="<?php the_title(); ?> bij Mees Automotive">
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php else : ?>
                        <?php if (has_post_thumbnail() && !($gallery)) : ?>
                            <figure class="single-image" title="<?php the_title(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </figure>

                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <section class="car-specifications container-l">
                    <h3>Specificaties:</h3>
                    <div class="flex">
                        <?php get_template_part('template-parts/specificaties'); ?>
                        <?php get_template_part('template-parts/contact-card'); ?>
                    </div>
                    <section class="container-xs car-description">

                        <?php the_content(); ?>
                    </section>
                </section>

                <?php get_template_part('template-parts/kenmerken'); ?>


            </article>
            <!-- /article -->

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>