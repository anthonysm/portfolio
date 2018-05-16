new WOW().init();

$('document').ready(function() {
  var trigger = $('#hamburger'),
    isClosed = true;

  trigger.click(function() {
    burgerTime();
  });

  function burgerTime() {
    if (isClosed == true) {
      trigger.removeClass('is-open');
      trigger.addClass('is-closed');
      isClosed = false;
    } else {
      trigger.removeClass('is-closed');
      trigger.addClass('is-open');
      isClosed = true;
    }
  }

});

function afficheMenu() {
  if ($('#gauche').hasClass('menuOuvert')) {
    $('#gauche').removeClass('menuOuvert');
  } else {
    $('#gauche').addClass('menuOuvert');
  }
}

$('.carousel').carousel()
