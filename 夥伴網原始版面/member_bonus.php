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
              </i>待領訂單明細
              <span>每月15日公告上月訂單及獎金明細</span>
            </h2>
          </div>
          <table class="table big-table">
            <thead>
              <tr>
                <td>序號</td>
                <td>課程名稱</td>
                <td>訂單日期</td>
                <td>訂單金額</td>
                <td>回饋</td>
                <td>預計獎金</td>
                <td>訂購人</td>
                <td>狀態</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-tit="序號">1</td>
                <td data-tit="課程名稱">護理師考場優惠方案</td>
                <td data-tit="訂單日期">2018-08-09</td>
                <td data-tit="訂單金額">$ 3,290</td>
                <td data-tit="回饋"> 10%</td>
                <td data-tit="預計獎金">$ 329</td>
                <td data-tit="訂購人">王小明</td>
                <td data-tit="狀態">已退費，不計獎金</td>
              </tr>
              <tr>
                <td data-tit="序號">2</td>
                <td data-tit="課程名稱">國高中寒假特訓班</td>
                <td data-tit="訂單日期">2018-08-09</td>
                <td data-tit="訂單金額">$ 3,290</td>
                <td data-tit="回饋"> 10%</td>
                <td data-tit="預計獎金">$ 329</td>
                <td data-tit="訂購人">王小明</td>
                <td data-tit="狀態">分期付款，不計獎金</td>
              </tr>
              <tr>
                <td data-tit="序號">3</td>
                <td data-tit="課程名稱">學測落點分析</td>
                <td data-tit="訂單日期">2018-08-09</td>
                <td data-tit="訂單金額">$ 3,290</td>
                <td data-tit="回饋"> 10%</td>
                <td data-tit="預計獎金">$ 329</td>
                <td data-tit="訂購人">王小明</td>
                <td data-tit="狀態">課程延期，不計獎金</td>
              </tr>
              <tr>
                <td data-tit="序號">4</td>
                <td data-tit="課程名稱">鐵路特考大朝二千人</td>
                <td data-tit="訂單日期">2018-08-09</td>
                <td data-tit="訂單金額">$ 3,290</td>
                <td data-tit="回饋"> 10%</td>
                <td data-tit="預計獎金">$ 329</td>
                <td data-tit="訂購人">王小明</td>
                <td data-tit="狀態">OK</td>
              </tr>
              <tr>
                <td data-tit="序號">5</td>
                <td data-tit="課程名稱">護理師考場優惠方案</td>
                <td data-tit="訂單日期">2018-08-09</td>
                <td data-tit="訂單金額">$ 3,290</td>
                <td data-tit="回饋"> 10%</td>
                <td data-tit="預計獎金">$ 329</td>
                <td data-tit="訂購人">王小明</td>
                <td data-tit="狀態">OK</td>
              </tr>
            </tbody>
          </table>
          <p class="go-link"><i class="far fa-hand-point-right"></i>&nbsp;查詢&nbsp;<a href="" title="推廣獎金計算方式">推廣獎金計算方式</a></p>
        </section>
        <section class="sec clearfix">
          <div class="g-title">
            <h2 class="ti">
              <i>
                <img src="assets/images/m-ti2-img.jpg" alt="本次請領獎金">
              </i>待領獎金 </h2>
          </div>
          <div class="left">
            <ul class="reset dot-style">
              <li>
                <span class="t">本期獎金(含上月及前期未領獎金)</span>
                <span class="p">$ 1,200 </span>
              </li>
              <li>
                <span class="t">匯款手續費</span>
                <span class="p">$ 30</span>
              </li>
              <li>
                <span class="t">待扣所得稅</span>
                <span class="p">- </span>
              </li>
              <li>
                <span class="t">本期請款總額</span>
                <span class="p orange">$ 1,230 </span>
              </li>
            </ul>
            <div class="notice">
              <div class="tit">
                <img src="assets/images/m-ti2-img2-1.jpg" alt="請款注意事項 ">&nbsp;請款注意事項</div>
              <ul class="reset num-style">
                <li>每月15-25日可針對上個月以前的獎金進行請款，如12/15-12/25可請領11月(含)以及前期未請領的獎金。</li>
                <li>本期獎金金額需滿NT$500才可請領，未滿NT$500將併入下期獎金。</li>
                <li>本期獎金需一次請領，不得分次請領。依中華民國稅法規定，單筆超過NT$20,000將代扣所得稅10%。 </li>
              </ul>
            </div>
          </div>
          <div class="right">
            <div class="chart-wrap">
              <div class="icon">
                <img src="assets/images/icon-price.jpg" alt="">
              </div>
              <div class="price showrole scroll-fade">$
                <span class="count">1230</span>
              </div>
              <div class="txt">本期請款總額｜
                <a href="member_bonus_get.php" title="立即請款">立即請款</a>
              </div>
              <div class="chart showrole scroll-fade-up">
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <div class="bonus-history">
    <div class="container-1400 container clearfix">
      <div class="main-content">
        <div class="g-title">
          <h2 class="ti">
            <i>
              <img src="assets/images/m-ti2-img3.jpg" alt="已領取獎金明細 ">
            </i>已領取獎金明細
            <label class="select">
              <select>
                <option>2018</option>
                <option>2017</option>
              </select>
            </label>
          </h2>
        </div>
        <table class="table big-table">
          <thead>
            <tr>
              <td>序號</td>
              <td>課程名稱</td>
              <td>訂單日期</td>
              <td>訂單金額</td>
              <td>回饋</td>
              <td>預計獎金</td>
              <td>訂購人</td>
              <td>狀態</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-tit="序號">1</td>
              <td data-tit="課程名稱">護理師考場優惠方案</td>
              <td data-tit="訂單日期">2018-08-09</td>
              <td data-tit="訂單金額">$ 3,290</td>
              <td data-tit="回饋"> 10%</td>
              <td data-tit="預計獎金">$ 329</td>
              <td data-tit="訂購人">王小明</td>
              <td data-tit="狀態">已退費，不計獎金</td>
            </tr>
            <tr>
              <td data-tit="序號">2</td>
              <td data-tit="課程名稱">國高中寒假特訓班</td>
              <td data-tit="訂單日期">2018-08-09</td>
              <td data-tit="訂單金額">$ 3,290</td>
              <td data-tit="回饋"> 10%</td>
              <td data-tit="預計獎金">$ 329</td>
              <td data-tit="訂購人">王小明</td>
              <td data-tit="狀態">分期付款，不計獎金</td>
            </tr>
            <tr>
              <td data-tit="序號">3</td>
              <td data-tit="課程名稱">學測落點分析</td>
              <td data-tit="訂單日期">2018-08-09</td>
              <td data-tit="訂單金額">$ 3,290</td>
              <td data-tit="回饋"> 10%</td>
              <td data-tit="預計獎金">$ 329</td>
              <td data-tit="訂購人">王小明</td>
              <td data-tit="狀態">課程延期，不計獎金</td>
            </tr>
            <tr>
              <td data-tit="序號">4</td>
              <td data-tit="課程名稱">鐵路特考大朝二千人</td>
              <td data-tit="訂單日期">2018-08-09</td>
              <td data-tit="訂單金額">$ 3,290</td>
              <td data-tit="回饋"> 10%</td>
              <td data-tit="預計獎金">$ 329</td>
              <td data-tit="訂購人">王小明</td>
              <td data-tit="狀態">OK</td>
            </tr>
            <tr>
              <td data-tit="序號">5</td>
              <td data-tit="課程名稱">護理師考場優惠方案</td>
              <td data-tit="訂單日期">2018-08-09</td>
              <td data-tit="訂單金額">$ 3,290</td>
              <td data-tit="回饋"> 10%</td>
              <td data-tit="預計獎金">$ 329</td>
              <td data-tit="訂購人">王小明</td>
              <td data-tit="狀態">OK</td>
            </tr>
          </tbody>
        </table>
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

    //number run
    $('.chart-wrap .price').scrollView({
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