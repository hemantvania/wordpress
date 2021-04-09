<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class="ss-style-halfcircle" data-aos="flip-up">
        <div class="container">
            <div class="news-letter-box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="newslet-title">
                            <h5>Get the latest news and offers</h5>
                            <h3>Subscribe to Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="" class="mail-sent">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Your Email" class="form-control">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <svg id="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 C40 0 60 0 100 100 Z" />
        </svg>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="kasba-info">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/logo-white.png" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of typ.</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="web-links">
                        <h4>Important Links</h4>
                        <ul>
                            <li>
                                <a href="#">
                                Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                About Kasba
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Menus
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                HomeCatering
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                Group
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="web-links">
                        <h4>Popular Dishes</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    Fast Food
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Dessart Food
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Dinner
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Lunch
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Indian Food
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="web-links">
                        <h4>Latest Posts</h4>
                        <ul class="img-box">
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/footer-img/post-1.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/footer-img/post-2.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/footer-img/post-3.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/footer-img/post-4.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/footer-img/post-5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/footer-img/post-6.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="copy-right">
                        <p>@2021 Kasba All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="t-c-page">
                        <ul>
                            <li>
                                <a href="#">Ptivacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="booking-btn" data-aos="zoom-in-up">
        <a href="#">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/book-table-btn.png" alt="">
        </a>
    </div>    

<?php wp_footer(); ?>
<script>
	AOS.init({
	  duration: 1000
	});
</script>
<script>
	$(".mobilebar-tab-item").click(function () {
	  $(".mobilebar-tab-item").removeClass("active");
	  $(this).addClass("active");
	  $(".mobilebar-tab-overlay").css({
		left: $(this).prevAll().length * document.getElementById('applicationBarMobileButton1').clientWidth + 'px' 
	  });
	  
	  /*alert($(this).prevAll().length + " et " + document.getElementById('applicationBarMobileButton1').clientWidth);*/
	});
</script>
<script>
	// A Testimonials slider for a 
	// friend's (fb.com/computer.doctor.xanthi/) 
	// website i am developing

	// Made with awesome -> Owl Carousel 2:
	// https://github.com/OwlCarousel2/OwlCarousel2

	$(function () {
		$('.owl-carousel.testimonial-carousel').owlCarousel({
			nav: true,
			navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
			dots: false,
			responsive: {
				0: {
					items: 1,
				},
				750: {
					items: 1,
				}
			}
		});
	});
</script>

<script>
	var swiper = new Swiper('.swiper-container', {
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 1,
		spaceBetween: 10,
		// init: false,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		breakpoints: {
			640: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 40,
			},
			1024: {
				slidesPerView: 4,
				spaceBetween: 30,
			},
		}
	});
</script>
</body>
</html>
