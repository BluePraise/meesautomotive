<?php get_header(); ?>

<main role="main">
    <section class="header-bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/showroom.jpeg);">
        <?php get_template_part("template-parts/logo"); ?> 
        <a href="<?php echo site_url('/aanbod'); ?>" class="d-block btn-link btn-link__white" role="button">Bekijk ons aanbod</a>
    </section>
    <div class="scroll-down"></div>

    <section class="section-container welcome">
        <div class="wrapper container flex two-col">
            <div class="welcome-text" id="welcome">
                <h3 class="section-title">
                    Welkom bij <br>Mees Automotive
                </h3>

                <p>
                    Wij zijn gespecialiseerd binnen de automotive in het in- en verkopen van jong gebruikte auto's.
                </p>
                <p>Evengoed helpen wij u met het onderhouden van uw auto, het aankopen van een (<a class="link" href="https://automotiveimportservice.nl">desgewenst geïmporteerde</a>) auto of het wagenparkbeheer van uw bedrijf.</p>
                <p>Team Mees is u graag van dienst!</p>
            </div>

            <div class="img-container">
                <figure>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gertjankeizer.jpeg" alt="Gert Jan Keizer - Mees Automotive">
                </figure>
            </div>
        </div>
    </section>
    <section class="section-container cars">
        <div class="wrapper">
            <h3 class="section-title dark-gradient-text">Aanbod</h3>
            <div class="cars__list owl-carousel owl-theme">
                <?php $loop = new WP_Query(['post_type' => 'cars', 'posts_per_page' => 4]); ?>

                <?php
                    while ($loop->have_posts()) : $loop->the_post();

                   get_template_part("template-parts/car-card");
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="text-center btn-wrapper">
                <a href="<?php echo site_url('/aanbod'); ?>" class="btn-link btn-link__dark" role="button">Bekijk ons gehele aanbod</a>
            </div>
        </div>
    </section>
    <!-- /.wrapper -->


    <section class="services light" id="services">
        <div class="container-l wrapper">
            <h3 class="section-title">Onze diensten</h3>
            <div class="services__list">
                <?php $loop = new WP_Query(['post_type' => 'services', 'posts_per_page' => -1]); ?>

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="services__item service">
                        <p class="service__title"><?php the_title(); ?>
                        </p>
                        <p class="service__text">
                            <?php echo wp_strip_all_tags(get_the_content()); ?>
                        </p>
                    </div>

                <?php endwhile;
                wp_reset_query(); ?>
            </div>
            <!-- /.services__list -->
        </div>
    </section>

    <section class="section-container contact" id="contact">
        <div class="wrapper">
            <h3 class="section-title">Contact</h3>
            <?php get_template_part( "template-parts/contact"); ?>
        </div>
    </section>
</main>

<?php get_footer();
