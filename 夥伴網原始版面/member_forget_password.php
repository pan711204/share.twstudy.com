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
<link href="assets/css/custom_member_forget.css" rel="stylesheet">
<link href="assets/css/plugin-slick.min.css" rel="stylesheet">
<link href="assets/css/plugin-magnific-popup.css" rel="stylesheet">
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
          <!-- 彈出視窗 - 查詢密碼 -->
          <div id="popup-getpwd" class="popup-getpwd">
            <h3 class="subtitle">查詢會員密碼</h3>
            <form action="member_register_vertify_finish.php" name="form_getpwd">
              <div class="form-box">
                <span class="label-style">請輸入您的會員帳號</span>
                <input type="text" name="account" class="input-style" placeholder="ID Number">
              </div>
              <button type="submit" class="btn-resend" title="發送密碼至手機或e-mail">發送密碼至手機或e-mail</button>
            </form>
            <div class="vertify-info">
              <div class="title"><h4><span>注意事項</span></h4></div>
              <ul class="list reset">
                <li>請輸入您的會員帳號，系統會將密碼傳送至您輸入的手機或E-MAIL中，請您收到訊息後再重新登入即可。（提醒您：相同手機號碼1天僅限查詢1次）</li>
                <li>若您輸入帳號密碼後仍無法成功登入，請聯絡我們，謝謝！</li>
              </ul>
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
<script src="assets/js/plugins/jQuery/jquery.magnificpopup-1.1.0.min.js"></script>
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