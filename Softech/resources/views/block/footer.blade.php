<div id="footer">
    <div class="footer-grid">
        <div class="footer-one">
            <h3>About Our Website</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore perferendis amet, molestiae dolores voluptas neque delectus repellendus doloribus molestias odio nisi dicta sequi magnam aspernatur eos aliquam, veniam quibusdam totam!</p>
            <div class="me">- Do The Trung, CEO</div>
        </div>
        <div class="footer-two">
            <h3>Keep Connected</h3>
            <ul class="footer-ul">
                <li class="footer-li">
                    <a href="#" class="fb">
                        Like us on Facebook
                    </a>
                </li>
                <li class="footer-li">
                    <a href="#" class="gg">
                        Add us on Google Us
                    </a>
                </li>
                <li class="footer-li">
                    <a href="#" class="tt">
                        Follow us on twitter
                    </a>
                </li>
                <li class="footer-li">
                    <a href="#" class="ig">
                        Follow us on instgram
                    </a>
                </li>
                <li class="footer-li">
                    <a href="#" class="pt">
                        Follow us on Printerest
                    </a>
                </li>

            </ul>
        </div>
        <div class="footer-three">
            <h3>Contact Information</h3>
            <ul>
                <li class="home">
                    MINAWORKS COMPANY
                </li>
                <li class="email">
                    contact@gmail.com
                </li>
                <li class="phone">
                    +84905889988
                </li>
                <li class="location">
                    SUNRISE BULDING 25 2/9
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</body>
<script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "fade"
        });

        $(function() {
            $('.show_menu').click(function(){
                $('.menu').fadeIn();
                $('.show_menu').fadeOut();
                $('.hide_menu').fadeIn();
            });
            $('.hide_menu').click(function(){
                $('.menu').fadeOut();
                $('.show_menu').fadeIn();
                $('.hide_menu').fadeOut();
            });
        });
    });
</script>
</html>