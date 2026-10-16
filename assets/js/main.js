document.addEventListener('DOMContentLoaded', function() {
    // Sticky Header functionality
    const header = document.getElementById('masthead');
    
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 150) {
                header.classList.add('is-sticky');
            } else {
                header.classList.remove('is-sticky');
            }
        });
    }

    // Mobile / Touch handling for Navigation Sub-Menu
    const menuItemsWithChildren = document.querySelectorAll('.main-navigation li.menu-item-has-children');

    menuItemsWithChildren.forEach(function(item) {
        const link = item.querySelector(':scope > a');
        if (!link) return;

        // Listen for click/touch on parent link
        link.addEventListener('click', function(e) {
            // Only apply on touch screens or mobile viewport (<= 768px)
            if (window.innerWidth <= 768 || ('ontouchstart' in window)) {
                // If the submenu is not yet open, toggle it open and prevent immediate navigation
                if (!item.classList.contains('is-touch-open')) {
                    e.preventDefault();
                    // Close siblings
                    menuItemsWithChildren.forEach(function(otherItem) {
                        if (otherItem !== item) {
                            otherItem.classList.remove('is-touch-open');
                        }
                    });
                    item.classList.add('is-touch-open');
                } else if (link.getAttribute('href') === '#' || link.getAttribute('href') === '') {
                    // If href is empty/#, just toggle close
                    e.preventDefault();
                    item.classList.remove('is-touch-open');
                }
            }
        });
    });

    // Close open touch menus when tapping outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.main-navigation')) {
            menuItemsWithChildren.forEach(function(item) {
                item.classList.remove('is-touch-open');
            });
        }
    });
});
