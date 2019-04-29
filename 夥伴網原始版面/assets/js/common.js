$(document).ready(function() {

  var UA = window.navigator.userAgent;
  var md = new MobileDetect(UA);
  
  var win  = $(window),
      $header = $('.header'),
      h_height = $header.outerHeight(),
      $gWrap = $('.g-wrap'),
      $overlay = $('.overlay'),
      $switch = $('.switch'),
      $menu = $('.menu'),
      $html = $('html,body'),
      $scrollUp = $('#scrollUp');

  //size change
  win.on('load resize orientationchange', function() {
    h_height = $header.outerHeight();

    $gWrap.css('margin-top', h_height);

    if($menu.find('a').next('ul').length>0){
      $menu.find('a').next('ul').siblings('a').find('i').show();
    }

    win.trigger('resize.px.parallax');

    if (md.mobile()){
      $html.css('cursor','pointer');
    } else {
      $html.css('cursor','default');
    }

  }).trigger('load resize orientationchange');

  //menu
  $switch.click(function(e){
    e.preventDefault();
    if(!$(this).hasClass('on') && !$overlay.is(':visible') && !$menu.hasClass('active')){
      $(this).addClass('on');
      $overlay.stop().fadeIn();
      setTimeout(function(){
        $menu.animate({
          'padding-top': h_height
        }, 300).addClass('active');
      }, 100);
    } else {
      $(this).removeClass('on');
      $overlay.stop().fadeOut();
      $menu.removeClass('active');
    }
  });
  
  $menu.find('a').click(function(e){
    var $t = $(this);
    if($t.next('ul').length>0 && $switch.is(':visible')){
      e.preventDefault();
      if(!$t.parent().hasClass('on')){
        $t.parent().addClass('on').find('ul').stop().slideToggle().end().siblings().removeClass('on').find('ul').slideUp();
      } else {
        $t.parent().removeClass('on').find('ul').stop().slideUp();
      }
    }

  });

  //scrollTop
  $scrollUp.myScroll({
    start: 100,
    className: 'on'
  });
  $scrollUp.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, 800);
  });

  //scroll-view
  showrole($('.showrole'));

  // mouseup
  $html.on('mouseup', function(e) {
    var target = e.target;
    e.preventDefault();
    var $ele = $('.menu, .switch');
    if (target !== $ele && $ele.has(target).length === 0 && $switch.hasClass('on')) {
      // if($switch.hasClass('on')){
        $switch.click();
      // }
    }
  });

});

//FUNCTION - SCROLL
$.fn.myScroll = function(options) {
  var target = $(this),
      win = $(window),
      oldTop = win.scrollTop(),
      newTop = win.scrollTop();
  
  var defaults = {
    start: 0,
    className: false,
    onAddClass: function() {
      return false;
    },
    onRemoveClass: function() {
      return false;
    }
  };
  
  var settings = $.extend({}, defaults, options);

  win.on('scroll resize', function() {
    newTop = win.scrollTop();
    if (newTop > settings.start) {
      target.addClass(settings.className);
      settings.onAddClass.call();
    } else {
      target.removeClass(settings.className);
      settings.onRemoveClass.call();
    }
    oldTop = newTop;
  }).trigger('scroll resize');
};

//FUNCTION - SCROLL-VIEW
var showrole = function(item) {
  item.each(function(i) {
    var $this = $(this);
    setTimeout(function() {
      $this.scrollView({
        threshold: 0
      });
    }, i * 100);
  });
};