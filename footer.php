<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 foot-about">
                <div class="footer-col">
                    <!-- <h2>About</h2> -->
                    <a href="index.php" target="_blank"><img src="images/logo.png" class="foot-img"></a>
                    <p>Our ambition is to grow with the upcoming pharma industry by enhancing our innovation and implementing new technologies to produce CGMP machines in India.</br>So we would like to work closely with the pharma industry and to share our common experience and to frame appropriate machines under CGMP guidelines for India expeditiously</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="footer-col">
                    <h2>Application</h2>
                    <ul>
                        <li><a href="pharma.html">Pharma</a></li>
                        <li><a href="http://npmmachinery.com/lubeoil">Lube oil</a></li>
                        <li><a href="http://npmmachinery.com/homecare">Homecare</a></li>
                        <li><a href="http://npmmachinery.com/cosmetics">Cosmetics</a></li>
                        <li><a href="http://npmmachinery.com/agrochemical">Agrochemical</a></li>
                        <li><a href="http://npmmachinery.com/liquor_and_wine">Liquor & Wine</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="footer-col">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="about.html">Overview</a></li>
                        <li><a href="support.html">Support</a></li>
                        <li><a href="news_and_events.html">News & Events</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="footer-col">
                    <h2>Reach Us</h2>
                    <h4>V-Pack Machinery</h4>
                    <p>Plot No. 177,<br> Radheshyam Industrial Estate, </br> Opp. GVMM, S.P. Ring Road,<br> Ahmedabad – 382415, Gujarat, <br>India.</p>
                    <p>Tel: <a href="tel:919512007086">+91 9016775450</a></p>
                    <p>Email: <a href="mailto:vpackmachinery@gmail.com">vpackmachinery@gmail.com</a></p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-4 no-pad-right">
                    <p>&copy; <?php echo date("Y"); ?> V-Pack Machinery</p>                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>
</footer>
</main>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/sharer.min.js"></script>
<script type="text/javascript" src="js/map.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script>
    $("#overview_btn").click(function() {
        $("html, body").animate({
            scrollTop: $("#overview").offset().top - 150
        }, 2000);
        $(this).addClass('active');
    });
    $("#specification_btn").click(function() {
        $("html, body").animate({
            scrollTop: $("#specification").offset().top - 160
        }, 2000);
        $(this).addClass('active');
    });
    $("#feature_btn").click(function() {
        $("html, body").animate({
            scrollTop: $("#feature").offset().top - 120
        }, 2000);
        $(this).addClass('active');
    });
    $("#Request-a-quote_btn").click(function() {
        $("html, body").animate({
            scrollTop: $("#Request-a-quote").offset().top - 140
        }, 2000)
    });
</script>
<script>
    $(document).on("click", ".panel-heading span.clickable", function(n) {
        var l = $(this);
        l.hasClass("panel-collapsed") ? (l.parents(".panel").find(".panel-body").slideDown(), l.removeClass("panel-collapsed"), l.find("i").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down")) : (l.parents(".panel").find(".panel-body").slideUp(), l.addClass("panel-collapsed"), l.find("i").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up"))
    });

    $(document).ready(function() {
        $('a.btn-gallery').on('click', function(event) {
            event.preventDefault();
            var gallery = $(this).attr('href');
            $(gallery).magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            }).magnificPopup('open');
        });
    });
</script>

<script>
    $(document).ready(function() {
        var owl = $('#solution-carousel');
        owl.owlCarousel({
            items: 3,
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 3
                },
                769: {
                    items: 3
                }
            }
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    });
    $(document).ready(function() {
        var owl = $('#news-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                769: {
                    items: 1
                }
            }
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    });
    
    $(document).ready(function() {
        var owl = $('#testimonial-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    });
    $(document).ready(function() {
        var owl = $('#product-silder');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    });
    $(document).ready(function() {
        var owl = $('#new-launch');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    });
    $(document).ready(function() {
        var owl = $('#testimonials-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    });
</script>

</body>
</html>