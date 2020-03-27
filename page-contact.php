<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package small_people
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="contact">
			<div class="contents-wrapper">
					<div class="section-title">
						<p class="section-title__title" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/line.png');">Contact</p>
						<p class="section-title__subtitle">お問い合わせ</p>
					</div>

					<div class="contact-text-wrapper">
						<p class="contact-text">ご希望の方には、他の施工事例や案件の詳細についての資料をお送り致します。</br>「こんな物件あるんだけど、どのような活用ができるかな」
</br>という方は簡単な物件情報もご共有いただけますと幸いです。</br>
情報を元に可能性のある活用方法をご提案致します。</p>

					<a href="tel:0368050696" class="contact-info">TEL: 03-6805-0696</a>
					<a href="mailto:info@quma.co.jp" class="contact-info">E-MAIL: info@quma.co.jp</a>
					</div>
				
				<?php
				while ( have_posts() ) :
					the_post();
					the_content();

				endwhile; // End of the loop.
				?>

				
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
