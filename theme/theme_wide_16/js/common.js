$(document).ready(function(){
  var tab = $('.tab li');

  tab.on('click', function(){
    var idx = $(this).index();
    var tab_con = $(this).parents('.tab_group').children('.tab_content').eq(idx);

    $(this).addClass('on');
    $(this).siblings().removeClass('on');
    tab_con.addClass('on');
    tab_con.siblings('.tab_content').removeClass('on');
  });

    //footer select //
    $('.select > a').on('click', function (e) {
      $(this).next('ul').stop().slideToggle(300);
      e.preventDefault();
  });
  $('.select > ul > li > a').on('click', function () {
      $(this).closest('ul').stop().slideUp(300);
  })
  
});
