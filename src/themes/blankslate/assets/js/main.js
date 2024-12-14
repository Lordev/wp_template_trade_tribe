document.addEventListener('DOMContentLoaded', function () {
    /**
 * SliderControlleropp
     * @class
     * @classdesc SliderController class to handle slider functionality
     * @param {string} btnPrev - Previous button id
     * @param {string} btnNext - Next button id
     * @param {string} slider - Slider id
     */
    class SliderController {
        #slides = 0;
        #count = 0

        constructor(btnPrev, btnNext, slider) {
            this.btnPrev = document.getElementById(btnPrev);
            this.btnNext = document.getElementById(btnNext);
            this.slider = document.querySelector(`#${slider}`);
        }

        init() {
            this.slideAmount = this.slider;
            this.btnPrev.addEventListener('click', this.handlePrev.bind(this));
            this.btnNext.addEventListener('click', this.handleNext.bind(this));
            this.cloneSlides();
        }
        
        cloneSlides() {
            const slides = Array.from(this.slider.children);
            slides.forEach(slide => {
                const clone = slide.cloneNode(true);
                this.slider.appendChild(clone);
            });
            this.slideAmount = this.slider;
        }

        set slideAmount(parentEl) {
            this.#slides = parentEl.children.length;
        }

        handlePrev() {
            this.#count--;
            if (this.#count < 0) {
                this.slider.style.transition = 'none';
                this.#count = this.#slides / 2 - 1;
                this.slider.style.transform = `translateX(calc(-${this.#count} * 100% / ${this.#slides}))`;
                setTimeout(() => {
                    this.slider.style.transition = '';
                    this.#count--;
                    this.slider.style.transform = `translateX(calc(-${this.#count} * 100% / ${this.#slides}))`;
                }, 0);
            } else {
                this.slider.style.transform = `translateX(calc(-${this.#count} * 100% / ${this.#slides}))`;
            }
        }

        handleNext() {
            this.#count++;
            if (this.#count >= this.#slides / 2) {
                this.slider.style.transition = 'none';
                this.#count = 0;
                this.slider.style.transform = `translateX(calc(-${this.#count} * 100% / ${this.#slides}))`;
                setTimeout(() => {
                    this.slider.style.transition = '';
                    this.#count++;
                    this.slider.style.transform = `translateX(calc(-${this.#count} * 100% / ${this.#slides}))`;
                }, 0);
            } else {
                this.slider.style.transform = `translateX(calc(-${this.#count} * 100% / ${this.#slides}))`;
            }
        }
    }

    const slider = new SliderController('btn-prev-slider-cards', 'btn-next-slider-cards', 'slider-cards');
    const sliderTestimonials = new SliderController('btn-prev-slider-cards-testimonials', 'btn-next-slider-cards-testimonials', 'slider-cards-testimonials');

    slider.init();
    sliderTestimonials.init();
});