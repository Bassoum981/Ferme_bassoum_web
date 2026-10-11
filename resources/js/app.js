document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.menu-toggle').forEach((toggle) => {
        const header = toggle.closest('.site-header');
        const mobileNav = header?.querySelector('.mobile-nav');

        if (!header || !mobileNav) return;

        toggle.addEventListener('click', () => {
            const isOpen = header.classList.toggle('menu-open');
            toggle.setAttribute('aria-expanded', String(isOpen));
            toggle.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
        });

        mobileNav.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                header.classList.remove('menu-open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Ouvrir le menu');
            });
        });
    });
});
