$(document).ready(function(e) {
  /* 此為校稿頁面，非正式上線網站 */
  if (/^(demo|test)(\d*)?\./.test(location.hostname)) {
    var themeDir = ($('link[href*="assets/css/custom."][href*=".css"]').attr('href') || '').replace(/assets\/css\/custom.*.css(\?t=\d{0,})?/i, '');
    var announce = function() {
      setTimeout(function() {
        $.magnificPopup.open({
          items: {
            src: '<div class="white-popup"><div><strong>提醒您!</strong><br>本站為校稿測試用途<br>非正式上線網站，特此聲明</div></div>',
            type: 'inline'
          }
        });
      }, 1000);
    };

    $('head').append('<link>').children('link:last').attr({
      rel: 'stylesheet',
      id: 'magnific-popup-css',
      href: themeDir + 'assets/css/demo-website.css'
    });

    /* 判斷是否有載入 js */
    if ($('script[src*="assets/js/plugins/jQuery/jquery.magnific-popup-1.0.0."][src*=".js"]').index() === -1) {
      $.ajaxSetup({cache: true});
      $.getScript(themeDir + 'assets/js/plugins/jQuery/jquery.magnificpopup-1.1.0.min.js', function() {
        announce();
      });
    } else {
      announce();
    }
  }
});