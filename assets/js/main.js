document.addEventListener('DOMContentLoaded', function () {
    const root = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = document.querySelectorAll('.mobile-link');
    const certificateModal = document.getElementById('certificateModal');
    const certificateImage = document.getElementById('certificateModalImage');
    const certificateTitle = document.getElementById('certificateModalTitle');
    const certificateIssuer = document.getElementById('certificateModalIssuer');
    const certificateTriggers = document.querySelectorAll('[data-certificate-trigger]');
    const certificateCloseButtons = document.querySelectorAll('[data-certificate-close]');
    let activeCertificateTrigger = null;

    function setTheme(theme) {
        const isDark = theme === 'dark';
        root.classList.toggle('dark', isDark);
        localStorage.setItem('theme', theme);
    }

    if (themeToggle) {
        themeToggle.addEventListener('click', function () {
            setTheme(root.classList.contains('dark') ? 'light' : 'dark');
        });
    }

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function () {
            const isOpen = !mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden', isOpen);
            mobileMenuButton.setAttribute('aria-expanded', String(!isOpen));
        });

        mobileLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            });
        });
    }

    function openCertificateModal(trigger) {
        if (!certificateModal || !certificateImage || !certificateTitle || !certificateIssuer) {
            return;
        }

        activeCertificateTrigger = trigger;
        const title = trigger.dataset.certificateTitle || 'Certificate';
        const issuer = trigger.dataset.certificateIssuer || '';
        const image = trigger.dataset.certificateImage || '';

        certificateTitle.textContent = title;
        certificateIssuer.textContent = issuer;
        certificateImage.src = image;
        certificateImage.alt = title + ' certificate';
        certificateModal.classList.remove('hidden');
        certificateModal.classList.add('flex');
        certificateModal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');

        const closeButton = certificateModal.querySelector('[data-certificate-close]');
        if (closeButton) {
            closeButton.focus();
        }
    }

    function closeCertificateModal() {
        if (!certificateModal || certificateModal.classList.contains('hidden')) {
            return;
        }

        certificateModal.classList.add('hidden');
        certificateModal.classList.remove('flex');
        certificateModal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');

        if (certificateImage) {
            certificateImage.removeAttribute('src');
            certificateImage.alt = '';
        }

        if (activeCertificateTrigger) {
            activeCertificateTrigger.focus();
            activeCertificateTrigger = null;
        }
    }

    certificateTriggers.forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            openCertificateModal(trigger);
        });
    });

    certificateCloseButtons.forEach(function (button) {
        button.addEventListener('click', closeCertificateModal);
    });

    if (certificateModal) {
        certificateModal.addEventListener('click', function (event) {
            if (event.target === certificateModal) {
                closeCertificateModal();
            }
        });
    }

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeCertificateModal();
        }
    });

    if (window.AOS) {
        AOS.init({
            duration: 650,
            easing: 'ease-out-cubic',
            once: true,
            offset: 80
        });
    }
});
