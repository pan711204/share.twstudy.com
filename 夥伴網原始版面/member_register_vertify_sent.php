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
<link href="assets/css/custom_member_register_vertify_sent.css" rel="stylesheet">
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
          <h3 class="subtitle">確認信已發送至您的信箱</h3>
          <strong class="vertify-msg">請於24小時內完成驗證，逾時失效請重新申請帳號</strong>

          <div class="vertify-info">
            <div class="title"><h4><span>若您未收到認證信</span></h4></div>
            <ul class="list reset">
              <li>請先確認垃圾郵件區，並將行動夥伴網加入您的信箱收件名單。</li>
              <li>若帳號E-MAIL輸入有誤，請重新註冊輸入正確資料後再送出。</li>
              <li>信件仍在寄發中，請稍待10分鐘後再查看信箱，若仍沒收到請重新註冊輸入正確資料後再送出。</li>
              <li>若您仍無法認證，請聯絡<a href="#" title="行動夥伴網">行動夥伴網</a>。</li>
            </ul>
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