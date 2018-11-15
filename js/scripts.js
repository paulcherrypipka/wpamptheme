jQuery(document).ready(function($) {

  var body = $('body'),
    wind = $(window),
    windW = wind.width(),
    windH = wind.height(),
    nav = $('#header .menu');

  sticky_nav();
  mobile_nav();
  view_all_pagina_button();
  feedback_box();
  fit_boxes();
  tags_shortcut();
  hide_categories();
  // Cache selectors
var lastId,
    topMenu = $(".article-summary ul"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top - 70;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});
  $(document).on('click', 'a[href^="#"]', function(event) {
    // Click events are captured before hashchanges. Timeout
    // causes offsetAnchor to be called after the page jump.
    window.setTimeout(function() {
      offsetAnchor();
    }, 0);
  });
  window.setTimeout(offsetAnchor, 0);

  wind.on('scroll resize', sticky_nav);

  wind.on('resize', function() {

    windW = wind.width();
    windH = wind.height();

  });

  function offsetAnchor() {
    if (location.hash.length !== 0) {
      window.scrollTo(window.scrollX, window.scrollY - 70);
    }
  }



// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
   }
});

  function fit_boxes() {

    var boxes = $('.section-boxes .row-boxes'),
      row_H;

    wind.on('load resize', function() {
      if (windW > 1024) {
        boxes.each(function() {
          row_H = $(this).find('.span-text').outerHeight();
          $(this).find('.span-image .wrap').css('height', row_H - 16 - 39);
        });
      } else {
        boxes.find('.span-image .wrap').css('height', '');
      }
    });

  }

  function hide_categories() {
    if($(".article-summary").length) {
      $('.sidebar .widget:nth-child(3)').remove();
    }
  }

  function feedback_box() {

    var btns = $('.module-feedback .btn');
    var frms = $('.module-feedback .feedback-form');

    frms.hide();

    btns.on('click', function() {

      // ev.preventDefault();
      btns.hide();

      if ($(this).hasClass("btn-positive")) {

        $('.feedback-positive').removeAttr('style');

      } else {

        $('.feedback-negative').removeAttr('style');

      }

    });

  }

  function view_all_pagina_button() {

    var href = window.location.href;
    var clean_href = href.split('page');

    $('<a href="' + clean_href[0] + 'view-all" class="page-numbers">View all</a>').insertAfter('.nav-links .next.page-numbers');

  }

  function mobile_nav() {

    // var nav = $('#header .menu');

    nav.find('li.menu-item-has-children').each(function() {

      $(this).prepend('<span class="nav-more">+</span>');

    });


    $('#menu-toggle').on('click', function() {

      nav.slideToggle();

    });

    var nav_more = $('.nav-more');

    nav_more.on('click', function() {

      $(this).siblings('ul.sub-menu').toggleClass('active').slideToggle();

    });

  }

  // make nav sticky
  function sticky_nav() {

    if (wind.width() > 980) {

      var nav_bar = $('#header'),
        scroll_top = wind.scrollTop();

      if (scroll_top >= 200) {
        body.addClass('sticky-nav');
        body.css("padding-top", '139px');
      } else {
        body.removeClass('sticky-nav');
        body.css("padding-top", '');
      }

      nav.css('display', '');

    } else {
      body.removeClass('sticky-nav');
      body.css("padding-top", '');
    }

  }

  function tags_shortcut() {
    var tag_list = $('.post-categories');
    var tag_list_items = $('.post-categories li');
    var tag_count = tag_list_items.length;

    if (tag_count >= 4) {
      tag_list.addClass('shortcut');
    }
  }


});
