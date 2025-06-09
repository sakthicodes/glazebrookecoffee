<?php include 'header.php'; ?>


<section class="coffee-hero-section">
    <img src="assets/img/ourcoffee_hero.png" alt="Coffee Cherries in Hands" class="coffee-hero-bg" />
    <div class="coffee-hero-content">
        <h1>Our Coffee</h1>
        <div class="coffee-hero-subtitle">Altitude, Artistry, and Aroma</div>
        <p class="coffee-hero-desc">
            At Glaze Brooke, coffee is more than a crop—it's a craft. Every bean we produce carries the essence of the Servarayan Hills, nurtured by
            misty mornings, dappled sunlight, and rich, fertile soil. From harvest to drying, our meticulous processing methods ensure that every cup
            reflects the true character of our land. <br>
        </p>
        <p class="coffee-hero-desc">
            We employ three distinct coffee processing techniques, each shaping the flavor, aroma, and complexity of our beans in its own way.
        </p>
    </div>
</section>

<section class="washed-process-section">
    <div class="washed-process-content">
        <h2>Washed Process (Fully Washed / Wet Processed)</h2>
        <div class="washed-process-subtitle">
            For those who love clarity in their cup, our washed coffee highlights bright acidity and crisp, refined flavors.
        </div>
        <div class="washed-process-steps">
            <div class="washed-process-line">
                <div class="washed-process-line-progress"></div>
            </div>
            <div class="washed-process-cards">
                <div class="washed-process-card" data-step="1">
                    <div class="washed-process-num">01</div>
                    <div class="washed-process-dot"></div>
                    <div class="washed-process-title">Sorting &amp; Floating</div>
                    <div class="washed-process-desc">
                        Freshly picked cherries are sorted by hand or water flotation, removing under-ripe or defective beans.
                    </div>
                </div>
                <div class="washed-process-card" data-step="2">
                    <div class="washed-process-num">02</div>
                    <div class="washed-process-dot"></div>
                    <div class="washed-process-title">Depulping &amp; Fermentation</div>
                    <div class="washed-process-desc">
                        The outer skin is removed, and the beans undergo controlled fermentation for up to 48 hours, allowing natural enzymes to break
                        down residual fruit.
                    </div>
                </div>
                <div class="washed-process-card" data-step="3">
                    <div class="washed-process-num">03</div>
                    <div class="washed-process-dot"></div>
                    <div class="washed-process-title">Washing & Drying
                    </div>
                    <div class="washed-process-desc">Beans are thoroughly washed and then dried on raised beds or patios under careful monitoring
                    </div>
                </div>
                <div class="washed-process-card" data-step="4">
                    <div class="washed-process-num">04</div>
                    <div class="washed-process-dot"></div>
                    <div class="washed-process-title">Hulling</div>
                    <div class="washed-process-desc">
                        Once dried, the parchment layer is removed, unveiling the green coffee beans ready for roasting.</div>
                </div>
            </div>
        </div>
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


<?php
$coffee_types = [
    [
        'image' => './assets/img/c_bottle_1.png',
        'name' => 'Selection 9',
        'description' => 'A finely crafted blend, Selection 9 offers a well-rounded flavor profile with a smooth, aromatic finish. Its balanced acidity and rich body make it a true coffee connoisseur\'s delight.'
    ],
    [
        'image' => './assets/img/c_bottle_2.png',
        'name' => 'Chandragiri',
        'description' => 'A robust coffee with a bold and earthy flavor, offering a delightful interplay of bitterness and nutty undertones. Its full-bodied profile makes it ideal for espresso lovers.'
    ],
    [
        'image' => './assets/img/c_bottle_3.png',
        'name' => 'H R C',
        'description' => '(Hybrid Robusta Coffee)<br>The H R C coffee brings together bold, earthy flavors with a hint of spice. Its deep, full-bodied nature provides an intense, satisfying experience for those who appreciate a robust cup.'
    ],
    [
        'image' => './assets/img/c_bottle_4.png',
        'name' => 'Y M G',
        'description' => '(Yellow Maragogype)<br>Known for its delicate aroma and floral notes, Y M G offers a subtle sweetness with a smooth, silky texture. It\'s a perfect choice for those who prefer a refined and aromatic coffee experience.'
    ],
    [
        'image' => './assets/img/c_bottle_5.png',
        'name' => 'Selection 5 B',
        'description' => 'A blend of fine beans, Selection 5 B delivers a medium roast with a balanced flavor profile. Expect smooth notes of chocolate and mild acidity, perfect for a relaxing coffee break.'
    ]
];
?>

<section class="types-coffee-section">
    <h2 class="types-coffee-title">Types of Coffee</h2>
    <div class="row align-items-center gy-5 gy-lg-0">
        <div class="col-lg-4 " style="">
            <div class="highlight-item">

                <div>
                    <img src="" alt="">
                </div>
                <div>
                    <div class="title"></div>
                    <div class="description"></div>
                </div>

            </div>
        </div>
        <div class="col-lg-8">
            <div class="px-3 px-lg-0">
                <div class="types-coffee-swiper">
                    <?php foreach ($coffee_types as $coffee): ?>
                        <div class="item" data-bottle="<?php echo htmlspecialchars($coffee['image']); ?>">
                            <div class="types-coffee-card">
                                <span class="types-coffee-bottle"></span>
                                <div class="types-coffee-info">
                                    <h3><?php echo htmlspecialchars($coffee['name']); ?></h3>
                                    <p><?php echo $coffee['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <button class="types-coffee-btn">
        Request a Sample Today
    </button>
</section>


<section class="coffee-hand-section">
    <div>
        <img src="./assets/img/beyond_slide_1.png" alt="Hands with Coffee Beans" />
    </div>
</section>

<?php include 'footer.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        var items = document.querySelectorAll('.types-coffee-swiper .types-coffee-card');
        var maxHeight = 0;
        items.forEach(function(item) {
            var itemHeight = item.offsetHeight;
            if (itemHeight > maxHeight) {
                maxHeight = itemHeight;
            }
        });
        items.forEach(function(item) {
            // only desktop
            if (window.innerWidth > 768) {
                item.style.height = maxHeight + 200 + 'px';
            }
        });

        function highlightItem({
            displayIndex
        }) {

            let products = <?php echo json_encode($coffee_types); ?>;
            // if the displayIndex is less than 0, set it to 0
            console.log('displayIndex', displayIndex, 'product index', displayIndex - 2);
            if (displayIndex <= 1) {
                displayIndex = 6
            }
            let description = products[displayIndex - 2];
            document.querySelector('.highlight-item img').src = description.image ?? '';
            document.querySelector('.highlight-item .title').innerHTML = description.name ?? '';
            document.querySelector('.highlight-item .description').innerHTML = description.description ?? '';
        }

        var slider = tns({
            container: '.types-coffee-swiper',
            items: 3.5,
            autoplay: true,
            autoplayTimeout: 5000,
            speed: 1500,
            controls: false,
            startIndex: 1,
            autoplayButtonOutput: false,
            nav: false,
            mouseDrag: true,
            loop: true,
            center: false,
            gutter: 20,
            onInit: function(info, eventName) {
                console.log('info', info.displayIndex);
                highlightItem({
                    displayIndex: info.displayIndex
                });
            },
            responsive: {
                0: {
                    items: 1.5,
                },
                768: {
                    items: 3.5,
                }
            }
        });

        slider.events.on('transitionEnd', highlightItem);


        var steps = document.querySelectorAll('.washed-process-card');
        var line = document.querySelector('.washed-process-line-progress');
        var totalSteps = steps.length;
        var currentStep = 0;

        function animateProcessStep(step) {
            steps.forEach(function(card, idx) {
                if (idx <= step) {
                    card.classList.add('active');
                } else {
                    card.classList.remove('active');
                }
            });
            // Animate line width
            if (line && window.innerWidth > 900) {
                line.style.width = ((step) / (totalSteps - 1)) * 100 + '%';
            }
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                animateProcessStep(currentStep);
                currentStep++;
                setTimeout(nextStep, 1700);
            }
        }

        if (steps.length && line) {
            line.style.width = '0%';
            steps.forEach(card => card.classList.remove('active'));
            setTimeout(nextStep, 700);
        }

        // Responsive: reset line on resize
        window.addEventListener('resize', function() {
            if (window.innerWidth <= 900 && line) {
                line.style.width = '0%';
            }
        });

    });
</script>