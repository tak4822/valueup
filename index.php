<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package small_people
 */

 get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="firstview">
			<div class="firstview__wrapper">
				<div class="firstview__text-block">
					<h1 class="firstview__page-title">VALUE UP</h1>
					<h2 class="firstview__subtitle">物件価値を高める</h2>
					<p class="firstview__text">時間・空間を「区分化」することで、不動産のポテンシャルを引き出し多様化するニーズをとらえることで収益性を向上します。私たちは法的調査から、マーケティングに基づく企画（運用方法）、設計・施工、そして運営体制の構築まで、幅広くサポートします。</p>
					<a href="/contact" class="firstview__contact-button button">
						<p class="button-text">相談する</p>
					</a>
				</div>
				<div class="firstview__illustration-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_image.png" alt="">
				</div>
			</div>
		</section> <!-- #firstview -->


		<section class="strength">
			<div class="contents-wrapper">
				<div class="section-title">
					<p class="section-title__title" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/line.png');">Strength</p>
					<p class="section-title__subtitle">私たちの3つの強み</p>
				</div>

				<div class="strength__card-wrapper">
					<div class="card">
					<img class="card-img strength_1" src="<?php echo get_template_directory_uri(); ?>/assets/images/strength_1.png" alt="">
						<div class="card-contents">
							<div><h3 class="card-title">豊富な空間再生実績</h3></div>
							<p class="card-text">宿泊事業（民泊・旅館業）、レンタルスペース、シェアオフィス等において、様々な物件の空間再生を行ってきたノウハウと、自社運営空間の知見・経験から、的確なマーケティングにもとづく収益向上計画をご提案します</p>
						</div>
					</div>
					<div class="card">
						<img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/strength_2.png" alt="">
						<div class="card-contents">
						<div><h3 class="card-title">手がけた物件の収益は</br>非常に良好</h3></div>
								<p class="card-text">マーケティングとそれに合わせた設計・施工により初期コストを最適化することで、競合環境に左右されづらく長期的な高収益が見込める空間をお届けします</p>
						</div>
					</div>
					<div class="card">
						<img class="card-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/strength_3.png" alt="">
						<div class="card-contents">
							<h3 class="card-title">予算・業務に合わせた</br>設計パートナー</h3>
							<p class="card-text">構造検討が必須の案件から内装インテリアがポイントになる案件まで、物件規模・ご予算規模に応じて豊富な提携設計パートナーよりプロジェクトに最適なチームをお届けします</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #strength -->

		<section class="partners">
			<div class="contents-wrapper">
				<div class="section-title">
					<p class="section-title__title" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/line.png');">Partners</p>
					<p class="section-title__subtitle">パートナーズ</p>
				</div>
				<div class="partners-wrapper">
					<img class="airbnb" src="<?php echo get_template_directory_uri(); ?>/assets/images/airbnb.png" alt="">
					<img class="spacemarket" src="<?php echo get_template_directory_uri(); ?>/assets/images/spacemarket.png" alt="">
				</div>
			</div>
		</sction> <!-- #Partners -->

		<section class="service">
			<div class="contents-wrapper">
				<div class="section-title">
					<p class="section-title__title" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/line.png');">Service</p>
					<p class="section-title__subtitle">初期提案から運用まで通しでサポート</p>
				</div>
				<div class="service-wrapper">
					<img class="service__flow desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/flow_d.jpg" alt="">
					<img class="service__flow mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/flow_m.jpg" alt="">
					<p class="service__text">
					「物件を有効活用したい」というオーナー様が数多くいらっしゃる中で、
					</br>活用する時間がないという方がほとんどです。
					</br>運用方法も多岐にわたり、宿泊施設やレンタルスペース、
					</br>シェアハウスやマンスリーマンションなど様々。
					</p>
					<p class="service__text"><b>
						</br>どの運用方法がこの物件に最適なのか。
						</br>その運用方法って法律的には大丈夫なのか。
						</br>どんな運用方法の組み合わせがよいか
</b></p>
					<p class="service__text">
						物件を活用するにあたって考えるべきことは山のようにあります。
						</br>QUMAでは、今までの豊富な経験をもとにあらゆる業務をサポートします。
					</p>
				</div>
			</div>
		</sction> <!-- #Service -->


		<section class="works">
			<div>
				<div class="section-title">
					<p class="section-title__title" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/line.png');">Works</p>
					<p class="section-title__subtitle">施工事例</p>
				</div>

				<div class="works-wrapper">
				
					<?php $args = array(
							'numberposts' => 5, //表示する記事の数
							'post_type' => 'works' //投稿タイプ名
							// 条件を追加する場合はここに追記
						);
						$works = get_posts($args);
						foreach($works as $post) {
						?>
					<div class="work__container">
						<div class="work__circle">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle.png" alt="">
						</div>
						<h4 class="work__title"><?php the_title(); ?></h4>
						<div class="work__mainsection">
							<div class="work__beforeafter-wrapper">
								<div class="work__before">
									<img src="<?php echo get_field('before_image'); ?>" alt="">
								</div>
								<div class="beforeafter-arrow">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png" alt="">
								</div>
								<div class="work__after">
									<img src="<?php echo get_field('after_image'); ?>" alt="">
								</div>
							</div>
							<div class="work__contents">
								<div class="work__text-container">
									<p class="work__text">QUMAがビル１棟をリノベーションして自社で運用しているslow。B1Fはレンタルスペース、１Fはフロント兼カフェ、F2〜3は宿泊施設として運用しています。</p>
								</div>

								<div class="work__outline-container">
									<ul class="work__outline-list">

									<?php $usage = get_post_meta($post->ID , 'usage' ,true) ?>
									<?php if($usage) {?>
										<li class="work__outline-wrapper">
											<div class="work__outline-left">用　途</div>
											<div class="work__outline-right"><?php echo $usage ?></div>
										</li>
									<?php } ?>

									<?php $building = get_post_meta($post->ID , 'building' ,true) ?>
									<?php if($building) {?>
										<li class="work__outline-wrapper">
											<div class="work__outline-left">物　件</div>
											<div class="work__outline-right"><?php echo $building ?></div>
										</li>
									<?php } ?>

									<?php $construction = get_post_meta($post->ID , 'construction' ,true) ?>
									<?php if($construction) {?>
										<li class="work__outline-wrapper">
											<div class="work__outline-left">構　造</div>
											<div class="work__outline-right"><?php echo $construction ?></div>
										</li>
									<?php } ?>

									<?php $area = get_post_meta($post->ID , 'area' ,true) ?>
									<?php if($area) {?>
										<li class="work__outline-wrapper">
											<div class="work__outline-left">改装面積</div>
											<div class="work__outline-right"><?php echo $area ?></div>
										</li>
									<?php } ?>

									<?php $address = get_post_meta($post->ID , 'address' ,true) ?>
									<?php if($address) {?>
										<li class="work__outline-wrapper">
											<div class="work__outline-left">住所</div>
											<div class="work__outline-right"><?php echo $address ?></div>
										</li>
									<?php } ?>

									<?php $URL = get_post_meta($post->ID , 'url' ,true) ?>
									<?php if($URL) {?>
										<li class="work__outline-wrapper">
											<div class="work__outline-left">URL</div>
											<div class="work__outline-right"><?php echo $URL ?></div>
										</li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
						<div class="work__otherimages-container">
							<div class="work__otherimages-wrapper">
								<?php 
								$other_images = array();
								for($i = 1; $i < 7; ++$i) {
									$other_image = get_field('other_image_' . $i);
									if($other_image) {
										array_push($other_images, $other_image);
									}
								}
								if($other_images):
								foreach($other_images as $image_url):
								?>
									<div class="work__otherimages-image">
										<img src="<?php echo $image_url; ?>" alt="">
									</div>
								<?php 
									endforeach; 
									endif;
								?>
							</div>
						</div>
					</div>
								
									<?php }
						wp_reset_postdata(); //クエリのリセット ?>
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
