<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwenty_unique_id = twentytwenty_unique_id('search-form-');

$twentytwenty_aria_label = !empty($args['label']) ? 'aria-label="' . esc_attr($args['label']) . '"' : '';
?>
<div class="search">
    <form role="search"
        <?php echo $twentytwenty_aria_label; ?>
          method="get"
          action="<?php echo esc_url(home_url('/')); ?>"
    >
        <input type="text" id="<?php echo esc_attr($twentytwenty_unique_id); ?>"
               value="<?php echo get_search_query(); ?>" name="s"/>
        <input type="submit"
               value="<?php echo esc_attr_x('', 'submit button', 'twentytwenty'); ?>"/>
    </form>
</div>


