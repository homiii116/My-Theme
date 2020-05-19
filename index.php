
<?php get_header(); ?>

<body>

<!-- home始まり -->
<section id="home">
  <h1 id="pic-title">NORWEGIAN NATURE</h1>
  <img id="pics" src="<?php echo get_template_directory_uri(); ?>/images/Top.jpeg" alt="Norwegian-Nature">
</section>
<!-- home終わり -->

<section id="index">

  <!-- intro始まり -->
  <section id="intro">
    <h2>NORWAY × WEB</h2>
    <p>This is a website providing infomation about Norway and Programming that I am fascinated by.<br> Thank you for visiting MIHO-NORGE.</p>
  </section>
  <!-- intro終わり -->
  <!-- about始まり -->
  <section id="aboutme">
    <h2>About me</h2>
    <!-- Miho Yamagata -->
    <p>Name: Miho Yamagata, web developer based in Japan.<br>What I Like : Norway, JavaScript, Nature, Hiking, Candles, Cats</p>
    <a href="profile">More details?</a>
  </section>
  <!-- about終わり -->
  <!-- Blog始まり -->
  <section id="article">
    <h2>New posts</h2>
    <div class="container p-0">  
      <div class="row">
      <?php query_posts('posts_per_page=6'); ?>
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
            <h3 class="pb-1"><?php the_title(); ?></h3>  
            <!-- 記事内容 -->
            <p class="h4"><?php the_excerpt(); ?></p>
            <!-- カテゴリー -->
            <p class="category-btn"><?php the_category( ' ' ); ?></p>
          </div>
        <?php endwhile; else : ?>
      　　 <p>記事がありません。</p>
        <?php endif; ?> 
      </div>  
    </div>
    <a class="blog-btn" href="blog">More articles</a>
  </section>
  <!-- Blog終わり -->

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
</section>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/sample.js"></script>
