<!--
Template Name: blog
-->

<?php get_header(); ?>

<body>

<!-- single投稿(Blog記事一覧）始まり -->
<section id="blog">
	<h1>BLOG</h1>
	<div class="container">
		<div class="row">
			<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts('posts_per_page=6&paged=' . $paged); 
			?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-12 col-lg-4 border p-4">   
				<!-- 日にち -->
				<div class="date pb-3"><?php the_time('Y/n/j'); ?></div>
				<!-- サムネイル -->
				<div class="pb-4">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', array( 'class' => 'img-fluid' )); ?></a>
					<?php else : ?>
						<p>サムネイルがないです</p>
					<?php endif; ?>
				</div>
				<!-- 記事タイトル -->
				<h2 class="pb-1"><?php the_title(); ?></h2>  
				<!-- 記事内容 -->
				<p class="h4"><?php the_excerpt(); ?></p>
				<!-- カテゴリー -->
				<p class="category-btn"><?php the_category( ' ' ); ?></p>
			</div>
			<?php endwhile; ?>		
			<?php else : ?>
		　　 <p>記事がありません。</p>
			<?php endif; ?>	
		</div>
		<!-- ページネーション -->
		<?php
		the_posts_pagination( array(
			'mid_size' => 2,
			'prev_text' => '&lt;',
			'next_text' => '&gt;',
		) );
		?>
	</div>
</section>
<!-- single投稿(Blog記事一覧）終わり -->

<!-- footer始まり -->
<section id="footer">
	<div class="container">
		<div class="row">
		<div class="col-md-12 col-lg-4 py-5 border">
          <?php dynamic_sidebar( 'footer_about' ); ?>
        </div> 
        <div class="col-md-12 col-lg-4 py-5 border">
          <div class="category">
            <?php dynamic_sidebar( 'footer_category' ); ?>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 py-5 border">
          <?php dynamic_sidebar( 'footer_twitter' ); ?>
        </div>
		</div>
	</div>
</section>
<!-- footer終わり -->

<?php get_footer(); ?>
