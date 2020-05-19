<!--
Template Name: contact
-->

<?php get_header(); ?>

<!-- contact始まり -->
<section id="contact">
  <h1>CONTACT</h1>
  <div class="explain">
    Webサイト制作のご依頼やお見積もりのご相談など、お気軽にこちらのフォームまたはTwitterのDMよりご連絡ください。<br>メッセージ送信後、通常3日以内にご連絡いたします。
  </div>
  <a href="https://twitter.com/miho_yamagata" class="twitter">Twitterからのメッセージはこちら</a>
  <form>
  <?php echo do_shortcode( '[contact-form-7 id="75" title="Contact form 1"]' ); ?>  
  </form>
</section>
<!-- contact終わり -->

<?php get_footer(); ?>