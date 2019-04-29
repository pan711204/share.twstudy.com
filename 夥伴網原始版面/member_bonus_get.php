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
<link href="assets/css/custom_member_bonus.css" rel="stylesheet">
<link href="assets/css/plugin-magnific-popup.css" rel="stylesheet">
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
          <li class="now">
            <a href="member_bonus.php" title="獎金與成效">獎金與成效</a>
          </li>
          <li>
            <a href="member_profile.php" title="帳號管理">帳號管理</a>
          </li>
        </ul>
      </div>
      <?php include('side_member.php'); ?>
      <div class="main-content showrole scroll-fade-left">
        <?php include('page_breadcrumb.php'); ?>
        <section class="sec clearfix">
          <div class="g-title">
            <h2 class="ti">
              <i>
                <img src="assets/images/m-ti2-img.jpg" alt="本次請領獎金 ">
              </i>本次請領獎金 </h2>
          </div>
          <div class="left">
            <table class="table">
              <thead>
                <tr>
                  <td>項目</td>
                  <td>金額</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-left">本期獎金(含上月及前期未領獎金)</td>
                  <td class="text-right">$1,111</td>
                </tr>
                <tr>
                  <td class="text-left">匯款手續費</td>
                  <td class="text-right">$ 30</td>
                </tr>
                <tr>
                  <td class="text-left">代扣所得稅</td>
                  <td class="text-right">-</td>
                </tr>
                <tr>
                  <td class="text-left">本期請款總額</td>
                  <td class="text-right">
                    <span class="orange">$ 1,081 </span>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2">
                    <p class="orange">備註</p>
                    <p>因資料審核須3-5個工作天，為免有審核不及的狀況，建議您於本月先完成驗證，並於次月再 進行請款。</p>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="right">
            <div class="total">
              <div class="ti showrole scroll-fade">本期請款總額</div>
              <div class="price showrole scroll-fade">$
                <span class="count">1230</span>
              </div>
              <div class="g-button">
                <a class="btns get-bouns" href="#no-data" title="確認送出">
                  <span>確認送出</span>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<div class="pop mfp-hide">
  <!--彈跳-->
  <div class="noticeBox" id="pop-note">
    <p class="title">請款注意事項</p>
    <p>每月15-25日為請款期，首次請領獎金須先驗證身份及帳戶資訊；因資料審核須3-5個工作天，為免有審核不及的狀況，建議您於本月先完成驗證，並於次月再進行請款。</p>
    <div class="g-button">
      <a class="btns half" href="" title="立即驗證資料">
        <span>立即驗證資料</span>
      </a>
      <a class="btns half grey" href="" title="我已了解">
        <span>我已了解</span>
      </a>
    </div>
  </div>
  <!--尚未驗證-->
  <div class="noticeBox" id="no-data">
    <p class="text-center">您尚未完成請款資料認證，請先完成認證</p>
    <div class="g-button">
      <a class="btns" href="" title="立即驗證資料">
        <span>立即驗證資料</span>
      </a>
    </div>
  </div>
  <!--驗證成功-->
  <div class="noticeBox" id="data-checked">
    <p class="text-center">已收到您的請款資料，您的獎金將於本月25-31日匯入。</p>
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
<script src="assets/js/plugins/jQuery/jquery.magnificpopup-1.1.0.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.mCustomScrollbar-3.1.5.min.js"></script>
<script src="assets/js/common.js"></script>
<script>
  $(document).ready(function(e) {
    //彈出視窗
    setTimeout(function() {
      if ($('.pop').length > 0) {
        $.magnificPopup.open({
          items: {
            src: '#pop-note'
          },
          mainClass: 'mfp-fade',
          type: 'inline',
          fixedContentPos: true,
          fixedBgPos: true,
          overflowY: 'auto',
          preloader: false
        });
      }
    }, 800);

    //確認請款
    $('.get-bouns').magnificPopup({
      type: 'inline',
      fixedContentPos: true,
      fixedBgPos: true,
      mainClass: 'mfp-fade',
    });



    $(".side ul").mCustomScrollbar({
      axis: 'x',
      theme: 'dark-thin'
    });

    //number run
    $('.total .price').scrollView({
      threshold: 0,
      onAddClass: function() {

        var $ele = $(this).find('.count');
        var number = $ele.text();
        $ele.prop('count', 1).animate({
          count: number
        }, {
          duration: 1000,
          easing: 'swing',
          step: function(now) {
            var numText = (number % 1 !== 0 ? now.toFixed(1) : Math.round(now));
            $ele.text(numText);
          }
        });

      }
    });

  });
</script>
</body>
</html>