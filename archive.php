<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="top.css">
  <link rel="stylesheet" href="sp.css">
  <title>COMPANY</title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="hd-wrapper">
      <div class="header-contents">
        <div class="header-img">
        <a href="http://castead.com/rajikaru-hp/">
          <img src="<?php echo get_template_directory_uri() ?>/imgs/ScientificCareManagement_Logo.png" alt="">
          </a>
        </div>
        <ul class="menu pc">
          <li><a href="http://castead.com/rajikaru-hp/brands/">BRANDS<br>ブランド</a></li>
          <li class="column-menu">
            <a href="http://castead.com/rajikaru-hp/column1/">COLUMN<br><span class="arrow1"></span></a>
            <ul class="sub">
              <li class=""><a href="http://castead.com/rajikaru-hp/column1/">口臭とは？</a></li>
              <li class=""><a href="http://castead.com/rajikaru-hp/column2/">ラジカル化オゾン水とは？</a></li>
            </ul>
          </li>
          <li><a href="http://castead.com/rajikaru-hp/greeting/">GREETING<br>ご挨拶</a></li>
          <li><a href="http://castead.com/rajikaru-hp/company/">COMPANY<br>会社案内</a></li>
          <li class="blue"><a href="http://castead.com/rajikaru-hp/contact/">CONTACT<br>お問合わせ</a></li>
        </ul>
        

        <div class="sp" id="hamburger">
          <span class="inner_line" id="line1"></span>
          <span class="inner_line" id="line2"></span>
          <span  id="line3">MENU</span>
        </div>

      </div>
    </div>

    <div class="menu-sp sp close">
    <ul>
        <li  class="list"><a href="http://castead.com/rajikaru-hp/brands/">BRANDS<br>ブランド</a></li>
     
        <li class="column-menu-sp list" id="acd">
          <a href="http://castead.com/rajikaru-hp/column1/" class="column-a ">COLUMN</a><span class="arrow1sp"></span>
          <ul class="sub-sp close">
            <li class=""><a href="http://castead.com/rajikaru-hp/column1/">口臭とは？</a></li>
            <li class=""><a href="http://castead.com/rajikaru-hp/column2/">ラジカル化オゾン水とは？</a></li>
          </ul>
        </li>
     
        <li  class="list"><a href="http://castead.com/rajikaru-hp/contact/">CONTACT<br>お問合わせ</a></li>
          
        <li  class="list" ><a href="http://castead.com/rajikaru-hp/greeting/">GREETING<br>代表からご挨拶</a></li>
        
        <li  class="list"><a href="http://castead.com/rajikaru-hp/company/">COMPANY<br>会社案内</a></li>
      </ul>
    </div>
  </header>

  <main>

  <div class="video-wrap ">
    <video class="video-top" src="<?php echo get_template_directory_uri() ?>/imgs/science.mov" autoplay playsinline muted loop></video>
  <div class="page-title">
      <div class="page-title-group">
        <h1>BLOG</h1>
        <p>記事</p>
      </div>
    </div>

	<div class="blog-posts blog-bg">
    <div class="post">
<!-- メイン -->
<a href="<?php the_permalink(); ?>">

<?php
        $args = array(
         'category_name' => 'blog',
		 );
		 ?>
                        
          <?php
//記事があればentriesブロック以下を表示
if (have_posts() ) : ?>

<!-- entries -->

<?php
//記事数ぶんループ
while ( have_posts() ) :
the_post(); ?>


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
<?php
endwhile;
?>


<?php endif; ?>
</a>

</div>



</main>

<?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
<!-- pagenation -->
<div class="pagenation blog-bg">
<?php
echo
paginate_links(
array(
'end_size' => 0,
'mid_size' => 1,
'prev_next' => true,
'prev_text' => '<i class="fas fa-angle-left"></i>',
'next_text' => '<i class="fas fa-angle-right"></i>',
)
);
?>

<?php endif; ?>
</div>
</div>
<footer>
  <p>Ⓒ2020 Scientific Care Management,inc.All Right Reserved</p>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script src="top.js"></script>
<?php wp_footer(); ?>
</body>
</html>