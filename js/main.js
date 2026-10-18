$(document).ready(function () {
    // Target the phone menu items with the class 'menu-item'
    $('.menu-item .onclick-menu').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        var submenu = $(this).next('.onclick-menu-content');
        
        // Toggle the submenu
        submenu.slideToggle(300);
        
        // Close other submenus if any are open
        $('.onclick-menu-content').not(submenu).slideUp(300);
    });

    // Homepage: load the next 5 articles above the button, remove it when all are shown
    $('#more-news').on('click', function () {
        var $btn = $(this), offset = $btn.data('offset') || 5;
        $.get('/news.php', { offset: offset }, function (html) {
            $btn.before(html).data('offset', offset + 5);
            if (offset + 5 >= $btn.data('total')) $btn.remove();
        });
    });
});
