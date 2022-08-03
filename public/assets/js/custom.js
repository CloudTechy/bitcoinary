(function ($) {
  "use strict";
  function site_search() {
    jQuery('a[href="#search"]').on("click", function (event) {
      jQuery("#search").addClass("open");
      jQuery('#search > form > input[type="search"]').focus();
    });
    jQuery("#search, #search button.close").on("click keyup", function (event) {
      if (event.target === this || event.target.className === "close") {
        jQuery(this).removeClass("open");
      }
    });
  }
  function video_responsive() {
    jQuery('iframe[src*="youtube.com"]').wrap(
      '<div class="embed-responsive embed-responsive-16by9"></div>'
    );
    jQuery('iframe[src*="vimeo.com"]').wrap(
      '<div class="embed-responsive embed-responsive-16by9"></div>'
    );
  }
  function magnific_popup() {
    jQuery(".mfp-gallery").magnificPopup({
      delegate: ".mfp-link",
      type: "image",
      tLoading: "Loading image #%curr%...",
      mainClass: "mfp-img-mobile",
      gallery: { enabled: true, navigateByImgClick: true, preload: [0, 1] },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      },
    });
  }
  function magnific_video() {
    jQuery(".mfp-video").magnificPopup({ type: "iframe" });
  }
  function popup_vertical_center() {
    jQuery(function () {
      function reposition() {
        var modal = jQuery(this),
          dialog = modal.find(".modal-dialog");
        modal.css("display", "block");
        dialog.css(
          "margin-top",
          Math.max(0, (jQuery(window).height() - dialog.height()) / 2)
        );
      }
      jQuery(".modal").on("show.bs.modal", reposition);
      jQuery(window).on("resize", function () {
        jQuery(".modal:visible").each(reposition);
      });
    });
  }
  function sticky_header() {
    if (jQuery(".sticky-header").length) {
      var sticky = new Waypoint.Sticky({ element: jQuery(".sticky-header") });
    }
  }
  function scroll_top() {
    jQuery("button.scroltop").on("click", function () {
      jQuery("html, body").animate({ scrollTop: 0 }, 1000);
      return false;
    });
    jQuery(window).on("scroll", function () {
      var scroll = jQuery(window).scrollTop();
      if (scroll > 900) {
        jQuery("button.scroltop").fadeIn(1000);
      } else {
        jQuery("button.scroltop").fadeOut(1000);
      }
    });
  }
  function input_type_file_form() {
    jQuery(document).on("change", ".btn-file :file", function () {
      var input = jQuery(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, "index.html").replace(/.*\//, "");
      input.trigger("fileselect", [numFiles, label]);
    });
    jQuery(".btn-file :file").on(
      "fileselect",
      function (event, numFiles, label) {
        var input = jQuery(this).parents(".input-group").find(":text"),
          log = numFiles > 10 ? numFiles + " files selected" : label;
        if (input.length) {
          input.val(log);
        } else {
          if (log) alert(log);
        }
      }
    );
  }
  function placeholderSupport() {
    jQuery.support.placeholder =
      "placeholder" in document.createElement("input");
    if (!jQuery.support.placeholder) {
      jQuery("[placeholder]")
        .on("focus", function () {
          if (jQuery(this).val() === jQuery(this).attr("placeholder"))
            jQuery(this).val("");
        })
        .blur(function () {
          if (jQuery(this).val() === "")
            jQuery(this).val(jQuery(this).attr("placeholder"));
        })
        .blur();
      jQuery("[placeholder]")
        .parents("form")
        .on("submit", function () {
          jQuery(this)
            .find("[placeholder]")
            .each(function () {
              if (jQuery(this).val() === jQuery(this).attr("placeholder")) {
                jQuery(this).val("");
              }
            });
        });
    }
  }
  function set_height() {
    if (jQuery(".demo-wraper").length) {
      windowHeight = jQuery(window).innerHeight();
      jQuery(".demo-wraper").css("min-height", windowHeight);
    }
  }
  function footer_fixed() {
    jQuery(".site-footer").css("display", "block");
    jQuery(".site-footer").css("height", "auto");
    var footerHeight = jQuery(".site-footer").outerHeight();
    jQuery(".footer-fixed > .page-wraper").css("padding-bottom", footerHeight);
    jQuery(".site-footer").css("height", footerHeight);
  }
  function accordion_active() {
    $(".acod-head a").on("click", function () {
      $(".acod-head").removeClass("acc-actives");
      $(this).parents(".acod-head").addClass("acc-actives");
      $(".acod-title").removeClass("acc-actives");
      $(this).parent().addClass("acc-actives");
      $(this).parents(".acod-head").attr("class");
    });
  }
  function cart_block() {
    jQuery(".cart-btn").on("click", function () {
      jQuery(".cart-dropdown-item-wraper").slideToggle("slow");
    });
  }
  function mobile_nav() {
    jQuery(".sub-menu").parent("li").addClass("has-child");
    jQuery(".mega-menu").parent("li").addClass("has-child");
    jQuery(
      "<div class=' glyphicon glyphicon-plus submenu-toogle'></div>"
    ).insertAfter(".has-child > a");
    jQuery(".has-child a+.submenu-toogle").on("click", function (ev) {
      jQuery(this)
        .next(jQuery(".sub-menu"))
        .slideToggle("fast", function () {
          jQuery(this).parent().toggleClass("nav-active");
        });
      ev.stopPropagation();
    });
  }
  function home_carousel_1() {
    jQuery(".home-carousel-1").owlCarousel({
      loop: true,
      margin: 15,
      nav: false,
      dots: true,
      navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 1 },
        480: { items: 1 },
        767: { items: 1, margin: 50 },
        1000: { items: 2 },
      },
    });
  }
  function home_logo_carousel() {
    jQuery(".home-logo-carousel").owlCarousel({
      loop: true,
      autoplay: true,
      margin: 0,
      nav: false,
      dots: false,
      navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 2 },
        480: { items: 3 },
        767: { items: 4 },
        1000: { items: 5 },
      },
    });
  }
  function clouds_moving() {
    jQuery(function () {
      jQuery(".clouds1").bgscroll({ scrollSpeed: 50, direction: "h" });
    });
  }
  function graph_moving() {
    jQuery(function () {
      jQuery(".graph-slide-image").bgscroll({
        scrollSpeed: 20,
        direction: "h",
      });
    });
  }
  function coin_moving() {
    jQuery(function () {
      jQuery(".coin-slide").bgscroll({ scrollSpeed: 10, direction: "v" });
    });
  }
  function equalheight(container) {
    var currentTallest = 0,
      currentRowStart = 0,
      rowDivs = new Array(),
      $el,
      topPosition = 0,
      currentDiv = 0;
    jQuery(container).each(function () {
      $el = jQuery(this);
      jQuery($el).height("auto");
      var topPostion = $el.position().top;
      if (currentRowStart != topPostion) {
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
          rowDivs[currentDiv].height(currentTallest);
        }
        rowDivs.length = 0;
        currentRowStart = topPostion;
        currentTallest = $el.height();
        rowDivs.push($el);
      } else {
        rowDivs.push($el);
        currentTallest =
          currentTallest < $el.height() ? $el.height() : currentTallest;
      }
      for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
        rowDivs[currentDiv].height(currentTallest);
      }
    });
  }
  function animate_content() {
    jQuery(".animate").scrolla({ mobile: false, once: true });
  }
  function progress_bar_tooltips() {
    jQuery(function () {
      jQuery('[data-toggle="tooltips"]')
        .tooltip({ trigger: "manual" })
        .tooltip("show");
    });
  }
  function progress_bar_width() {
    jQuery(window).on("scroll", function () {
      jQuery(".progress-bar").each(function () {
        progress_bar_width = jQuery(this).attr("aria-valuenow");
        jQuery(this).width(progress_bar_width + "%");
      });
    });
  }
  function select_box_form() {
    jQuery(".selectpicker").selectpicker();
  }
  function input_number_form() {
    jQuery("input[name='demo3']").TouchSpin();
  }
  function input_number_vertical_form() {
    jQuery("input[name='demo_vertical2']").TouchSpin({
      verticalbuttons: true,
      verticalupclass: "glyphicon glyphicon-plus",
      verticaldownclass: "glyphicon glyphicon-minus",
    });
  }
  function masonryBox() {
    if (jQuery().isotope) {
      var $container = jQuery(".portfolio-wrap");
      $container.isotope({
        itemSelector: ".masonry-item",
        transitionDuration: "1s",
        originLeft: true,
      });
      jQuery(".masonry-filter li").on("click", function () {
        var selector = jQuery(this).find("a").attr("data-filter");
        jQuery(".masonry-filter li").removeClass("active");
        jQuery(this).addClass("active");
        $container.isotope({ filter: selector });
        return false;
      });
    }
  }
  function bg_image_stellar() {
    jQuery(function () {
      jQuery.stellar({ horizontalScrolling: false, verticalOffset: 100 });
    });
  }
  function page_loader() {
    $(".loading-area").fadeOut(1000);
  }
  function color_fill_header() {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
      $(".is-fixed").addClass("color-fill");
    } else {
      $(".is-fixed").removeClass("color-fill");
    }
  }
  jQuery(document).ready(function () {
    site_search(),
      video_responsive(),
      magnific_popup(),
      magnific_video(),
      popup_vertical_center(),
      
      scroll_top(),
      input_type_file_form(),
      placeholderSupport(),
      set_height(),
      footer_fixed(),
      accordion_active(),
      cart_block(),
      mobile_nav(),
      
      clouds_moving(),
      graph_moving(),
      coin_moving();
  });
  jQuery(window).on("load", function () {
    equalheight(".equal-wraper .equal-col"),
      animate_content(),
      home_carousel_1(),
      sticky_header(),
      home_logo_carousel(),
      progress_bar_tooltips(),
      progress_bar_width(),
      select_box_form(),
      input_number_form(),
      input_number_vertical_form(),
      set_height(),
      masonryBox(),
      bg_image_stellar(),
      page_loader();
  });
  jQuery(window).on("scroll", function () {
    color_fill_header();
  });
  jQuery(window).on("resize", function () {
    footer_fixed(), set_height();
  });
  jQuery(document).on("submit", "form.cons-contact-form2", function (e) {
    e.preventDefault();
    var form = jQuery(this);
    jQuery.ajax({
      url: "http://thewebmax.com/bitinvest/form-handler.php",
      data: form.serialize() + "&action=contactform",
      type: "POST",
      dataType: "JSON",
      beforeSend: function () {
        jQuery(".loading-area").show();
      },
      success: function (data) {
        jQuery(".loading-area").hide();
        if (data["success"]) {
          jQuery(
            "<div class='alert alert-success'>" + data["message"] + "</div>"
          ).insertBefore("form.cons-contact-form2");
        } else {
          jQuery(
            "<div class='alert alert-danger'>" + data["message"] + "</div>"
          ).insertBefore("form.cons-contact-form2");
        }
      },
    });
    return false;
  });
  jQuery(document).on("submit", "form.cons-contact-form", function (e) {
    e.preventDefault();
    var form = jQuery(this);
    jQuery.ajax({
      url: "http://thewebmax.com/bitinvest/form-handler2.php",
      data: form.serialize() + "&action=contactform",
      type: "POST",
      dataType: "JSON",
      beforeSend: function () {
        jQuery(".loading-area").show();
      },
      success: function (data) {
        jQuery(".loading-area").hide();
        if (data["success"]) {
          jQuery(
            "<div class='alert alert-success'>" + data["message"] + "</div>"
          ).insertBefore("form.cons-contact-form");
        } else {
          jQuery(
            "<div class='alert alert-danger'>" + data["message"] + "</div>"
          ).insertBefore("form.cons-contact-form");
        }
      },
    });
    return false;
  });
})(window.jQuery);
