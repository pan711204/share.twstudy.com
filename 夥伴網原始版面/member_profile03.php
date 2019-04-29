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
          <div class="box past">
            <div class="icon"> </div>
            <p class="en">Step 1</p>
            <p class="zh">帳號密碼設定</p>
          </div>
          <div class="box past">
            <div class="icon"> </div>
            <p class="en">Step 2</p>
            <p class="zh">填寫基本資料</p>
          </div>
          <div class="box now">
            <div class="icon"> </div>
            <p class="en">Step 3</p>
            <p class="zh">請款帳戶資料</p>
          </div>
        </div>
        <div class="profile-wrap">
          <form action="">
            <section class="sec clearfix">
              <div class="g-title">
                <h2 class="ti">
                  <i>
                    <img src="assets/images/m-ti3-img1.jpg" alt="身份資料 ">
                  </i>身份資料 </h2>
              </div>
              <ul class="reset dot-style">
                <li>請領獎金必須先填寫請款身分資料，行動夥伴網才能將獎金匯入您的帳戶。 </li>
                <li>請填寫以下資料並確認內容均為正確，每欄均為必填。 </li>
              </ul>
              <div class="form">
                <div class="block clearfix">
                  <div class="half left">
                    <div class="f-row">
                      <div class="f-tit">用戶姓名</div>
                      <div class="f-content">王小名</div>
                    </div>
                  </div>
                  <div class="half right">
                    <div class="f-row">
                      <div class="f-tit">身份證字號 </div>
                      <div class="f-content">
                        <input class="input-box" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block">
                  <div class="f-row">
                    <div class="f-tit">戶籍地址 </div>
                    <div class="f-content">
                      <div class="addbox">
                        <div class="select">
                          <select>
                            <option>請選擇縣市</option>
                          </select>
                        </div>
                        <div class="select">
                          <select>
                            <option>請選擇地區</option>
                          </select>
                        </div>
                        <div class="detail">
                          <input class="input-box" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="block">
                  <div class="tit">身分證影本上傳</div>
                  <div class="clearfix">
                    <div class="half left">
                      <div class="uploadWrap">
                        <div class="uploadbox">
                          <div class="preview-img">
                            <img class="img-fluid" src="https://fakeimg.pl/300x200/">
                          </div>
                          <label class="btn-reupload">
                            <input type="file">
                            <span>
                              <i></i> 重新上傳</span>
                          </label>
                          <!--<label class="btn-upload">
<input type="file">
<span>
<i></i> 選擇檔案上傳</span>
</label>-->
                        </div>
                        <div class="tit text-center">身份證正面影本預覽 </div>
                      </div>
                    </div>
                    <div class="half right">
                      <div class="uploadWrap">
                        <div class="uploadbox">
                          <!--<div class="preview-img"><img class="img-fluid" src="https://fakeimg.pl/300x200/"></div>-->
                          <label class="btn-upload">
                            <input type="file">
                            <span>
                              <i></i> 選擇檔案上傳</span>
                          </label>
                        </div>
                        <div class="tit text-center">身份證背面影本預覽 </div>
                      </div>
                    </div>
                  </div>
                  <ul class="reset dot-style bgColor">
                    <li>上傳圖檔須小於1MB，格式為jpg、jpeg、png </li>
                  </ul>
                </div>
                <div class="block">
                  <div class="tit">免扣取二代健保補充保費證明影本上傳</div>
                  <div class="uploadWrap">
                    <div class="uploadbox">
                      <!--<div class="preview-img"><img class="img-fluid" src="https://fakeimg.pl/300x400/"></div>-->
                      <!--<label class="btn-reupload">
<input type="file">
<span>
<i></i> 重新上傳</span>
</label>-->
                      <label class="btn-upload">
                        <input type="file">
                        <span>
                          <i></i> 選擇檔案上傳</span>
                      </label>
                    </div>
                    <div class="tit text-center">免扣取二代健保補充保費證明影本預覽 </div>
                  </div>
                  <div class="bgColor">
                    <ul class="reset dot-style">
                      <li>符合免扣取二代健保補充保費資格者，請上傳相關證明文件，例如：工會投保證明影本、第五類被保險人證明影本……等。
                        <a href="" title="二代健保相關法規連結" target="_blank">二代健保相關法規連結</a>
                      </li>
                      <li>上傳圖檔須小於1MB，格式為jpg、jpeg、png</li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
            <section class="sec clearfix">
              <div class="g-title">
                <h2 class="ti">
                  <i>
                    <img src="assets/images/m-ti3-img1.jpg" alt="帳戶資料 ">
                  </i>帳戶資料 </h2>
              </div>
              <ul class="reset dot-style">
                <li>請提供近3個月內有使用的本人帳戶 </li>
                <li>農會、漁會與信用合作社帳戶匯款常有失敗情況，請提供郵局或銀行帳戶。</li>
                <li>填寫帳號不需加上空格或任何符號，如 - </li>
              </ul>
              <div class="form">
                <div class="block">
                  <div class="f-row">
                    <div class="f-tit">用戶姓名</div>
                    <div class="f-content">王小名</div>
                  </div>
                </div>
                <div class="block">
                  <div class="clearfix">
                    <div class="half left">
                      <div class="f-row">
                        <div class="f-tit">總行 </div>
                        <div class="f-content">
                          <div class="select">
                            <select>
                              <option>請選擇地區</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="half right">
                      <div class="f-row">
                        <div class="f-tit">分行 </div>
                        <div class="f-content">
                          <div class="select">
                            <select>
                              <option>選擇縣市</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="f-row">
                    <div class="f-tit">帳號 </div>
                    <div class="f-content">
                      <input class="input-box" type="text">
                    </div>
                  </div>
                </div>
                <div class="bgColor">
                  <ul class="reset dot-style">
                    <li>提醒您，若因您填寫的請款帳戶資料有誤而導致匯款失敗，將從您的獎金中扣取300元做為行政費用，請您務必檢查確認帳戶資料正確。</li>
                    <li>請填寫「局號＋帳號」共14碼
                      <a href="" title="">(範例)</a>
                    </li>
                    <li>銀行帳戶：請填寫完整帳號
                      <a href="" title="">(範例)</a>
                    </li>
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
              <a class="btns grey" href="member_profile02.php" title="">上一步，填寫基本資料 </a>
              <button class="btns blue" type="button">完成，回會員中心首頁 </button>
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


  });
</script>
</body>
</html>