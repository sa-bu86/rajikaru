<?php get_header(); ?>
  <main>
<div class="video-wrap ">
    <video class="video-top" src="<?php echo get_template_directory_uri() ?>/imgs/science.mov" autoplay playsinline muted loop></video>
<div class="page-title">
    <div class="page-title-group">
      <h1><?php the_title(); ?></h1>
      <p><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
    </div>
  </div>

  <section class="business-group">
		 <?php
                if (has_post_thumbnail()) {
                        // アイキャッチ画像が設定されてれば大サイズで表示
                   the_post_thumbnail('large');
                 } else {
                        // なければnoimage画像をデフォルトで表示
                   echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/logo_200217_ol_RGB.png" alt="">';
                 }
              ?>
    <div  class="busi">
		    <h3><?php the_category(', '); ?></h3>
			<hr>
      <p><?php the_content('Read more'); ?></p>
		 <p><a href="<?php the_permalink(); ?>"></a></p>
	   </div>

<?php if (get_previous_post()):?>
<?php previous_post_link('&laquo; %link', '前の記事へ'); ?>
<?php endif; ?>

<?php if (get_next_post()):?>
<?php next_post_link('%link &raquo;', '次の記事へ'); ?>
<?php endif; ?>

  </section>


</div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
 


	  </main>

<?php get_footer(); ?>