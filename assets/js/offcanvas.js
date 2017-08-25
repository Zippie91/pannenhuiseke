$(document).ready(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active');
    $('.toggleIcon').toggleClass('fa-angle-double-right');
    $('.toggleIcon').toggleClass('fa-angle-double-left');
  });
});