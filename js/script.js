$(function() {
  // menuボタンを押した時の挙動
  $('.p-header__button').on('click', function() {
    $('.c-grid__sidebar').removeClass('is-close');
    $('.c-grid__sidebar').addClass('is-open');
    $('.c-overlay').toggleClass('is-open');
    $('body').toggleClass('fixed');
  });

  // ×ボタンを押した時の挙動
  $('.p-sidebar__button').on('click', function() {
    $('.c-grid__sidebar').removeClass('is-open');
    $('.c-overlay').removeClass('is-open');
    $('body').removeClass('fixed');
    $('.c-grid__sidebar').addClass('is-close');
  });  
});

$(function() {
  $(window).on('resize', function() {
    $('.c-grid__sidebar').removeClass('is-open');
    $('.c-grid__sidebar').removeClass('is-close');
    $('.c-overlay').removeClass('is-open');
    $('body').removeClass('fixed');
  });
});