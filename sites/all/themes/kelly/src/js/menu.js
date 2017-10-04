(function ($) {
  $(document).ready(function () {

    $('.menu-expander').click(
	    function () {
        $('.l-region--mobile-navigation').toggleClass('open');
				if($(".mean-nav ul").css("display") == "none"){
           $(".mean-nav ul:first").css("display", "block");
        } else {
          $(".mean-nav ul:first").css("display", "none");
        }
			}
    );

	});
})(jQuery);