var top_show = 500; // height of show Up button
var delay = 300; // time of scroll to top


$(document).ready(function() {

   var header = $("body > header");

   // scrolling
   $(window).scroll(function() {

      // fix menu and show Up on scroll
      if ($(this).scrollTop() > header.height() && $("nav").hasClass("absolute")) {
         $("nav").removeClass("absolute").addClass("fixed");
         $(".up").slideDown();
      } else
      if ($(this).scrollTop() <= header.height() && $("nav").hasClass("fixed")) {
         $("nav").removeClass("fixed").addClass("absolute");
         $(".up").slideUp();
      }
   });

   // fix menu and show Up by default
   if ($(this).scrollTop() > header.height() && $("nav").hasClass("absolute")) {
      $("nav").removeClass("absolute").addClass("fixed");
      $(".up").slideDown();
   }

   // smooth scroll to top
   $(".up").click(function() {
      $("body, html").animate({scrollTop: 0}, delay);
   });

   /* animate the content
   $(".row").addClass("hidden").viewportChecker({
      classToAdd: "visible animated fadeIn",
      offset: 200
   });*/

   // models tabs
   $(".list-nav li").click(function() {
      if ($(this).hasClass("active")) {
         $(".list-nav li").removeClass("active");
         $(".list-content").slideUp();
         x = $(this).index();
         $(".list-content").eq(x).slideUp();
         $(this).removeClass("active");
      } else {
         $(".list-nav li").removeClass("active");
         $(".list-content").slideUp();
         x = $(this).index();
         $(".list-content").eq(x).slideDown();
         $(this).addClass("active");
      }
   });

   var active;

   // marking active links
   $magicLine = $(".magic-line");
   $("nav a").each(function () {
      var location = document.location.href;
      var link = this.href;
      if (location == link) {
         active = $(this);
         $magicLine.css("left", active.position().left);
         $magicLine.css("width", active.css("width"));
      }
      var about_arr = ["http://audiview.local/content/feedback/", "http://audiview.local/content/dev/", "http://audiview.local/content/about/"];
      if (find(about_arr, location)) {

      }
   });

   // moving magicLine
   $(".navbar > li").hover(
      function() {
      $magicLine.animate({
         left: $(this).position().left,
         width: $(this).width()
      });
   }, function() {
      $magicLine.stop().animate({
         left: $magicLine.data("origLeft"),
         width: $magicLine.data("origWidth")
      });
   });
   // back magicLine to the active page
   $("nav, .submenu").hover(function() {}, function() {
      $magicLine.animate({
         left: active.position().left,
         width: active.css("width")
      });
   });

   // animate submenu
   $(".navbar > li").hover(
      function() {
      $(".submenu", this).slideDown();
   }, function() {
      $(".submenu", this).stop().animate();
      $(".submenu", this).slideUp();
   });

   $(".dropdown-button").click(function() {
      $(".dropdown-menu").slideToggle();
      $(".social").slideUp();
   });
   $("button[name=share]").click(function() {
      $(".social").slideToggle();
   });
   $("button[name=drop]").click(function() {
      $(".content-body").slideToggle("slow");
      $(".dropdown-menu").slideToggle();
   });


});

function info() {
   function User() {
      var fullName = "";
      function setFullName(name, surname) {
         //if ((name != "") && (surname != "")) {
            fullName = name + " " + surname;
         //}
         alert(fullName);
      }
      function getFullName() {
         return fullName;
      }
   }
   var user = new User();
   var name = document.getElementById("name").value;
   var surname = document.getElementById("surname").value;
   //alert(name + " " + surname);
   user.setFullName(name, surname);
   alert( user.getFullName() );
}
