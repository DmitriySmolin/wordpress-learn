<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geniuscourses
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class("myclass second"); ?>>
	<?php wp_body_open(); ?>

	<?php
	// wp_nav_menu(
	// 	[
	// 		'theme_location' => 'header_nav',
	// 		'menu_class' => 'myclass',
	// 		'container' => 'div',
	// 		//значения по умолчанию
	// 		// 'fallback_cb' => 'wp_page_menu'
	// 		//уровень вложения списка навигации
	// 		'depth' => 2
	// 	]
	// );


	// get_search_form();

	//esc_attr() - attributes escape
	//esc_html() - html escape
	//esc_url() - link escape
	//wp_kses - allowed html escape (2 params)
	//wp_kses_post() - post html allowed
	//wp_kses_data() - comments html allowed
	//esc_js() - inline JS
	//esc_textarea()

	// $name = 'Alex Sochirca aka <strong>CRIKOVA</strong></div>';

	// $name = 'Alex <a href="#" title="test">Sochirca</a> aka <strong>CRIKOVA</strong></div>';

	// $args = [
	// 	// 'strong' => []
	// 	'a' => [
	// 		'href' => [],
	// 		'title' => []
	// 	],
	// 	'strong' => []
	// ];

	// echo wp_kses($name, $args);

	// echo wp_kses_post($name);
	?>
	<!-- Test 1 -->
	<!-- <input name="author" value="<?= esc_attr($name) ?>" type="text"> -->

	<!-- <?= esc_html($name) ?> -->
	<!-- <a href="<?= esc_url(home_url('/')) ?>">Home</a> -->

	<?php
	// wp_enqueue_style('geniuscourses-general');
	// wp_enqueue_script('geniuscourses-script');
	?>

	<?php
	// esc_html__('Hello', 'geniuscourses'); //возвращает значение
	// esc_html_e('Hello', 'geniuscourses'); //выводит значение

	// echo '<br>';

	// $city = 'Chisinau';
	// $country = 'Moldova';

	// printf(esc_html__('My city is %1$s and my country is %2$s', 'geniuscourses'), $city, $country);

	// echo '<br>' . wp_kses(__('Alex <strong>Sochirca</strong>', 'geniuscourses'), array('strong' => array()));

	// echo '<br>';

	$rating = 1;
	// printf(esc_html(_n('%s star', '%s stars', $rating, 'geniuscourses')), $rating);
	?>