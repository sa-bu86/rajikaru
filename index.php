<?php get_header(); ?>
  <main>

    <div class="video-wrap ">
      <video class="video-top" src="<?php echo get_template_directory_uri() ?>/imgs/science.mov" autoplay playsinline muted loop></video>
    </div>
      <section class="top">
      <h1>口腔内ケアで認知症予防から<br>ライフサイクルサポート</h1>
      </section>


    <section class="concept background">
      <div class="title-box">
        <h2>CONSEPT</h2>
        <h3>コンセプト</h3>
        <hr>
	 
		  <div class="concept-text">
			  <p>歯周病と全身疾患の関係は、因果関係があるとされています。</p>
			  <p>国内の有名な疫学研究で歯周病と認知症の関連が証明されました。</p>
			  <p>また、認知症になりやすい人たちの研究でも、糖尿病をはじめとする生活習慣病などが</p><p>リスクファクター（原因因子）となっていることがわかりました。</p>
			  <p>口腔内の環境を整えることで、様々な病気の予防ができます。</p>
			  <p>ラジカル化オゾン水を使用することで、あなたの口腔内の環境を守ります。</p>
			  <p>健康と人生の時間を大切にするために、今日からラジカル化オゾン水を始めてみませんか？</p>
			  <p>ラジカル化オゾン水があなたの健康と人生の時間を守ります。</p>
		  </div>
	 </div>
    </section>



    
    

    <section class="blog ">
      
      <div class="wrapper">

        <div class="group">

        <h2>BLOG</h2>
        <h3>ブログ</h3>
        <hr>
        
      <div class="blog-posts">
      <div class="post">
      <?php
        $args = array(
         'category_name' => 'blog',
         'posts_per_page' => 8 // 表示件数の指定
         );
        $posts = get_posts( $args );
         foreach ( $posts as $post ): // ループの開始
         setup_postdata( $post ); // 記事データの取得
      ?>
		        <a href="<?php the_permalink(); ?>">

        <div class="post-img">
             <?php
                if (has_post_thumbnail()) {
                        // アイキャッチ画像が設定されてれば大サイズで表示
                   the_post_thumbnail('large');
                 } else {
                        // なければnoimage画像をデフォルトで表示
                   echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/logo_200217_ol_RGB.png" alt="">';
                 }
              ?>
        </div>
        <div class="post-text">
          <time class=""><?php the_time('Y/n/j'); ?></time>
          <p> <?php echo mb_substr(get_the_excerpt(), 0, 48); ?></p>
    
        </div>
      </a>
      </div>
    
      <div class="post">
      <a href="<?php the_permalink(); ?>">
		        </a>

      <?php
       endforeach; // ループの終了
       wp_reset_postdata(); // 直前のクエリを復元する
      ?>
    </div>
    </div>

      <div class="view-btn">
       <a href="http://castead.com/rajikaru-hp/category/blog/">
        <p>VIEW MORE
          <span class="arrow2"></span></p>
          </a>
      </div>
      <div></div>
    </div>
    </div>
  </section>


  

  

    <section class="news">
      <div class="wrapper">
        <h2>NEWS</h2>
        <h3>お知らせ</h3>
        <hr>
        <div class="blog-posts">
      <div class="post">
     
      <?php
        $args = array(
         'category_name' => 'news',
         'posts_per_page' => 8 // 表示件数の指定
         );
        $posts = get_posts( $args );
         foreach ( $posts as $post ): // ループの開始
         setup_postdata( $post ); // 記事データの取得
      ?>
		  <a href="<?php the_permalink(); ?>">
        <div class="post-img">
             <?php
                if (has_post_thumbnail()) {
                        // アイキャッチ画像が設定されてれば大サイズで表示
                   the_post_thumbnail('large');
                 } else {
                        // なければnoimage画像をデフォルトで表示
                   echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/logo_200217_ol_RGB.png" alt="">';
                 }
              ?>
        </div>
        <div class="post-text">
          <time class=""><?php the_time('Y/n/j'); ?></time>
          <p> <?php echo mb_substr(get_the_excerpt(), 0, 48); ?></p>
    
        </div>
      </a>
      </div>
    
      <div class="post">
      <a href="<?php the_permalink(); ?>">
		    </a>
      <?php
       endforeach; // ループの終了
       wp_reset_postdata(); // 直前のクエリを復元する
      ?>
    
    </div>
    </div>
      
      <div class="view-btn">
      <a href="http://castead.com/rajikaru-hp/category/news/">
        <p>VIEW MORE
        <span class="arrow2"></span></p>
        </a>
      </div>
      
    </div>
    </section>
	  
	<section class="business">
      <div>
        <a href="http://castead.com/rajikaru-hp/business/#1">
			<img src="<?php echo get_template_directory_uri() ?>/imgs/化粧品製造販売業2.png" alt="">
        <p>化粧品製造販売業</p>
        </a>
      </div>

      <div>
        <a href="http://castead.com/rajikaru-hp/business/#2">
          <img src="<?php echo get_template_directory_uri() ?>/imgs/医薬品マーケティング事業.png" alt="">
          <p>医薬品マーケティング業務</p>
        </a>
      </div>

      <div>
        <a href="http://castead.com/rajikaru-hp/business/#3">
          <img src="<?php echo get_template_directory_uri() ?>/imgs/企業向けコンサルティング.png" alt="">
          <p>企業向けコンサルティング</p>
        </a>
      </div>
    </section>
 
    
  </main>
<?php get_footer(); ?>
