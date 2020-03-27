<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package small_people
 */

?>

	</div><!-- #content -->

	<footer class="footer <?php if (is_front_page()) {?>footer__with__button<?php } ?>">
		<div class="footer-wrapper">
		<?php if (is_front_page()) {?>
			<a href="/contact" class="footer__contact-button button">
				<p class="button-text">相談する</p>
			</a>
			<?php } ?>
			<div class="footer__contents">
				<div class="footer__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_white.svg" alt="">
				</div>
				<div class="footer__company-info-list">
					<div class="footer__company-info-wrapper">
						<div class="footer__company-info-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_tel.svg" alt="">
						</div>
						<a href="tel:0368050696" class="footer__company-info-text">03-6805-0696</a>
					</div>
					<div class="footer__company-info-wrapper">
						<div class="footer__company-info-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_mail.svg" alt="">
						</div>
						<a href="mailto:info@quma.co.jp" class="footer__company-info-text">info@quma.co.jp</p>
					</div>
					<div class="footer__company-info-wrapper">
						<div class="footer__company-info-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_address.svg" alt="">
						</div>
						<p class="footer__company-info-text">〒150-0011</br>東京都渋谷区東3-6-18</p>
					</div>
					<div class="footer__company-info-wrapper">
						<div class="footer__company-info-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_time.svg" alt="">
						</div>
						<p class="footer__company-info-text">9:00-17:00</br>水曜日(午後)･日曜日 定休日</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
