const slider = document.querySelector('.accordion-wrapper');
if (slider) {
    const slides = Array.from(slider.querySelectorAll('.slide'));
    const lastIndex = slides.length - 1;

    slides.forEach((slideEl, currentIndex) => {
        slideEl.addEventListener('click', () => {
            slides.forEach((slide, i) => {
                slide.classList.remove('lb', 'rb', 'b-unset');

                if (i < currentIndex && i !== 0) {
                    slide.classList.add('lb');
                } else if (i > currentIndex && i !== lastIndex) {
                    slide.classList.add('rb');
                } else if (i !== currentIndex) {
                    slide.classList.add('b-unset');
                }
            });
        });
    });
}
