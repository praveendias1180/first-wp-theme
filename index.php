<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="one-post">
            <h3><?php the_title(); ?></h3>

            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php edit_post_link(); ?>
            <div class="seperator"></div>
            <p>Previouse Post: <?php previous_post_link(); ?></p>
            <p>Next Post: <?php next_post_link(); ?></p>
        </div>

        <?php endwhile; ?>

        <?php
        if (get_next_posts_link()) {
            next_posts_link();
        }
        ?>
        <?php
        if (get_previous_posts_link()) {
            previous_posts_link();
        }
        ?>

    <?php else : ?>

        <p>No posts found. :(</p>

    <?php endif; ?>
    <?php wp_footer(); ?>
</body>

</html>