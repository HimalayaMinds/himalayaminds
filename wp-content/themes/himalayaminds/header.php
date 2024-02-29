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



    </header>