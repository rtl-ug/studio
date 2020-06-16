            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
        </script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/animsition.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.pagepiling.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/TweenMax.min.js"></script>
        <script src="js/ScrollMagic.min.js"></script>
        <script src="js/animation.gsap.min.js"></script>
        <script src="js/jquery.viewport.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/script.js?ver=1306"></script>
        <script>
            $(document).ready(function() {
                $('.a-pagepiling').pagepiling({
                    scrollingSpeed: 100,
                    menu: '#menu',
                    loopTop: false,
                    loopBottom: false,
                    navigation: {
                        'position': 'right'
                    },
                    afterLoad: function(anchorLink, index) {
                        if(document.title == 'Home | RTL Development Studio'){
                            if (index == 1 || index == 3 || index == 5) {
                                // Section with dark bacgkrounds
                                $('body').addClass('dark-horizontal');
                            } else {
                                $('body').removeClass('dark-horizontal');
                            }
                        }
                    },
                    onLeave: function() {
                        $('.section.active .slide-bg-list .slide-bg').removeClass('active').eq(0).addClass('active')
                    }
                });

                $('.a-pp-prev').on('click', function() {
                    $.fn.pagepiling.moveSectionUp();
                });
                $('.a-pp-next').on('click', function() {
                    $.fn.pagepiling.moveSectionDown();
                });
            });
        </script>
    </body>
</html>
