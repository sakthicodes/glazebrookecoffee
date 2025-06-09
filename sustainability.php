<?php include 'header.php'; ?>


<section class="sustainability-hero-section">
    <img src="assets/img/sustainability_hero.png" alt="Coffee Cherries in Hands" class="coffee-hero-bg" />
    <div class="sustainability-hero-content">
        <h1>Sustainability</h1>
        <div class="sustainability-hero-subtitle">Brewing a Better Future</div>
        <p class="sustainability-hero-desc">
            At Glaze Brooke, sustainability is integral to our legacy. For over seven decades, our family has been committed to growing exceptional coffee while protecting the land that sustains it. A portion of our estate is dedicated to organic coffee, free from synthetic fertilizers and pesticides, ensuring purity and respect for the environment. <br>
        </p>
        <p class="sustainability-hero-desc">
            We embrace biodiversity, allowing wildlife to thrive alongside our coffee plants without barriers, creating a balanced ecosystem. Native trees shade our crops, enhancing flavor and preserving the land for future generations. We also prioritize water conservation, reusing water efficiently throughout our processes to minimize waste and protect this vital resource
        </p>

        <p class="sustainability-hero-desc">
            Choosing Glaze Brooke means supporting ethical farming, environmental stewardship, and coffee that’s as kind to the planet as it is exceptional in flavor.
        </p>
    </div>
</section>
<section class="spacing-section"></section>

<?php include 'footer.php'; ?>
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
                    slidesPerView: 3,
                    spaceBetween: 24
                },
                900: {
                    slidesPerView: 4,
                    spaceBetween: 32
                }
            },
            on: {
                slideChangeTransitionStart: updateBottleImages,
                init: updateBottleImages
            }
        });

        function updateBottleImages() {
            var slides = document.querySelectorAll('.types-coffee-swiper .swiper-slide');
            slides.forEach(function(slide) {
                var bottleSpan = slide.querySelector('.types-coffee-bottle');
                if (bottleSpan) {
                    bottleSpan.innerHTML = '';
                    bottleSpan.classList.remove('show-bottle');
                }
                slide.classList.remove('active-coffee-card');
            });

            // Show bottle only in the active (center) slide
            var activeSlide = document.querySelector('.types-coffee-swiper .swiper-slide.swiper-slide-active');
            if (activeSlide) {
                var bottle = activeSlide.getAttribute('data-bottle');
                var bottleSpan = activeSlide.querySelector('.types-coffee-bottle');
                if (bottleSpan && bottle) {
                    bottleSpan.innerHTML = '<img src="' + bottle + '" alt="" />';
                    bottleSpan.classList.add('show-bottle');
                }
                activeSlide.classList.add('active-coffee-card');
            }
        }
    });
</script>