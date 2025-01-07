document.addEventListener('DOMContentLoaded', function () {
    /**
 * SliderControlleropp
     * @class
     * @classdesc SliderController class to handle slider functionality
     * @param {string} btnPrev - Previous button id
     * @param {string} btnNext - Next button id
     * @param {string} slider - Slider id`
     * @param {number} showSlides - Number of slides to show
     */
    class SliderController {
        #slides = 0;
        #count = 0

        constructor(btnPrev, btnNext, slider, showSlides = 1) {
            this.btnPrev = document.getElementById(btnPrev);
            this.btnNext = document.getElementById(btnNext);
            this.slider = document.querySelector(`#${slider}`);
            this.showSlides = showSlides;
        }

        init() {
            this.slideAmount = this.slider;
            this.btnPrev.addEventListener('click', this.handlePrev.bind(this));
            this.btnNext.addEventListener('click', this.handleNext.bind(this));
        }

        set slideAmount(parentEl) {
            this.#slides = parentEl.children.length;
        }

        transformSlide() {
            this.slider.style.transform = `translateX(calc(-${this.#count} * 100% / ${this.#slides}))`;
        }

        handlePrev() {
            if (this.#count <= 0) {
                this.#count = this.#slides - this.showSlides;
                this.transformSlide();
            } else {
                this.#count--;
                this.transformSlide();
            }
        }

        handleNext() {
            if (this.#count >= this.#slides - this.showSlides) {
                this.#count = 0;
                this.transformSlide();

            } else {
                this.#count++;
                this.transformSlide();
            }

        }
    }

    const slider = new SliderController('btn-prev-slider-cards', 'btn-next-slider-cards', 'slider-cards', 2);
    slider.init();

    const parentMarquee = document.querySelector(".marquee-wrapper");
    const adChildMarquee = document.querySelector(".marquee-content").cloneNode(true);
    parentMarquee.appendChild(adChildMarquee);


    const newsLetterForm = document.getElementById('newsletterForm');

    newsLetterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        newsLetterForm.innerHTML = `
            <div class="alert alert-success mt-3 text-success text-center" role="alert">
            <i class="fas fa-check-circle" style="font-size: 3rem; display: block; margin-bottom: 1rem;"></i>
            Thank you for subscribing to our newsletter. We will keep you updated with the latest news and updates.
            </div>`;
    });

    function handleResize() {
        const menu = document.getElementById('nav-menu');
        const existingBtnMenu = document.getElementById('btn-menu');
        if (window.innerWidth < 900) {
            if (!existingBtnMenu) {
                const template = `<div class="mobile-menu">
                    <button id="btn-menu" class="btn-menu">
                        <i class="fas fa-bars">`;
                const templateEnd = `</i>
                    </button>
                </div>`;
                menu.insertAdjacentHTML('beforebegin', template);
                menu.insertAdjacentHTML('afterend', templateEnd);
            }
        } else {
            if (existingBtnMenu) {
                existingBtnMenu.parentElement.remove();
            }
            menu.classList.remove('mobile-menu');
        }
    }

    window.addEventListener('resize', handleResize);
    handleResize();
});