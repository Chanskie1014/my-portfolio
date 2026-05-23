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
        const imageAlt = trigger.dataset.certificateAlt || title + ' certificate';

        certificateTitle.textContent = title;
        certificateIssuer.textContent = issuer;
        certificateImage.src = image;
        certificateImage.alt = imageAlt;
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

    document.querySelectorAll('[data-gallery-carousel]').forEach(function (carousel) {
        const track = carousel.querySelector('[data-gallery-track]');
        const slides = Array.from(carousel.querySelectorAll('[data-gallery-slide]'));
        const previousButton = carousel.querySelector('[data-gallery-prev]');
        const nextButton = carousel.querySelector('[data-gallery-next]');
        const dots = Array.from(carousel.querySelectorAll('[data-gallery-dot]'));
        let updateFrame = null;

        if (!track || slides.length === 0) {
            return;
        }

        function slideLeft(index) {
            return slides[index].offsetLeft - track.offsetLeft;
        }

        function activeIndex() {
            return slides.reduce(function (closestIndex, slide, index) {
                const closestDistance = Math.abs(slideLeft(closestIndex) - track.scrollLeft);
                const currentDistance = Math.abs(slideLeft(index) - track.scrollLeft);
                return currentDistance < closestDistance ? index : closestIndex;
            }, 0);
        }

        function scrollToSlide(index) {
            const safeIndex = Math.max(0, Math.min(index, slides.length - 1));
            track.scrollTo({
                left: slideLeft(safeIndex),
                behavior: 'smooth'
            });
        }

        function updateCarousel() {
            updateFrame = null;
            const index = activeIndex();
            const atStart = track.scrollLeft <= 2;
            const atEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - 2;

            if (previousButton) {
                previousButton.disabled = atStart;
            }

            if (nextButton) {
                nextButton.disabled = atEnd;
            }

            dots.forEach(function (dot, dotIndex) {
                dot.classList.toggle('is-active', dotIndex === index);
            });
        }

        function requestCarouselUpdate() {
            if (updateFrame !== null) {
                return;
            }

            updateFrame = window.requestAnimationFrame(updateCarousel);
        }

        if (previousButton) {
            previousButton.addEventListener('click', function () {
                scrollToSlide(activeIndex() - 1);
            });
        }

        if (nextButton) {
            nextButton.addEventListener('click', function () {
                scrollToSlide(activeIndex() + 1);
            });
        }

        dots.forEach(function (dot) {
            dot.addEventListener('click', function () {
                scrollToSlide(Number(dot.dataset.galleryIndex || 0));
            });
        });

        track.addEventListener('scroll', requestCarouselUpdate, { passive: true });
        window.addEventListener('resize', requestCarouselUpdate);
        updateCarousel();
    });

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
