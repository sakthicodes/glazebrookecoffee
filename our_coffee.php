<?php include './include/header.php'; ?>

<!-- Coffee Hero Section -->
<section class="coffee-hero-section">
    <img src="assets/img/ourcoffee_hero.png" alt="Coffee Cherries in Hands" class="coffee-hero-bg" />
    <div class="coffee-hero-content">
        <h1>Our Coffee</h1>
        <div class="coffee-hero-subtitle">Altitude, Artistry, and Aroma</div>
        <p class="coffee-hero-desc">
            At Glaze Brooke, coffee is more than a crop—it’s a craft. Every bean we produce carries the essence of the Servarayan Hills, nurtured by misty mornings, dappled sunlight, and rich, fertile soil. From harvest to drying, our meticulous processing methods ensure that every cup reflects the true character of our land. <br>
        </p>
        <p class="coffee-hero-desc">
            We employ three distinct coffee processing techniques, each shaping the flavor, aroma, and complexity of our beans in its own way.
        </p>
    </div>
</section>

<section class="washed-process-section">
    <div class="washed-process-content">
        <h2>Washed Process (Fully Washed / Wet Processed)</h2>
        <div class="washed-process-subtitle"> For those who love clarity in their cup, our washed coffee highlights bright acidity and crisp, refined flavors. </div>
        <div class="washed-process-cards">
            <div class="washed-process-card">01</div>
            <div class="washed-process-card">02</div>
            <div class="washed-process-card">03</div>
            <div class="washed-process-card">04</div>
        </div> <button class="washed-process-arrow"> <svg width="81" height="80" viewBox="0 0 81 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40.3076" cy="40" r="39.5" stroke="white" />
                <path d="M26.4893 18.9091L62.8529 43.7048L26.4893 64.7272" stroke="white" stroke-linecap="round" />
            </svg> </button>
    </div>
</section>


<section class="coffee-hand-section">
    <div class="swiper coffeehand-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./assets/img/beyond_slide_1.png" alt="Hands with Coffee Beans" />
            </div>
            <div class="swiper-slide">
                <img src="./assets/img/beyond_slide_2.png" alt="Hands with Coffee Beans" />
            </div>
            <div class="swiper-slide">
                <img src="./assets/img/beyond_slide_3.png" alt="Hands with Coffee Beans" />
            </div>
            <div class="swiper-slide">
                <img src="./assets/img/beyond_slide_4.png" alt="Hands with Coffee Beans" />
            </div>
            <div class="swiper-slide">
                <img src="./assets/img/beyond_slide_5.png" alt="Hands with Coffee Beans" />
            </div>
        </div>
        <div class="swiper-button-next coffeehand-next">
            <svg width="81" height="80" viewBox="0 0 81 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40.3076" cy="40" r="39.5" stroke="white" />
                <path d="M26.4893 18.9091L62.8529 43.7048L26.4893 64.7272" stroke="white" stroke-linecap="round" />
            </svg>
        </div>
    </div>
</section>


<section class="types-coffee-section">
    <h2 class="types-coffee-title">Types of Coffee</h2>
    <div class="swiper types-coffee-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-bottle="./assets/img/L2.png">
                <div class="types-coffee-card">
                    <span class="types-coffee-bottle"></span>
                    <div class="types-coffee-info">
                        <h3>Selection 9</h3>
                        <p>Deeply cared, honey-sweet, and floral. Our flagship Arabica, grown at high altitudes, handpicked and processed for clarity and complexity.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-bottle="./assets/img/L1.png">
                <div class="types-coffee-card">
                    <span class="types-coffee-bottle"></span>
                    <div class="types-coffee-info">
                        <h3>Chandragiri</h3>
                        <p>Balanced, smooth, and nutty. A modern Arabica hybrid, prized for its disease resistance and gentle, rounded cup profile.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-bottle="./assets/img/M.png">
                <div class="types-coffee-card">
                    <span class="types-coffee-bottle"></span>
                    <div class="types-coffee-info">
                        <h3>H R C</h3>
                        <p>(Hybrid Robusta Coffee)<br>Bold, creamy, and chocolatey. Our estate’s robusta, grown for body and crema, perfect for espresso blends.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-bottle="./assets/img/R1.png">
                <div class="types-coffee-card">
                    <span class="types-coffee-bottle"></span>
                    <div class="types-coffee-info">
                        <h3>Y M G</h3>
                        <p>(Yellow Maragogype)<br>Rare, large beans with delicate acidity and floral notes. A collector’s delight, grown in limited lots.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-bottle="./assets/img/R2.png">
                <div class="types-coffee-card">
                    <span class="types-coffee-bottle"></span>
                    <div class="types-coffee-info">
                        <h3>Selection 5 B</h3>
                        <p>Classic, sweet, and balanced. A heritage Arabica variety, celebrated for its smoothness and versatility.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="types-coffee-btn">
            Request a Sample Today
        </button>
    </div>
</section>


<section class="coffee-hand-section">
    <div>
        <img src="./assets/img/beyond_slide_1.png" alt="Hands with Coffee Beans" />
    </div>
</section>

<?php include './include/footer.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.types-coffee-swiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 3200,
                disableOnInteraction: false,
            },
            speed: 700,
            breakpoints: {
                600: {
                    slidesPerView: 2,
                    spaceBetween: 24
                },
                900: {
                    slidesPerView: 3,
                    spaceBetween: 32
                }
            },
            on: {
                slideChangeTransitionEnd: updateBottleImages,
                init: updateBottleImages
            }
        });

        function updateBottleImages() {
            var slides = document.querySelectorAll('.types-coffee-swiper .swiper-slide');
            slides.forEach(function(slide, idx) {
                var bottle = slide.getAttribute('data-bottle');
                var bottleSpan = slide.querySelector('.types-coffee-bottle');
                // Remove any previous img
                if (bottleSpan) {
                    bottleSpan.innerHTML = '';
                    bottleSpan.classList.remove('show-bottle');
                }
            });
            // Find the leftmost visible slide
            var activeIdx = swiper.activeIndex;
            var slidesPerView = swiper.params.slidesPerView;
            if (swiper.params.centeredSlides && slidesPerView > 1) {
                // For centeredSlides, leftmost is activeIndex - floor(slidesPerView/2)
                var leftIdx = (activeIdx - Math.floor(slidesPerView / 2) + slides.length) % slides.length;
            } else {
                var leftIdx = activeIdx;
            }
            var leftSlide = slides[leftIdx];
            if (leftSlide) {
                var bottle = leftSlide.getAttribute('data-bottle');
                var bottleSpan = leftSlide.querySelector('.types-coffee-bottle');
                if (bottleSpan) {
                    bottleSpan.innerHTML = '<img src="' + bottle + '" alt="" />';
                    bottleSpan.classList.add('show-bottle');
                }
            }
        }
    });
</script>