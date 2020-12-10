<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TOP</title>
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
			<li><a href="http://castead.com/rajikaru-hp/business/">BUSINESS<br>ビジネス</a></li>
          <li><a href="http://castead.com/rajikaru-hp/greeting/">GREETING<br>ご挨拶</a></li>
			<li class="column-menu">
            <a href="http://castead.com/rajikaru-hp/column1/">COLUMN<br><span class="arrow1"></span></a>
            <ul class="sub">
              <li class=""><a href="http://castead.com/rajikaru-hp/column1/">口臭とは？</a></li>
              <li class=""><a href="http://castead.com/rajikaru-hp/column2/">ラジカル化オゾン水とは？</a></li>
            </ul>
          </li>
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
     		  <li class="list"><a href="http://castead.com/rajikaru-hp/business/">BUSINESS<br>ビジネス</a></li>
        <li  class="list" ><a href="http://castead.com/rajikaru-hp/greeting/">GREETING<br>代表からご挨拶</a></li>

        <li class="column-menu-sp list" id="acd">
          <a href="http://castead.com/rajikaru-hp/column1/" class="column-a ">COLUMN</a><span class="arrow1sp"></span>
          <ul class="sub-sp close">
            <li class=""><a href="http://castead.com/rajikaru-hp/column1/">口臭とは？</a></li>
            <li class=""><a href="http://castead.com/rajikaru-hp/column2/">ラジカル化オゾン水とは？</a></li>
          </ul>
        </li>		        
        <li  class="list"><a href="http://castead.com/rajikaru-hp/company/">COMPANY<br>会社案内</a></li>
        <li  class="list"><a href="http://castead.com/rajikaru-hp/contact/">CONTACT<br>お問合わせ</a></li>

      </ul>
    </div>
  </header>






