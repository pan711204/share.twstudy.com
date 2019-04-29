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
<link href="assets/css/custom_member_register_entrance.css" rel="stylesheet">
<link href="assets/css/plugin-slick.min.css" rel="stylesheet">
</head>
<body data-page="inner">
<?php include('page_header.php'); ?>
<div class="g-wrap">
  <div class="page-ban">
    <img class="img showrole scroll-fade" src="assets/images/ban-register.jpg" alt="行動學習科技-行動夥伴網">
    <div class="words">
      <div class="title showrole scroll-fade-up">
        <p class="zh">夥伴們，歡迎開始賺獎金行動...</p>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container-1400 container clearfix">
      <?php include('page_breadcrumb.php'); ?>
      <div class="content">
        <h3 class="register-select--title">請問您是否已是<br><span class="logo-twstudy">行動補習網</span>會員？</h3>
        <div class="register-select--items">
          <div class="box yes" data-plugin="scroll-view">
            <div class="inner-box">
              <div class="pic"></div>
              <span class="title"><i>YES</i>我已是行動補習網會員</span>
              <a href="member_regster_ismember.php" class="btn-regist" title="註冊為夥伴網會員"><span>註冊為夥伴網會員</span></a>
            </div>
          </div>
          <div class="box no"  data-plugin="scroll-view">
            <div class="inner-box">
              <div class="pic"></div>
              <span class="title"><i>NO</i>我不是行動補習網會員</span>
              <a href="member_register_notmember.php" class="btn-regist" title="註冊為夥伴網會員"><span>註冊為夥伴網會員</span></a>
              <span class="regist-msg">您將同時成為行動補習網會員</span>
            </div>
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

    // Equal Height
    var maxH = 0;
    var winW = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    $(window).on('resize',function(){
      setTimeout(function(){
        winW = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        if(winW >= 640){
          maxH = 0;
          $('.register-select--items .inner-box').height('auto');
          $('.register-select--items .inner-box').each(function(i, ele){
            maxH = Math.max(maxH, $(ele).height());
          });
          $('.register-select--items .inner-box').height(maxH);
        }else{
          $('.register-select--items .inner-box').height('auto');
        }
        $(window).trigger('resize.px.parallax');
      },250);
    }).trigger('resize');


  });
</script>
</body>
</html>