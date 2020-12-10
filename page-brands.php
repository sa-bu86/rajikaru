<?php get_header(); ?>

  <main>

  <div class="video-wrap ">
    <video class="video-top" src="<?php echo get_template_directory_uri() ?>/imgs/science.mov" autoplay playsinline muted loop></video>
  <div class="page-title">
      <div class="page-title-group">
        <h1>BRANDS</h1>
        <p>ブランド</p>
      </div>
    </div>
  

  <section class="shinzenbi">
  
    <div class="shinzenbiBlock">
      
      <div class="wrapper">
        
        <h3 class="sub-title">真善美</h3>
        <hr>
        
            <div class="shinzenbi-about">
              <div class="shinzenbi-about-text">
                <p>しなやかに生きる人が大切にする価値観<br><br><br>「真善美（しんぜんび）」という言葉があります。<br>「真」とは、嘘偽りのないまことのこと。<br>「善」とは、道徳的に正しいこと。<br>「美」とは、美しいさまのこと。<br><br>これら三つは、人間が理想とするべき基本的な価値概念であり、<br>行動規範だとされています。<br>つまり、「真善美」を体現することが人間の理想的なあり方である、と言うわけです。</p>
              </div>
              
              <!-- <div class="shinzenbi-about-imgs"> -->
                <!-- <img class="flower pc" src="imgs/flower.png" alt="">
                <img class="sky pc" src="imgs/sky.png" alt=""> -->
                
                
                <div class="shinzenbi-about-imgs">
                  <img class="flower pc" src="<?php echo get_template_directory_uri() ?>/imgs/flower.png" alt="">
                  <img class="sky pc" src="<?php echo get_template_directory_uri() ?>/imgs/sky.png" alt="">
                  <img class="flower-sp sp" src="<?php echo get_template_directory_uri() ?>/imgs/flower-sp.png" alt="">
                  <img class="sky-sp sp" src="<?php echo get_template_directory_uri() ?>/imgs/sky-sp.png" alt="">
                  <!-- <img class="tree-sp1 sp" src="imgs/tree.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>
  </section>


    <section class="meaning">           

        <div class="meaningBlock">
          <div class="wrapper">
          <h3 class="sub-title">真善美を目指す意味</h3>
          <hr>

          <div class="meaning-about">

          <div class="meaning-about-imgs">
            <img class="tree pc" src="<?php echo get_template_directory_uri() ?>/imgs/tree.png" alt="">
            <img class="woods pc" src="<?php echo get_template_directory_uri() ?>/imgs/woods.png" alt="">
            <img class="leaf2 pc" src="<?php echo get_template_directory_uri() ?>/imgs/leaf2.png" alt="">

            <img class="tree-sp sp" src="<?php echo get_template_directory_uri() ?>/imgs/tree-sp.png" alt="">
            <img class="woods-sp sp" src="<?php echo get_template_directory_uri() ?>/imgs/woods-sp.png" alt="">
            <img class="leaf2-sp sp" src="<?php echo get_template_directory_uri() ?>/imgs/leaf2-sp.png" alt="">
          </div>
            <div class="meaning-about-text">
              <p>「真善美」というと、なんとなく日本の伝統的価値観であり、ちょっと古臭いイメージを持つ人もいるかもしれません。しかし、現代においては改めて見直されるべき概念なのかもしれません。<br><br>なぜなら、この「真善美」が人々の内的な拠り所に最適だからです。<br><br>いま時代は過渡期を迎えていて、この先どうなっていくのか想像することができません。<br>これまで当たり前だと思っていたことが、次々と変化していく時代を迎えています。<br>
              気をつけておかないと、時代に流され自分を見失ってしまう恐れがあります。<br><br>そんな中で、自分を見失わずに立ち続けるためには、アニカ拠り所となる内的な価値観を持つことが必要となります。<br>「真善美」というものは、まさにそれに「うってつけ」というわけです。<br>私たち日本人にとっては親和性が高いですし、いかなる時代においても不変の価値を持っています。</p>
            </div>
    
            
            
          </div>
        </div>
      </div>
    </section>


    <section class="brandsnews-posts">
        <div class="wrapper">
          <h3 class="sub-title">記事一覧</h3>
          <hr>

          <div class="brands-posts">
              
      <?php
        $args = array(
         'posts_per_page' => 4 // 表示件数の指定
         );
        $posts = get_posts( $args );
         foreach ( $posts as $post ): // ループの開始
         setup_postdata( $post ); // 記事データの取得
      ?>
			        <div class="posts">

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
      <?php
       endforeach; // ループの終了
       wp_reset_postdata(); // 直前のクエリを復元する
      ?>

      </div>
        
          <div class="view-btn">
       <a href="http://castead.com/rajikaru-hp/category/list/">
        <p>VIEW MORE
          <span class="arrow2"></span></p>
          </a>
      </div>
          
      </div>
    </section>
  </div>


</main>

<?php get_footer(); ?>