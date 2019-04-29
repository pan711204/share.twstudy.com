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
<link href="assets/css/custom_member_register_vertify_mobile.css" rel="stylesheet">
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
        <div class="inner-content" data-plugin="scroll-view">
          <h3 class="subtitle">確認信已發送至您的手機</h3>
          <strong class="vertify-msg">請至您的手機收取驗證碼簡訊，並於下方輸入驗證碼</strong>

          <form action="member_register_vertify_finish.php" name="form_vertify">
            <div class="form-box">
              <span class="label-style">輸入驗證碼</span>
              <input type="text" name="account" class="input-style">
              <button type="submit" class="btn-send" title="送出驗證碼"><span>送出驗證碼</span></button>
            </div>
          </form>

          <div class="vertify-info">
            <div class="title"><h4><span>若您未收到認證碼簡訊</span></h4></div>
            <ul class="list reset">
              <li>若帳號手機號碼輸入有誤，請重新註冊輸入正確資料後再送出。</li>
              <li>若帳號手機號碼輸入無誤，請按下鈕重新發送認證碼，每天限重新發送一次。</li>
              <li>請確認您的手機可以收「加值簡訊」，要開啟或確認此項功能，請洽詢您的電信業者。</li>
            </ul>
          </div>

          <div class="btn-wrap">
            <a href="javascript:void(0);" class="btn-resendcode" title="重新發送認證碼"><span>重新發送認證碼</span></a>
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

  });
</script>
</body>
</html>