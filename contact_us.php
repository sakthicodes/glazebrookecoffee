<?php include 'header.php'; ?>


<section class="contactus-hero-section">
    <img src="assets/img/contact_hero.png" alt="Coffee Cherries in Hands" class="coffee-hero-bg" />
    <div class="contactus-hero-content">
        <h1>Contact Us</h1>
        <div class="contactus-hero-subtitle">Let’s Connect Over Coffee</div>
        <p class="contactus-hero-desc">
            We’d love to hear from you! Whether you're interested in sourcing our premium single-origin Arabica beans, learning more about our sustainable practices, or partnering with us to elevate your café’s coffee, the team at Glaze Brooke is here to help.
            <br>
        </p>

    </div>
</section>

<section class="partner-section">
    <div class="partner-container">
        <form class="partner-form">
            <div class="partner-form-row">
                <div class="partner-form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required />
                </div>
                <div class="partner-form-group">
                    <label for="phone">Phone no.</label>
                    <input type="text" id="phone" name="phone" />
                </div>
            </div>
            <div class="partner-form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
            </div>
            <div class="partner-form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Send</button>
        </form>
        <div class="partner-info">
            <h2>Partner With Us!</h2>
            <p>Reach out to us today and let’s craft something extraordinary together.</p>
        </div>
    </div>
</section>

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