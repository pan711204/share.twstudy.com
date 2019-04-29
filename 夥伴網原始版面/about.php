<!DOCTYPE html>
<html lang="zh-tw">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="行動學習科技-行動夥伴網">
<meta name="description" content="行動學習科技-行動夥伴網">
<title>行動學習科技-行動夥伴網</title>
<!-- Favicon -->
<link href="favicon.ico" rel="icon">
<link href="favicon.ico" rel="shortcut icon">
<link href="apple-touch-icon.png" rel="apple-touch-icon">
<!-- CSS RWD Core -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- CSS Plugins -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- CSS Customization -->
<link href="assets/css/layout.css" rel="stylesheet">
<link href="assets/css/custom_about.css" rel="stylesheet">
<link href="assets/css/plugin-slick.min.css" rel="stylesheet">
</head>
<body data-page="inner">
<?php include('page_header.php'); ?>
<div class="g-wrap">
  <div class="page-ban">
    <img class="img showrole scroll-fade" src="assets/images/ban-about.jpg" alt="行動學習科技-行動夥伴網">
    <div class="words">
      <div class="title showrole scroll-fade-up">
        <p class="zh">與行動補習網28萬會員</p>
        <p class="word">一起線上學習</p>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container-1400 container clearfix">
      <?php include('page_breadcrumb.php'); ?>
      <div class="content-half">
        <div class="left">
          <!-- 側選單 -->
          <?php include('page_side_about.php'); ?>
        </div>
        <div class="right">
          <div class="subtitle" data-plugin="scroll-view">
            <h3><span>關於我們</span></h3>
          </div>
          <div class="about-text">
            <h4 class="stit">行動夥伴網簡介</h4>
            <p>行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網是行動夥伴網</p>
          </div>
        </div>        
      </div>
  </div>
</div>
<?php include('page_footer.php'); ?>
<script src="assets/js/plugins/jQuery/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.mobile-1.4.5.custom.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.mobiledetect-1.3.6.min.js"></script>
<script src="assets/js/plugins/Bootstrap/bootstrap-4.0.0.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.scrollview-1.4.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.easing-1.4.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.parallax-1.5.0.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.mCustomScrollbar-3.1.5.min.js"></script>
<script src="assets/js/common.js"></script>
<script>
  $(document).ready(function(e) {
    // Scroll View
    $('[data-plugin="scroll-view"]').scrollView({
      threshold: -150,
    });

    // Side Category
    var $cate_btn = $('.side-nav--current');
    var $cate_list = $('.side-nav--list');
    var $cate_second_list = $('.side-nav--list > ul > li > ul');

    $cate_btn.text($cate_list.find('.current').text());
    $cate_list.find('.current').parents('li').addClass('open current');

    $(window).on('resize',function(){
      if( !$cate_btn.is(':visible') && !$cate_list.is(':visible')) 
        $cate_list.show();
      if( $cate_btn.is(':visible') && $cate_list.is(':visible'))
        $cate_list.hide();
    }).trigger('resize');

    $(document).on('click', function(event) {
      if (!$(event.target).is('.side-nav--current') && !$(event.target).is('.side-nav--list a') && $cate_btn.is(':visible')){
        if($cate_list.is(':visible')){
          $cate_list.slideUp(300);
        }
      }
    });

    $cate_btn.on('click',function(){
      if(!$cate_list.is(':visible')){
        $cate_list.slideDown(300,function(){
          $(window).trigger('resize.px.parallax');
        });
      }else{
        $cate_list.slideUp(300,function(){
          $(window).trigger('resize.px.parallax');
        });
      }
    });

    $cate_second_list.find('li:has(ul)').addClass('hasul');
    $cate_second_list.find('li').find('ul').hide();
    $cate_second_list.find('li').find('ul:has(li.current)').show();
    $cate_second_list.find('a').on('click',function(event){
      var $this = $(this);
      var $parent = $this.parent('li');
      var $next = $this.next();
      if($next.is('ul')){
        event.preventDefault();
        if(!$next.is(':visible')){
          $next.slideDown(300);
          $parent.siblings('li').find('ul').slideUp(300);
          $parent.siblings('li').removeClass('current');
          if(!$parent.hasClass('current'))
            $parent.addClass('current');
        }else{
          $next.slideUp(300);
        }
      }
    });

  });
</script>
</body>
</html>