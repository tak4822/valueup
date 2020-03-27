<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package small_people
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
	<script>
  (function(d) {
    var config = {
      kitId: 'isf7rix',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<header id="masthead" class="header contents-wrapper">
		<a href="/" class="header__logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/quma_logo.svg" alt="">
</a>
		<?php if (is_front_page()) {?>
		<a href="/contact" class="header__contact-button button">
			<p class="button-text">お問い合わせ</p>
		</a>
		<?php } ?>

	</header>

	<div id="content" class="site-content">
