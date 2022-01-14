    @include('layout.inc_footer')
    @yield('js')
    
    <script>
        $('#linkMenuTop .nav-item').eq(0).addClass('active');
    </script>
    <script>
        $('#homeSlide').owlCarousel({
            loop: false,
            autoplay: true,
            margin: 0,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

</body>

</html>