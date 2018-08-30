<?php
/**
 * Template Name: Home Page
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>

<?php get_template_part( './template-parts/sections/hero' ); ?>
<?php get_template_part( './template-parts/sections/sub-section' ); ?>
<?php get_template_part( './template-parts/sections/program' ); ?>
<?php get_template_part( './template-parts/sections/partners' ); ?>
<?php get_template_part( './template-parts/sections/diplom' ); ?>
<?php get_template_part( './template-parts/sections/sing-up' ); ?>
<?php get_template_part( './template-parts/sections/action' ); ?>
<?php get_template_part( './template-parts/sections/advantages' ); ?>


<?php get_footer();?>
</body>

</html>

