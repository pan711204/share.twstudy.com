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
<link href="assets/css/custom_member_profile.css" rel="stylesheet">
<link href="assets/css/plugin-mCustomScrollbar.css" rel="stylesheet">
</head>
<body data-page="inner">
<?php include('page_header.php'); ?>
<div class="g-wrap" id="member">
  <div class="page-ban">
    <img class="img showrole scroll-fade" src="assets/images/ban-mem.jpg" alt="行動學習科技-行動夥伴網">
    <div class="words">
      <div class="title showrole scroll-fade-up">
        <p class="zh">會員中心</p>
        <p class="en">Member Center</p>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container-1400 container clearfix">
      <div class="member-cate">
        <ul class="reset">
          <li>
            <a href="member_share.php" title="我要推廣">我要推廣</a>
          </li>
          <li>
            <a href="member_bonus.php" title="獎金與成效">獎金與成效</a>
          </li>
          <li class="now">
            <a href="member_profile.php" title="帳號管理">帳號管理</a>
          </li>
        </ul>
      </div>
      <?php include('side_member.php'); ?>
      <div class="main-content showrole scroll-fade-left">
        <?php include('page_breadcrumb.php'); ?>
        <div class="step">
          <div class="box now">
            <div class="icon"> </div>
            <p class="en">Step 1</p>
            <p class="zh">帳號密碼設定</p>
          </div>
          <div class="box">
            <div class="icon"> </div>
            <p class="en">Step 2</p>
            <p class="zh">填寫基本資料</p>
          </div>
          <div class="box">
            <div class="icon"> </div>
            <p class="en">Step 3</p>
            <p class="zh">請款帳戶資料</p>
          </div>
        </div>
        <div class="profile-wrap">
          <form action="member_profile02.php">
            <section class="sec clearfix">
              <div class="g-title">
                <h2 class="ti">
                  <i>
                    <img src="assets/images/m-ti3-img1.jpg" alt="帳號密碼設定 ">
                  </i>帳號密碼設定 </h2>
              </div>
              <div class="form">
                <div class="block">
                  <div class="f-row">
                    <div class="f-tit">帳號 </div>
                    <div class="f-content">
                      <div class="chg_box clearfix">
                        <input class="input-box" type="text" value="098888888888">
                        <button class="btn change-id" type="button">變更帳號</button>
                      </div>
                    </div>
                  </div>
                  <div id="change-id" class="bgColor mt20">
                    <div class="rows">
                      <div class="f-tit orange">請輸入新帳號 </div>
                      <div class="f-content">
                        <input class="input-box" type="text" placeholder="請輸入新的手機號碼或email">
                      </div>
                    </div>
                  </div>
                  <ul class="reset dot-style mt20">
                    <li>變更帳號須重新認證，若非必要請勿隨意更改</li>
                    <li>夥伴網與行動補習網帳號、密碼共用，一方更改另一方也會同步更改</li>
                  </ul>
                </div>
                <div class="block">
                  <div class="f-row">
                    <div class="f-tit">密碼 </div>
                    <div class="f-content">
                      <div class="chg_box clearfix">
                        <input class="input-box" type="text" value="098888888888">
                        <button class="btn change-password" type="button">變更密碼</button>
                      </div>
                    </div>
                  </div>
                  <div id="change-password" class="bgColor mt20">
                    <div class="rows">
                      <div class="f-tit orange">請輸入新密碼 </div>
                      <div class="f-content">
                        <input class="input-box" type="text" placeholder="請填入5至20個數字或英文字母 ">
                      </div>
                    </div>
                  </div>
                  <ul class="reset dot-style mt20">
                    <li>為保障您個人權益，請定期變更您的密碼</li>
                    <li>夥伴網與行動補習網帳號、密碼共用，一方更改另一方也會同步更改</li>
                  </ul>
                </div>
              </div>
            </section>
            <div class="g-button">
              <button class="btns grey" type="button">
                <span>
                  <i class="far fa-times-circle"></i> 取消更改</span>
              </button>
              <button class="btns" type="button">
                <span>
                  <i class="far fa-check-circle"></i> 儲存更改</span>
              </button>
            </div>
            <div class="btn-btm">
              <button class="btns blue" type="submit">下一步，填寫基本資料 </button>
            </div>
          </form>
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

    $(".side ul").mCustomScrollbar({
      axis: 'x',
      theme: 'dark-thin'
    });

    //變更帳號
    $('button.change-id').click(function(){
      $('#change-id').slideDown();
    });

    //變更密碼
    $('button.change-password').click(function(){
      $('#change-password').slideDown();
    });



  });
</script>
</body>
</html>