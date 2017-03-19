(function ($) {
  $(document).ready(function () {

    $('#edit-field-category-value-wrapper label').click (
	    function() {
				$('.form-item-field-category-value').toggleClass('open');
				$('.form-item-field-food-type-value').removeClass('open');
			}
    );

    $('#edit-field-food-type-value-wrapper label').click (
	    function() {
				$('.form-item-field-food-type-value').toggleClass('open');
				$('.form-item-field-category-value').removeClass('open');
			}
    );

	});
})(jQuery);