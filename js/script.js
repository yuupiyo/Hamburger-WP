jQuery(function () {
  // menuボタンを押した時の挙動
  jQuery(".p-header__button").on("click", function () {
    jQuery(".c-grid__sidebar").removeClass("is-close");
    jQuery(".c-grid__sidebar").addClass("is-open");
    jQuery(".c-overlay").toggleClass("is-open");
    jQuery("body").toggleClass("fixed");
  });

  // ×ボタンを押した時の挙動
  jQuery(".p-sidebar__button").on("click", function () {
    jQuery(".c-grid__sidebar").removeClass("is-open");
    jQuery(".c-overlay").removeClass("is-open");
    jQuery("body").removeClass("fixed");
    jQuery(".c-grid__sidebar").addClass("is-close");
  });
});

jQuery(function () {
  jQuery(window).on("resize", function () {
    jQuery(".c-grid__sidebar").removeClass("is-open");
    jQuery(".c-grid__sidebar").removeClass("is-close");
    jQuery(".c-overlay").removeClass("is-open");
    jQuery("body").removeClass("fixed");
  });
});
