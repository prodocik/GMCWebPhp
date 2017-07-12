   <footer class="footer">
        <div class="box">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="about">About company</a></li>
                            <li><a href="/../">Rent RV</a></li>
                            <li><a href="location">Location</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <p>Business hours: Monday - Friday from 10 AM to 5 PM</p>
                        <p>7026 S Sweetwater Rd, Lithia Springs GA 30122</p>
                        <p><?php echo $phoneNumber; ?></p>
                        <a class="link" href="mailto:info@georgiamotorcoach.com">info@georgiamotorcoach.com</a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <ul class="nav soc">
                            <li>
                                <a href="https://www.facebook.com/georgiamotorcoach"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/georgiamotorcoach/"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footing">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <p class="copy">Copyright 2017 Georgia Motorcoach LLC, All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
    $(document).ready(function() {
        $objWindow = $(window);
          $('.panel-top .lang li:first-child').click(function() {
            $('.panel-top .lang li').css('display', 'block');
            $(this).addClass('active');
            var this_li = $(this);
            $(document).mouseup(function(e) {
                var div = $('.panel-top .lang');
                if (!div.is(e.target) && div.has(e.target).length === 0) {
                    $('.panel-top .lang li').css('display', 'none');
                    this_li.removeClass('active');
                    this_li.css('display', 'block');
                }
            });
            return false;
        });
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 8,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            arrows: true,
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }
            }]
        });
    });
    </script>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-98895274-1', 'auto');
    ga('send', 'pageview');
    </script>