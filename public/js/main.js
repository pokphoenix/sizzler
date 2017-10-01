jQuery(document).ready(function($) {

    /*----------  Fixed Placeholder in browser not support  ----------*/

    if(!Modernizr.input.placeholder){
        $("input").each(function(){
          if($(this).val()=="" && $(this).attr("placeholder")!=""){
            $(this).val($(this).attr("placeholder"));
            $(this).focus(function(){
              if($(this).val()==$(this).attr("placeholder")) $(this).val("");
            });
            $(this).blur(function(){
              if($(this).val()=="") $(this).val($(this).attr("placeholder"));
            });
          }
        });
    }

    // Custom Select Dropdown
    var subNav = $('.phoinikas--subnav-1');
    var linkSubNav = $('.phoinikas--menu-1');
    var navMobile = $('.phoinikas--mobile-nav-main');

    $('.phoinikas--select-custom select').customSelect();

    $('.phoinikas--btn-policy').magnificPopup({
      type: 'ajax'
    });

    $('.phoinikas--hamburger-menu').on('click', function(){
      $(this).toggleClass('open');
      if($(this).hasClass('open')) {
        navMobile.addClass('show');
      } else {
        navMobile.removeClass('show');
        subNav.removeClass('show-subnav');
        linkSubNav.removeClass('active');
      }
    })


    /*=================================================
    =            Show/Hide submenu Phase 2            =
    =================================================*/

     $('.phoinikas--main-global-list li:not(:nth-child(1)) a, .phoinikas--body-main').on('mouseover touchstart', function(e){
      if(linkSubNav.hasClass('active')) {
        subNav.removeClass('show-subnav');
        $('.phoinikas--main-global-list a').removeClass('active');
      } else {
        return true;
      }
    })

    $('.phoinikas--menu-1').on('mouseover', function(e){
      if(linkSubNav.hasClass('active')) {
        return true;
      } else {
        subNav.addClass('show-subnav');
        $(this).addClass('active');
      }
    })

    // for touch device
    $('.phoinikas--menu-1').on('touchstart', function(e){
      if(linkSubNav.hasClass('active')) {
        return true;
      } else {
        e.preventDefault();
        $(this).addClass('active');
        subNav.addClass('show-subnav');
      }
    })

    // button close sub navigation for mobile
    $('.fa-chevron-left').on('touchstart', function(e){
      if(subNav.hasClass('show-subnav')) {
        e.preventDefault();
        subNav.removeClass('show-subnav');
        linkSubNav.removeClass('active');
      }
    })

    /*=====  End of Show/Hide submenu Phase 2  ======*/

    // International link
    var timeForMenuInterLink;

    $("#international-link")
    .on("mouseenter", function() {
        clearTimeout(timeForMenuInterLink);
        $("#div-international-link").slideDown(200);
    })
    .on("mouseleave", function() {
        timeForMenuInterLink = setTimeout(function(){
          $("#div-international-link").slideUp(200);
        }, 500);
    });

});
