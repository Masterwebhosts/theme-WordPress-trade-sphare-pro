document.addEventListener('DOMContentLoaded', function () {

    const toggle = document.querySelector('.ts-menu-toggle');
    const navigation = document.querySelector('.ts-navigation');

    if (!toggle || !navigation) {
        return;
    }

    const screenReaderText = toggle.querySelector('.screen-reader-text');

    function closeMenu() {
        toggle.setAttribute('aria-expanded', 'false');
        navigation.classList.remove('is-open');

        if (screenReaderText) {
            screenReaderText.textContent = 'فتح القائمة';
        }
    }

    function openMenu() {
        toggle.setAttribute('aria-expanded', 'true');
        navigation.classList.add('is-open');

        if (screenReaderText) {
            screenReaderText.textContent = 'إغلاق القائمة';
        }
    }

    toggle.addEventListener('click', function () {

        const isOpen = toggle.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }

    });

    /*
     * Close when clicking outside the menu.
     */
    document.addEventListener('click', function (event) {

        const clickedInsideMenu =
            navigation.contains(event.target) ||
            toggle.contains(event.target);

        if (!clickedInsideMenu) {
            closeMenu();
        }

    });

    /*
     * Close with Escape.
     */
    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {
            closeMenu();
            toggle.focus();
        }

    });

    /*
     * Close when returning to desktop width.
     */
    window.addEventListener('resize', function () {

        if (window.innerWidth > 900) {
            closeMenu();
        }

    });

});