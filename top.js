$(function(){
        $('.column-menu').hover(
          function(){
            $('.sub', this).slideDown(10);
          },
          function(){
            $('.sub', this).hide();
          });
      });
      
      
      // スマホのメニューバーの動き
      // $(document).on('click', '#hamburger',function(){
      //  $('.menu-sp').slideToggle(300); 
      //  $('#line1').toggleClass('line_1');
      //  $('#line2').toggleClass('line_2');
      //  $('#line3').toggleClass('close');
      //  });
      
      // スマホのメニューcolumnバーの動き
      // $(document).on('click', '#acd',function(){
      //  $('.sub-sp').slideToggle(300); 
      //  $('.arrow1sp').toggleClass('arrow1sp-up');
      //  });
      
      
       $(function() {
              $('#hamburger').click(function() {
                  $(this).toggleClass('open');
      
                  if ($(this).hasClass('open')) {
                  $('.menu-sp').addClass('open');		//クラスを付与
                  $('#line1').addClass('line_1');
                  $('#line2').addClass('line_2');
                  $('#line3').addClass('close');
                  } else {
                  $('.menu-sp').removeClass('open');	//クラスを外す
                  $('#line1').removeClass('line_1');
                  $('#line2').removeClass('line_2');
                  $('#line3').removeClass('close');
                  $('.sub-sp').removeClass('open');
                  $('.arrow1sp').removeClass('arrow1sp-up');
                  }
              });
      });
      
      $(function() {
              $('#acd').click(function() {
                  $(this).toggleClass('open');
      
                  if ($(this).hasClass('open')) {
                  $('.sub-sp').addClass('open'); 	//クラスを付与
                  $('.arrow1sp').toggleClass('arrow1sp-up');	
                  } else {
                  $('.sub-sp').removeClass('open');	//クラスを外す 
					$('.arrow1sp').toggleClass('arrow1sp-up');
                  }
              });
      });