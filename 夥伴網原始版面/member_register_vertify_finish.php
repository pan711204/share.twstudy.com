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
<link href="assets/css/custom_member_register_vertify_finish.css" rel="stylesheet">
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
          <h3 class="subtitle"><span>認證成功‧您已認證成功，</span><span>立即登入開始推廣</span></h3>

          <form action="member_share.php" name="form_vertify">
            <div class="login-method">
              <div class="box fb">
                <a href="javascript:void(0);" class="link" title="使用FB帳號登入">
                  <span>使用FB帳號登入</span>               
                </a>
              </div>
              <div class="box google">
                <a href="javascript:void(0);" class="link" title="使用Google帳號登入">
                  <span>使用Google帳號登入</span>               
                </a>
              </div>
            </div>
            <div class="form-box">
              <span class="label-style"><i class="star">*</i>帳號</span>
              <input type="text" name="account" class="input-style" placeholder="ID number">
            </div>
            <div class="form-box">
              <span class="label-style"><i class="star">*</i>密碼</span>
              <input type="password" name="pwd" class="input-style" placeholder="Password">
            </div>
            <div class="btn-wrap">
              <button type="submit" class="btn-login" title="會員登入"><span>會員登入</span></button>
            </div>
            <div class="login-func">
              <a href="member_forget_password.php" class="link link-forget" title="忘記密碼" data-plugin="popup"><span>忘記密碼</span></a>
              <a href="member_register_entrance.php" class="link link-join" title="還未加入嗎?立即加入"><span>還未加入嗎?立即加入</span></a>
            </div>
          </form>

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

    // Popup
    $('[data-plugin="popup"]').magnificPopup({
      type: 'ajax',
      effect: 'fade',
      fixedBgPos: true,
      fixedContentPos: true,
      removalDelay: 300,
      mainClass: 'mfp-fade',
      callbacks: {
        parseAjax: function(mfpResponse) {
          mfpResponse.data = $(mfpResponse.data).find('#popup-getpwd');
        }
      }
    });

  });
</script>
</body>
</html>