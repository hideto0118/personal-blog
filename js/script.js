jQuery(document).ready(function($) {

 //Logo animation
  var tl = new TimelineLite(),
    center = document.getElementById("logo_center"),
    left = document.getElementById("logo_left"),
    right = document.getElementById("logo_right"),
    logo = document.getElementById("logo");

  tl.add("start");

  tl.to(logo, 0.1, {
    opacity: 1,
    ease: Power0.easeNone
  }, "start");

  tl.fromTo(left, 2, {
    y: -300,
    scaleX: 1,
    scaleY: 1
  }, {
    y: 0,
    scaleX: 1.1,
    scaleY: 0.8,
    ease: Bounce.easeOut
  }, 'start');
  tl.to(left, 0.3, {
    scaleX: 1,
    scaleY: 1,
    ease: Circ.easeOut
  }, "start+=0.6");

  tl.fromTo(right, 2, {
    y: -300,
    scaleX: 1,
    scaleY: 1
  }, {
    y: 0,
    scaleX: 1.1,
    scaleY: 0.8,
    ease: Bounce.easeOut
  }, 'start+=1');
  tl.to(right, 0.3, {
    scaleX: 1,
    scaleY: 1,
    ease: Circ.easeOut
  }, "start+=1.6");

  tl.fromTo(center, 3.4, {
    y: -350,
    rotation: 360,
    transformOrigin:"center center"
  }, {
    y: 0,
    rotation: 0,
    ease: Bounce.easeOut
  }, 'start+=1.8');

  tl.timeScale(1.3);
  // tl.seek(0.8);


  //bar menu for smartphone
  $(".js-bar").on("tap", function(){
    var windowHeight = screen.height + "px";
    $(".js-bar").hide();
    $(".js-cross").show();
    $(".toggle-menu").animate({height: windowHeight});
    $("html").addClass("no-scroll");
    $("body").addClass("no-scroll");
  });

  $(".js-cross").on("tap", function(){
    $(".js-cross").hide();
    $(".js-bar").show();
    $(".toggle-menu").animate({height: "0px"});
    $(".toggle-menu-item-ul").animate({height: "0px"});
    $("html").removeClass("no-scroll");
    $("body").removeClass("no-scroll");
    isClicked = false;
    $(".sub-menu").animate({height: "0"});//Hide category child whe you  close smartphone menu
  });

  //toggle for Catefory in smartphone menu
  var isClicked = false;
  $(".js-toggle-menu-item-has-child").on("click", function(){
    if(isClicked){
      $(".sub-menu").animate({height: "0"});
      isClicked = false;
    }else{
      $(".sub-menu").animate({height: "200px"});
      isClicked = true;
    }
  });

  //hide loading message from jQuery-mobile
  $.mobile.ajaxEnabled = false;
  $.mobile.loading().hide();

  //Go to Top bttn in footer
  $(".js-go-top").on("click",function(){
    $("html, body").animate({ scrollTop: 0 }, 'slow');
  });

// Instagram API
  var token = '18754802.1677ed0.8593ecc506d346b49ccfcb21684b52dd',
      num_photos = 10;

  $.ajax({
    url: 'https://api.instagram.com/v1/users/self/media/recent',
    dataType: 'jsonp',
    type: 'GET',
    data: {access_token: token, count: num_photos},
    success: function(data){
      var imgSrc;
      var aHref;
      for( x in data.data ){
        imgSrc = data.data[x].images.low_resolution.url;
        aHref = data.data[x].link;
        console.log(aHref);
        $('.js-pictures-list').append('<li><a href="' + aHref + '"><img src="'+ imgSrc +'"></li>');
      }
    },
    error: function(data){
      console.log(data);
    }
  }); //Instagram API

  // var $titles = $(".article-title");
  var title;
  $(".js-article-title").each(function(){
    title = $(this).text();
    for(var i=0; i < title.length; i++){
      if(title.charCodeAt(i) >= 256) {
        $(this).addClass("JapaneseTitle");
        break;
      }
    }
  });

});