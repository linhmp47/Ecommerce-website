(function($) {
    $(function() {
        $('.js-menuListItem').hover(
            function() {
                // hover vao
            var mParent = $(this).parent();
            mParent.addClass('Menu-list-item--active');

            }, 
            function() {
                // hover ra
                var mParent = $(this).parent();
                mParent.removeClass('Menu-list-item--active');
            }
        );
    });
})(jQuery);