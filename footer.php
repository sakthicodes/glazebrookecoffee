<footer>
    <div class="footer-row">
        <div class="footer-left">
            <div class="footer-logo">
                <img src="./assets/img/logo.png" alt="Glazebrooke Coffee Logo" />
            </div>
        </div>
        <div class="footer-right">
            <div class="footer-contact">
                <div>Contact Us</div>
                <div>+91 1233456789</div>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="far fa-envelope"></i></a>
                </div>
            </div>

            <div class="footer-address">
                Address<br />
                xyz Street<br />
                chennai 600017
            </div>
            <div class="footer-links">
                <a href="./contact_us.php" class="footer-link-main">Partner with Us</a>
                <a href="./contact_us.php" class="footer-link-secondary">Give us your Feedback</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 Glazebrooke Coffee Estate. All rights reserved.
    </div>
</footer>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var discoverBtn = document.getElementById("discoverBtn");
        if (discoverBtn) {
            discoverBtn.onclick = function() {
                var welcome = document.getElementById("welcome");
                if (welcome) {
                    welcome.scrollIntoView({
                        behavior: "smooth"
                    });
                }
            };
        }
        const navbarToggle = document.getElementById("navbarToggle");
        const mainNav = document.getElementById("mainNav");
        if (navbarToggle && mainNav) {
            navbarToggle.addEventListener("click", function() {
                mainNav.classList.toggle("nav-open");
                navbarToggle.classList.toggle("open");
            });
        }
        // Sticky header on scroll
        window.addEventListener("scroll", function() {
            const header = document.querySelector("header");
            if (header) {
                if (window.scrollY > 10) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.coffeehand-swiper', {
            slidesPerView: 1,
            loop: true,
            speed: 600,
            effect: 'creative',
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: ['-100%', 0, 0],
                },
                next: {
                    translate: [0, 0, -400],
                },
            },
            navigation: {
                nextEl: '.coffeehand-next',
                prevEl: null,
            },
            allowTouchMove: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    });
</script>
</body>

</html>