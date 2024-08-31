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
});
