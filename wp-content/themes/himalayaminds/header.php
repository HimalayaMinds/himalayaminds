<?php
/**
 * Header template
 *
 * @package HimalayaMinds
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo($charset) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HimalayaMinds - Ascend to Excellence with HimalayaMinds. </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('hm-main') ?>>
    <header>
        <div class="container header">
            <div class="brand-name">
                <a href="<?php echo home_url(); ?>" id="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/himalayaminds-logo.png"
                        alt="Himalaya Minds (HM), Logo">
                </a>

            </div>
            <nav class="hm-navbar">
                <ul class="nav-links">
                    <li><a href="#">Explore</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Store</a></li>
                </ul>
            </nav>
        </div>

        <section id="hero">
            <div class="container intro">
                <h1> Ascend to Excellence with HimalayaMinds. </h1>
                <p>Join us and be a part of Himalaya Minds</p>
            </div>
            <div class="container">
                <div class="himalayaminds-features">
                    <ul class="hm-feature">
                        <li class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="feature-title">
                                <span>Community</span>
                            </div>
                        </li>
                        <li class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-blog"></i>
                            </div>
                            <div class="feature-title">
                                <span>Blog</span>
                            </div>
                        </li>
                        <li class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-server"></i>
                            </div>
                            <div class="feature-title">
                                <span>Web Hosting</span>
                            </div>
                        </li>
                        <li class="feature-card">
                            <div class="feature-icon">
                                <i class="fab fa-osi" style="font-weight: bold;"></i>
                            </div>
                            <div class="feature-title">
                                <span>Open Source</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>



    </header>