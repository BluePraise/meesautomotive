<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title>
        <?php wp_title(''); ?><?php if (wp_title('', false)) {
                                    echo ' :';
                                } ?>
        <?php bloginfo('name'); ?>
    </title>

    <link href="//www.google-analytics.com" rel="dns-prefetch" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/png" rel="icon" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/feather-icons"></script>

    <?php wp_head(); ?>

    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: "<?php echo get_template_directory_uri(); ?>",
            tests: {}
        });
    </script>
</head>

<body <?php body_class(); ?>>


    <div class="header-out">
        <header class="header" role="banner">
            <div class="logo">
                <h1>
                    <a href="<?php echo site_url(); ?>">
                       <?php get_template_part( "template-parts/logo" ); ?>
                    </a>
                </h1>
            </div>

            <nav class="nav" role="navigation">
                <?php if(is_front_page()) :
                    messauto_nav();
                else: 
                    extra_nav();
                endif;
                ?>
            </nav>

            <div class="header__info">
                <p>
                    <a href="mailto:INFO@MEESAUTOMOTIVE.NL">info@meesautomotive.nl</a>
                </p>
                <p><a href="tel:+31262340600">+31 (0)26 - 23 40 600</a></p>
            </div>

            <button class="header__menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve">
                    <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z" />
                </svg>
            </button>
        </header>
    </div>

    <div class="Mobile-overlay">
        <div class="Mobile-overlay-menu">
            <div class="Mobile-overlay-menu-main">
                <nav class="Mobile-overlay-nav Mobile-overlay-nav--primary">
                    <?php if(is_front_page()) :
                        messauto_nav(); 
                    else: 
                        extra_nav();
                    endif;
                    ?>

                    <div class="header__info">
                        <p><a href="mailto:INFO@MEESAUTOMOTIVE.NL">info@meesautomotive.nl</a></p>
                                       <p><a class="link" href="tel:+31262340600">+31 (0)26 - 23 40 600</a></p>
                    </div>
                </nav>
            </div>
        </div>
        <button class="Mobile-overlay-close">
            <svg class="Icon Icon--close" viewBox="0 0 16 16" width="16" height="16">
                <line fill="none" stroke="white" stroke-miterlimit="10" x1="1.4" y1="1.4" x2="14.4" y2="14.4"></line>
                <line fill="none" stroke="white" stroke-miterlimit="10" x1="1.4" y1="14.4" x2="14.4" y2="1.4"></line>
            </svg>
        </button>
    </div>
<!-- </body>

</html> -->