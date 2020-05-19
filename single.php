<!--
Template Name: single
-->

<?php get_header(); ?>

<!-- Blog（単記事）始まり -->
<section id="single">
	<div class="container">
		<div class="row">
			<?php if(have_posts()): the_post(); ?>		
				<div class="col-md-12 col-lg-9">
					<!-- 記事タイトル -->
					<h1 class="px-3 pb-3"><?php the_title(); ?></h1>
						<div class="sub">		
							<!-- 日にち -->
							<div class="date"><?php the_time('Y/n/j'); ?></div>
							<!-- カテゴリー -->
							<p class="category-btn"><?php the_category( ' ' ); ?></p>
						</div>
					<!-- サムネイル -->
					<div class="pb-3">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail('', array( 'class' => 'img-fluid' )); ?>
					<?php else : ?>
						<p>サムネイルがないです</p>
					<?php endif; ?>
					</div>
					<p class="h4 px-3 pb-3"><?php the_content(); ?></p>					
			<?php endif; ?>
			</div>
			<div class="category col-md-12 col-lg-3 py-4">
				<div class="category">
					<?php dynamic_sidebar( 'sidebar_category' ); ?>
				</div>
			</div>
		</div>	
	</div>
</section>
<!-- Blog（単記事）終わり -->

<?php get_footer(); ?>