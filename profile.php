<!--
Template Name: profile
-->

<?php get_header(); ?>

<!-- about始まり -->
<section id="about">
  <h1>ABOUT ME</h1>
  <!-- Miho Yamagata -->
  <div class="profile">
    <h2>Miho Yamagata</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-6 profile-picture">
          <img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" alt="profile">
        </div>
        <div class="col-md-12 col-lg-6 pt-5">
          <p>氏名:山縣美穂<br>神奈川県在住ノルウェー好きWeb developerとして活動しています。ノルウェーの社会や自然に興味を持った事がきっかけとなり、ノルウェーに移住を計画中。ブログを書いたり、たまにライティングのお仕事もしています。その他、JavaScript・散歩・猫・キャンドルが好きです。</p>
        </div>
      </div> 
    </div>
  </div>
  <!-- Career -->
  <div class="career">  
    <h2>Career</h2>
    <table>
      <tr>
        <th>2015</th>
        <td>カナダ留学 : ビジネスの勉強を経てマーケティングアシスタントとしてインターンを経験</td>
      </tr>
      <tr>
        <th>2018</th>
        <td>都内の電子機器会社へ就職 : 経理事務として請求書の作成・契約データ管理を担当</td>
      </tr>
      <tr>
        <th>2019</th>
        <td>プログラミング学習開始 :  Web制作活動・Web開発の勉強中</td>
      </tr>
    </table> 
  </div>
  <!-- What I can do -->
  <div class="skills">
    <h2>Skills</h2>
      <ul>
        <li>
          <i class="fab fa-html5 fa-5x" style="color:tomato"></i>
          <h3>HTML5</h3>  
        </li>
        <li> 
          <i class="fab fa-css3-alt fa-5x" style="color:dodgerblue"></i>
          <h3>CSS3</h3>
        </li>
        <li>  
          <i class="fab fa-sass fa-5x" style="color:mediumvioletred"></i>
          <h3>Sass</h3>
        </li>       
        <li>  
          <i class="fab fa-js fa-5x" style="color:gold"></i>
          <h3>JavaScript</h3>
        </li>
        <li>     
          <i class="fab fa-wordpress fa-5x" style="color:dimgray"></i>
          <h3>WordPress</h3>
        </li>
        <li> 
          <i class="fab fa-sketch fa-5x" style="color:orange"></i>
          <h3>Sketch</h3>
        </li>   
      </ul>
      <div class="service">
        <h2>Service</h2>
        <p><b>マークアップ・Wordpressでのサイト制作 / レスポンシブデザイン・カスタム / 問合せフォームの設置<br>サイトに関するご相談・ご質問 / 記事執筆 （留学情報・海外暮らし・ノルウェー情報）</b>
        <br>「こんな機能が欲しい」「売り上げに直結するサイト構築をお願いしたい」など<br>お気軽にお問い合わせください。</p>
        <a href="contact">Contact</a>
    </div> 
  </div>  
</section>
<!-- about終わり -->

<?php get_footer(); ?>