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
<link href="assets/css/custom_contact.css" rel="stylesheet">
<link href="assets/css/plugin-slick.min.css" rel="stylesheet">
</head>
<body data-page="inner">
<?php include('page_header.php'); ?>
<div class="g-wrap">
  <div class="page-ban">
    <img class="img showrole scroll-fade" src="assets/images/ban-contact.jpg" alt="行動學習科技-行動夥伴網">
    <div class="words">
      <div class="title showrole scroll-fade-up">
        <p class="zh">專業課輔顧問</p>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container-1400 container clearfix">
      <?php include('page_breadcrumb.php'); ?>
      <div class="content-half">
        <div class="left">
          <!-- 側選單 -->
          <?php include('page_side_fqa.php'); ?>
        </div>
        <div class="right">
          <span class="msg-welcome" data-plugin="scroll-view">專業課輔顧問將為您以及您的推廣對象提供課程與考試諮詢，歡迎提出您的需求。</span>
          <section class="service-time">
            <div class="subtitle contact-time" data-plugin="scroll-view">
              <h3><span>線上與電話服務時間</span></h3>
            </div>
            <ul class="reset">
              <li data-plugin="scroll-view">
                <div class="inner-box" data-plugin="scroll-view">
                  <div class="pic"><img src="assets/images/contact-img1.png" alt="*"></div>
                  <div class="text">
                    <span class="tit">週一至週五</span>
                    上午&nbsp;9:00&nbsp;-&nbsp;晚上&nbsp;9:00 
                  </div>
                </div>
              </li>
              <li data-plugin="scroll-view">
                <div class="inner-box">
                  <div class="pic"><img src="assets/images/contact-img2.png" alt="*"></div>
                  <div class="text">
                    <span class="tit">週六至週日</span>
                    上午&nbsp;10:00&nbsp;-&nbsp;晚上&nbsp;8:00 
                  </div>
                </div>
              </li>
              <li data-plugin="scroll-view">
                <div class="inner-box">
                  <div class="pic"><img src="assets/images/contact-img3.png" alt="*"></div>
                  <div class="text">
                    <span class="tit">免付費電話</span>
                    0800-223-003
                  </div>
                </div>
              </li>
              <li data-plugin="scroll-view">
                <div class="inner-box">
                  <div class="pic"><a href="https://line.me/R/ti/p/%40zyx0072w" target="_blank"><img src="assets/images/contact-img4.png" alt="*"></a></div>
                  <div class="text">
                    <span class="tit">直接點擊或掃描QR Code</span>
                    加入好友後<br>就可直接LINE發問囉！
                  </div>
                </div>
              </li>
            </ul>
          </section>

          <section class="contact-form-wrap" data-plugin="scroll-view">
            <div class="subtitle contact-form" data-plugin="scroll-view">
              <h3><span>請留下您的問題，我們將儘快回覆您</span></h3>
            </div>
            <span class="msg-mustfill"><i class="star">*</i>為必填欄位</span>
            <form action="contact_us_form.php" name="form_contact">
              <div class="form-box form-half name">
                <span class="label-style">姓名<i class="star">*</i></span>
                <input type="text" name="fullname" class="input-style">
              </div>
              <div class="form-box form-half dir-l">
                <span class="label-style">電子郵件<i class="star">*</i></span>
                <input type="email" name="email" class="input-style">
              </div>
              <div class="form-box form-half dir-r">
                <span class="label-style">手機號碼<i class="star">*</i></span>
                <input type="tel" name="mobile" class="input-style">
              </div>
              <div class="form-box">
                <span class="label-style">問題主旨<i class="star">*</i></span>
                <input type="text" name="subject" class="input-style">
              </div>
              <div class="form-box">
                <span class="label-style">請詳述問題<i class="star">*</i></span>
                <textarea name="content" cols="30" rows="10" class="textarea-style"></textarea>
              </div>
              <div class="form-box">
                <span class="label-style">已加入會員<i class="star">*</i></span>
                <div class="form-gp">
                  <label class="radio-style" for="is_member_yes"><input type="radio" name="is_member" value="是" id="is_member_yes" checked><span><i></i></span>是</label>
                  <div class="is-member-account">
                    <span class="label-style">帳號</span>
                    <input type="text" name="account" class="input-style-line">
                  </div>
                  <label class="radio-style" for="is_member_no"><input type="radio" name="is_member" value="否" id="is_member_no"><span><i></i></span>否</label>
                </div>
              </div>
              <div class="form-box code">
                <div class="label-style">輸入驗證碼<i class="star">*</i></div>
                <input type="text" name="captcha" id="contact_code" class="input-style">
                <a href="javascript:void(0);" title="點擊更換驗證碼" class="codeimg"><img src="assets/images/del/code.jpg" alt="驗證碼"></a>
              </div>
              <div class="form-box">
                <span class="label-style">上傳附件</span>
                <div class="form-upload-file">
                  <div class="form-file">
                    <input type="text" name="file1" class="input-style">
                    <label for="file-upload1" class="btn-file-upload"><input type="file" id="file-upload1"/>選擇檔案</label>
                  </div>
                  <div class="form-file">
                    <input type="text" name="file2" class="input-style">
                    <label for="file-upload2" class="btn-file-upload"><input type="file" id="file-upload2"/>選擇檔案</label>
                  </div>
                  <div class="form-file">
                    <input type="text" name="file3" class="input-style">
                    <label for="file-upload3" class="btn-file-upload"><input type="file" id="file-upload3"/>選擇檔案</label>
                  </div>
                </div>
                <ul class="form-upload-msg">
                  <li>上傳的附件副檔名限為(.png、.gif、.bmp、.jpeg、.jpg、.txt、.doc、.docx、.pdf、.rar、.zip、.mp4、.mov、.m4a)</li>
                  <li>上傳的檔案容量最大為 5MB</li>
                  <li>最多可上傳3個附件</li>
                </ul>
              </div>
              <div class="btn-wrap">
                <button type="reset" class="btn-default btn-reset" title="清除重填"><span>清除重填</span></button>
                <button type="submit" class="btn-default btn-submit" title="確認送出"><span>確認送出</span></button>
              </div>
            </form>
          </section>

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
      onAddClass: function(element) {
      }
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

    // File
    $('.form-file input[type="file"]').on('change',function(){
      $(this).parent().siblings('input[type="text"]').attr('value',$(this).val());
    });

    // Service Time Equal Height
    var maxH = 0;
    $(window).on('resize',function(){
      setTimeout(function(){
        maxH = 0;
        $('.service-time .inner-box').height('auto');
        $('.service-time .inner-box').each(function(i, ele){
          maxH = Math.max(maxH, $(ele).height());
        });
        $('.service-time .inner-box').height(maxH);
      },250);
    }).trigger('resize');

  });
</script>
</body>
</html>