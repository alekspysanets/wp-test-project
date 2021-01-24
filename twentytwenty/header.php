<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE HTML>
<html>
<head>
    <title>Personal Blog a Blogging Category Flat Bootstarp  Responsive Website Template | Home :: w3layouts</title>
    <link href="../wp-content/themes/twentytwenty/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../wp-content/themes/twentytwenty/assets/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"
    />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
    <!----//webfonts---->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!--end slider -->
    <!--script-->
    <script type="text/javascript" src="../wp-content/themes/twentytwenty/assets/js/move-top.js"></script>
    <script type="text/javascript" src="../wp-content/themes/twentytwenty/assets/js/easing.js"></script>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <!---->

</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

        <!---header---->
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="index.html"><img src="../wp-content/themes/twentytwenty/assets/images/logo.jpg" title="" /></a>
                </div>
                <!---start-top-nav---->
                <div class="top-menu">
                    <?php get_search_form(); ?>
                    <span class="menu"> </span>
                    <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'menu-1',
                        'menu_class'        => false,
                        'container_class'        => false,
                    )
                );
                ?>
                </div>

                <div class="clearfix"></div>
                <script>
                    $("span.menu").click(function(){
                        $(".top-menu ul").slideToggle("slow" , function(){
                        });
                    });
                </script>
                <!---//End-top-nav---->
            </div>
        </div>
        <!--/header-->
		<?php
