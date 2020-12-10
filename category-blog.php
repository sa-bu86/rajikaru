<?php get_header(); ?>
  <main>

  <div class="video-wrap blog">
    <video class="video-top" src="<?php echo get_template_directory_uri() ?>/imgs/science.mov" autoplay playsinline muted loop></video>
  <div class="page-title">
      <div class="page-title-group">
        <h1>BLOG</h1>
        <p>記事</p>
      </div>
    </div>
	 <div class="wrapper">
	<div class="blog-posts">
    <div class="post">
<!-- メイン -->


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
endwhile;
?>


<?php endif; ?>


</div>

			  </div>
		<?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
<!-- pagenation -->
<div class="pagenation">
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
</div>
</main>


<?php get_footer(); ?>