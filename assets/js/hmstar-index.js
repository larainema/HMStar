
$(function() {

  var nav = $("#navFixed");

  var win = $(window);

  var sc = $(document);

  win.scroll(function() {

    if (sc.scrollTop() >= 150) {

      nav.addClass("hmstar-menu-fixednav");

      $("#mynav").fadeIn();

    } else {

      nav.removeClass("hmstar-menu-fixednav");

      $("#mynav").fadeIn();
    }

  });

});
