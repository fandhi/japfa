$(document).ready(function() {

//scrollmenu
   $(window).scroll(function() {
      if ($(this).scrollTop() >= 99) {
         if (!$("#header").hasClass('active')) {
            TweenMax.to($("#header"), 0.01, {css: {'height': "108px"},
               onComplete: function() {
         $("#header").addClass('active');
               },
               ease: Cubic.easeIn
            });
            TweenMax.to($("#header .brand img"), 0.1, {"width": "97px"});
      }

      }
      else if ($(this).scrollTop() <= 100) {
         if ($("#header").hasClass('active')) {
            TweenMax.to($("#header"), 0.001, {'height': "146px"});
            TweenMax.to($("#header .brand img"), 0.5, {"width": "175px"});
         }
         $("#header").removeClass('active');
      }
   });
   //TAB
   $("#tab-1").show();
   $(".tabs ul.horizontal li").click(function() {
      var target = $(this).children("a").attr("href");
      $(".tabs.tab_big > div").hide();
      $(this).children("a").removeClass("active");
      $(target).show();
      $(this).children("a").addClass("active");
      return false;
   });
   $(".tabs ul.vertical li").click(function() {
      var target = $(this).children("a").attr("href");
      $(".tabs.tab_small > div").hide();
      $(this).children("a").removeClass("active");
      $(target).show();
      $(this).children("a").addClass("active");
      return false;
   });
   //SCROLL
   $('.jsPane').kinetic({
      velocity: 1000
   });
   $("#timeline .detail > div:first").show();
   $("#timeline .list-timeline ul li").click(function() {
      var id = $(this).attr("id");
      if (id != undefined)
      {
         $("#timeline .detail > div").hide();
		$("#timeline .list-timeline ul li").removeClass("active");
		$(this).addClass("active");
		$("#timeline .detail > div#"+id).show();
      }
})


   $('.scroll-pane').jScrollPane({showArrows: true});

   //SLIDER HOME
   $('.flexslider').flexslider({
      animation: "fade",
      controlNav: false
   });

   //BUTTON TAB
   $('.tabs_animate').tabslet({
      mouseevent: 'click',
      attribute: 'href',
      animation: true
   });
   //$("#animal-protein .tab_general > div").eq(2).show();
//$(".tab_general ul > li").eq(2).addClass("active");
$(".tab_general ul li > a").click(function(){
	var id = $(this).attr("href");
	
	if(id != undefined )
	{ 
    $(this).parents('ul').children('li').removeClass('active');
    $("#animal-protein .tab_general > div,#animal-protein .img-map > div").hide();
		$(".tab_general ul > li").removeClass("active");
		$("#animal-protein .tab_general > div"+id+",#animal-protein .img-map > div"+id).show();
		$(this).parent("li").addClass("active");
		return false;
	}
	
});
   
   //CLICK PERSON
   $('.grid_pstructure .click_more').click(function() {
      var temp = $(this);
      var filterNum = temp.parents(".grid_pstructure").attr('class').match(/\d+/);
      $('.ph_desc.phd_' + filterNum).fadeIn();

      $('.grid_pstructure .close_more').click(function() {
         $('.ph_desc.phd_' + filterNum).fadeOut();
      });
      return false;
   });
   //POP UP
   $(".fancybox").fancybox();
   //TOOL TIP
   $('#animal-protein .map_pointing').popover({
      html : true
   });


if(typeof tabClass != 'undefined') {
      $(".tab_general ul li > a[href='" + tabClass + "']").trigger('click');
   }
});//End document



//SLIDER GENERAL
$(".slider1").responsiveSlides({
   auto: true,
   nav: true,
   maxwidth: 800,
   speed: 800
});

