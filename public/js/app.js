document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');

    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            const isHidden = menu.classList.toggle('hidden');
            toggle.setAttribute('aria-expanded', isHidden ? 'false' : 'true');
        });
    }

    initPagePreloader();
});

function initPagePreloader() {
    const preloader = document.getElementById('page-preloader');
    if (!preloader) {
        return;
    }

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const minDisplayMs = reducedMotion ? 0 : 1400;
    const fadeMs = reducedMotion ? 150 : 400;
    const startedAt = performance.now();
    let dismissed = false;

    const hidePreloader = () => {
        if (dismissed) {
            return;
        }

        dismissed = true;
        preloader.classList.add('page-preloader--hidden');
        document.body.classList.remove('is-loading');

        window.setTimeout(() => {
            preloader.remove();
        }, fadeMs);
    };

    const scheduleHide = () => {
        const elapsed = performance.now() - startedAt;
        const remaining = Math.max(0, minDisplayMs - elapsed);
        window.setTimeout(hidePreloader, remaining);
    };

    if (document.readyState === 'complete') {
        scheduleHide();
    } else {
        window.addEventListener('load', scheduleHide, { once: true });
    }
}
