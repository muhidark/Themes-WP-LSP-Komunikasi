/**
 * Header Image Carousel Script for LSP Komunikasi
 * Handles slide transitions, autoplay, pause-on-hover, touch swipe, and progress indicator.
 */
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('lsp-header-carousel');
    if (!carousel) return;

    const track        = carousel.querySelector('.lsp-carousel-track');
    const slides       = Array.from(carousel.querySelectorAll('.lsp-carousel-slide'));
    const prevBtn      = carousel.querySelector('.lsp-carousel-prev');
    const nextBtn      = carousel.querySelector('.lsp-carousel-next');
    const dots         = Array.from(carousel.querySelectorAll('.lsp-carousel-dot'));
    const progressBar  = carousel.querySelector('.lsp-carousel-progress-bar');

    if (slides.length <= 1) {
        // Hanya 1 slide, sembunyikan kontrol navigasi
        if (prevBtn) prevBtn.style.display = 'none';
        if (nextBtn) nextBtn.style.display = 'none';
        if (dots.length) dots.forEach(d => d.parentElement.style.display = 'none');
        if (progressBar) progressBar.parentElement.style.display = 'none';
        return;
    }

    let currentIndex = 0;
    const totalSlides = slides.length;
    const isAutoplay = carousel.getAttribute('data-autoplay') === 'true';
    const intervalTime = parseInt(carousel.getAttribute('data-interval'), 10) || 5000;
    const effect = carousel.getAttribute('data-effect') || 'slide';
    let slideTimer = null;
    let isPaused = false;

    // Inisialisasi tampilan
    function updateSlide(newIndex) {
        if (newIndex === currentIndex && slides[currentIndex].classList.contains('active')) return;

        // Update active class on slides
        slides.forEach((slide, idx) => {
            if (idx === newIndex) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });

        // Translate track jika effect adalah slide
        if (effect === 'slide' && track) {
            track.style.transform = 'translateX(-' + (newIndex * 100) + '%)';
        }

        // Update Dots
        dots.forEach((dot, idx) => {
            if (idx === newIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });

        currentIndex = newIndex;
        resetProgressBar();
    }

    function nextSlide() {
        const nextIndex = (currentIndex + 1) % totalSlides;
        updateSlide(nextIndex);
    }

    function prevSlide() {
        const prevIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlide(prevIndex);
    }

    // Tombol Next & Prev
    if (nextBtn) {
        nextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            nextSlide();
            restartTimer();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function(e) {
            e.preventDefault();
            prevSlide();
            restartTimer();
        });
    }

    // Navigasi Dots
    dots.forEach((dot) => {
        dot.addEventListener('click', function(e) {
            e.preventDefault();
            const targetIndex = parseInt(this.getAttribute('data-slide'), 10);
            if (!isNaN(targetIndex) && targetIndex !== currentIndex) {
                updateSlide(targetIndex);
                restartTimer();
            }
        });
    });

    // Keyboard navigation (kiri & kanan)
    carousel.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            restartTimer();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            restartTimer();
        }
    });

    // Autoplay & Progress Bar
    function startProgressBar() {
        if (!progressBar || !isAutoplay) return;
        progressBar.style.transition = 'none';
        progressBar.style.width = '0%';
        void progressBar.offsetWidth; // Force reflow
        progressBar.style.transition = 'width ' + intervalTime + 'ms linear';
        progressBar.style.width = '100%';
    }

    function resetProgressBar() {
        if (!progressBar || !isAutoplay) return;
        progressBar.style.transition = 'none';
        progressBar.style.width = '0%';
        if (!isPaused) {
            setTimeout(startProgressBar, 20);
        }
    }

    function startTimer() {
        if (!isAutoplay) return;
        stopTimer();
        startProgressBar();
        slideTimer = setInterval(function() {
            if (!isPaused) {
                nextSlide();
            }
        }, intervalTime);
    }

    function stopTimer() {
        if (slideTimer) {
            clearInterval(slideTimer);
            slideTimer = null;
        }
    }

    function restartTimer() {
        stopTimer();
        if (isAutoplay && !isPaused) {
            startTimer();
        }
    }

    // Pause saat hover
    carousel.addEventListener('mouseenter', function() {
        isPaused = true;
        if (progressBar) {
            const computedWidth = window.getComputedStyle(progressBar).width;
            progressBar.style.transition = 'none';
            progressBar.style.width = computedWidth;
        }
    });

    carousel.addEventListener('mouseleave', function() {
        isPaused = false;
        restartTimer();
    });

    // Touch Swipe support untuk mobile / tablet
    let touchStartX = 0;
    let touchEndX = 0;

    carousel.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    carousel.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        const threshold = 40;
        if (touchEndX < touchStartX - threshold) {
            // Geser ke kiri -> slide berikutnya
            nextSlide();
            restartTimer();
        } else if (touchEndX > touchStartX + threshold) {
            // Geser ke kanan -> slide sebelumnya
            prevSlide();
            restartTimer();
        }
    }

    // Tab visibility handling (jeda jika tab browser tidak aktif agar timer tidak menumpuk)
    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            stopTimer();
        } else {
            restartTimer();
        }
    });

    // Jalankan timer awal
    if (isAutoplay) {
        startTimer();
    }
});

