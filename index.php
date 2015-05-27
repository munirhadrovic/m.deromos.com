<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
        <title>DeRomo's Gourmet Market & Restaurant</title>
		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
				$(function(){
				$('#menu1').slicknav({
					prependTo:'#navigation-menu1'
				});
			});
					$(function(){
				$('#menu2').slicknav({
					prependTo:'#navigation-menu2'
				});
			});
					$(function(){
				$('#menu3').slicknav({
					prependTo:'#navigation-menu3'
				});
			});
					$(function(){
				$('#menu4').slicknav({
					prependTo:'#navigation-menu4'
				});
			});
					$(function(){
				$('#menu5').slicknav({
					prependTo:'#navigation-menu5'
				});
			});
					$(function(){
				$('#menu6').slicknav({
					prependTo:'#navigation-menu6'
				});
			});
					$(function(){
				$('#menu7').slicknav({
					prependTo:'#navigation-menu7'
				});
			});
					$(function(){
				$('#menu8').slicknav({
					prependTo:'#navigation-menu8'
				});
			});
					$(function(){
				$('#menu9').slicknav({
					prependTo:'#navigation-menu9'
				});
			});
					$(function(){
				$('#menu10').slicknav({
					prependTo:'#navigation-menu10'
				});
			});
					$(function(){
				$('#menu11').slicknav({
					prependTo:'#navigation-menu11'
				});
			});
					$(function(){
				$('#menu12').slicknav({
					prependTo:'#navigation-menu12'
				});
			});
					$(function(){
				$('#menu13').slicknav({
					prependTo:'#navigation-menu13'
				});
			});
            $(function(){
                $('#menu14').slicknav({
                    prependTo:'#navigation-menu14'
                });
            });
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function() { 
		    	var s = document.createElement("script");s.async = true;s.onload = s.onreadystatechange = function(){getYelpWidget("boo-boo-records-inc-san-luis-obispo","300","RED","y","y","2");};s.src='http://chrisawren.com/widgets/yelp/yelpv2.js' ;var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);})
		    ();
    	</script>
    	<div id="fb-root"></div>
		    <script>
		   $(function(d, s, id) {
      			var js, fjs = d.getElementsByTagName(s)[0];
      			if (d.getElementById(id)) return;
      			js = d.createElement(s); js.id = id;
      			js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.0";
      			fjs.parentNode.insertBefore(js, fjs);
    		}(document, 'script', 'facebook-jssdk'));</script>

	</head>
	<body>
		
		<?php 
			include 'settings.php';
		?>

		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><a href="#page1"><img src="img/logo.png" alt="LOGO"></a></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
			<h1>Powered by <a href="http://mobilegrows.com/" rel="external">MobileGrows</a> | <a href="http://furniturestorenaples.com/" rel="external">Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slider1.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider2.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider3.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/slider4.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider5.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider6.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider7.jpg" alt="">
                            <!-- <p class="caption">This is a caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-b" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn velikodugme buttons-radius" href="tel:<?php echo $telephone ?>"><img src="img/call-01.png" alt="" style="width: 37px; padding-top: 5px;"></a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'>";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	
					<div class="ui-block-c"><a class="ui-btn velikodugme buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>"><img src='img/mail.png' style='width: 37px; padding-top: 10px;'></a></div>   
				</fieldset>
              <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                <h3>About</h3>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#what" data-transition="<?php echo $transitionefect ?>">What's In a Name?</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#career" data-transition="<?php echo $transitionefect ?>">Career Oppurtunities</a>

                            </div>
              <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                  <h3>Market</h3>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#bake" data-transition="<?php echo $transitionefect ?>">Bake Shop&Coffee Bar</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#pizzeria" data-transition="<?php echo $transitionefect ?>">Pizzeria</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#chees" data-transition="<?php echo $transitionefect ?>">Cheese Shop</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#deli" data-transition="<?php echo $transitionefect ?>">Deli</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#fish" data-transition="<?php echo $transitionefect ?>">Fish&Seaford</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#meet" data-transition="<?php echo $transitionefect ?>">Meet&Poultry</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#food" data-transition="<?php echo $transitionefect ?>">Prepared Foods</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#gourmet" data-transition="<?php echo $transitionefect ?>">Gourmet To-Go</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#lighting" data-transition="<?php echo $transitionefect ?>">Produce</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#mirrors" data-transition="<?php echo $transitionefect ?>">SpecialtyGroceryItems</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#rugs" data-transition="<?php echo $transitionefect ?>">Wines&Spirits</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#tables" data-transition="<?php echo $transitionefect ?>">Gift Baskets&Floral Center</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#wall" data-transition="<?php echo $transitionefect ?>">Market Menu</a>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a>
                  </div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#catering" data-transition="<?php echo $transitionefect ?>">Catareing</a>
                  </div>
              </div>
              <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                  <h3>Articles</h3>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#event" data-transition="<?php echo $transitionefect ?>">Event Calendar</a>
                  <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#photo" data-transition="<?php echo $transitionefect ?>">Photo Gallery</a>

              </div>
             <!-- <div id="otw_widget-2" class="otw-shadow-dark-style widget open-table-widget"><h2 class="otw-widget-title widgettitle">Reservations:</h2>
                  <div class="otw-shadow-dark">


                      <div class="otw-widget-form-wrap">
                          <form method="get" class="otw-widget-form" action="http://www.opentable.com/restaurant-search.aspx" target="_blank">
                              <div class="otw-wrapper">

                                  <div class="otw-date-li otw-input-wrap">
                                      <label for="date-otw_widget-2">Date</label>
                                      <input id="date-otw_widget-2" name="startDate" class="otw-reservation-date" type="text" value="" autocomplete="off">
                                  </div>
                                  <div class="otw-time-wrap otw-input-wrap">
                                      <label for="time-otw_widget-2">Time</label>
                                      <select id="time-otw_widget-2" name="ResTime" class="otw-reservation-time selectpicker">
                                          <option value="5:00pm">5:00 pm</option>
                                          <option value="5:30pm">5:30 pm</option>
                                          <option value="6:00pm">6:00 pm</option>
                                          <option value="6:30pm">6:30 pm</option>
                                          <option value="7:00pm" selected="selected">7:00 pm</option>
                                          <option value="7:30pm">7:30 pm</option>
                                          <option value="8:00pm">8:00 pm</option>
                                          <option value="8:30pm">8:30 pm</option>
                                          <option value="9:00pm">9:00 pm</option>
                                          <option value="9:30pm">9:30 pm</option>
                                          <option value="10:00pm">10:00 pm</option>
                                          <option value="10:30pm">10:30 pm</option>
                                          <option value="11:00pm">11:00 pm</option>
                                          <option value="11:30pm">11:30 pm</option>
                                      </select>

                                  </div>
                                  <div class="otw-party-size-wrap otw-input-wrap">
                                      <label for="party-otw_widget-2">Party Size</label>
                                      <select id="party-otw_widget-2" name="partySize" class="otw-party-size-select selectpicker">
                                          <option value="1">1 Person</option>
                                          <option value="2" selected="selected">2 People</option>
                                          <option value="3">3 People</option>
                                          <option value="4">4 People</option>
                                          <option value="5">5 People</option>
                                          <option value="6">6 People</option>
                                          <option value="7">7 People</option>
                                          <option value="8">8 People</option>
                                          <option value="9">9 People</option>
                                          <option value="10">10 People</option>
                                      </select>

                                  </div>

                                  <div class="otw-button-wrap">
                                      <input type="submit" class="otw-submit-btn" value="Find a Table">
                                  </div>
                                  <input type="hidden" name="RestaurantID" class="RestaurantID" value="140050">
                                  <input type="hidden" name="rid" class="rid" value="140050">
                                  <input type="hidden" name="GeoID" class="GeoID" value="15">
                                  <input type="hidden" name="txtDateFormat" class="txtDateFormat" value="MM/dd/yyyy">
                                  <input type="hidden" name="RestaurantReferralID" class="RestaurantReferralID" value="140050">
                              </div>
                          </form>
                          <div class="powered-by-open-table"><span class="powered-by-text">Powered By:</span></div>
                      </div><!-- /.otw-widget-form-wrap -->
                  </div>
              </div> -->
		  </div>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- catering ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="catering" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                          	<li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/catering.jpg" alt style="padding-left:10px;padding-top: 10px;">
					<h3>CATERING SERVICES</h3>
                    <p>LET US DO THE WORK SO YOU CAN ENJOY THE PARTY!</p>
                    <img src="img/catering1.jpg" alt style="padding-left:10px;">
                    <p>DeRomo’s catering services extend our gourmet market and dining experience to family gatherings, extravagant banquets, weddings, graduations, holiday parties, corporate functions, national conferences and other special events. We provide full catering services including in-house and off-premise catering for 25 to 1,000 people with the ability to create a tailored catering menu for all your catering needs.

                        Whether you’re planning a five-course dinner for your organization’s banquet or you want top-quality food for your next family reunion, we’ve got you covered with our catering services.

                        Check back soon to see our full menu of catering services!

                        We also offer Gourmet To Go foods in our Market, including hot and cold party platters to accommodate any event!

                        If you are interested in knowing more about out Catering Services or would like to place an order please call 239-325-3583 ext 2 or email Kathy Ardito at kathya@deromos.com</p>
                    <img src="img/decor.jpg" alt style="padding-left:10px;">
                    <p><a href="http://www.deromos.com/wp-content/themes/deromos/menus/Deromos-Catering-Menu.pdf" rel="external"><strong>SEE OUR FULL MENU OFF CATERING SERVICES!</strong></p></a>
                    <p><a href="http://www.deromos.com/wp-content/themes/deromos/menus/DeRomos-Banquet-Room.pdf" rel="external"><strong>BANQUET ROOM</strong></p></a>

                </div>

			</div>	
				
				
		</div>
		
		<!-- end catering ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- what ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="what" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu1">
						<ul id="menu1">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/family.jpg" alt style="padding-left:10px;padding-top: 10px;">
					<h3>WHAT’S IN A NAME?</h3>
					<p>FAMILY – IS WHAT’S IN OUR NAME.</p>
                    <img src="img/nonna.jpg" alt style="padding-left:10px;">
					<p>Owner, Francis J. Cuomo was raised in the Bronx, New York, a stone’s throw away from Arthur Avenue. Known as the “real” Little Italy, Arthur Avenue holds the reputation as “the” place to buy the best tasting breads, fresh pasta, Italian sausage, pastries, meats, seafood, and espresso. Arthur Avenue is also known as “the” place to dine, boasting some of the best, true Italian restaurants in the city. Francis Cuomo proudly brings this authentic neighborhood shopping and dining experience to Southwest Florida.</p>
                    <img src="img/olympia.jpg" alt style="padding-left:10px;">
                    <p>Francis grew up with both sets of grandparents living only a block away. Surrounded by great friends and a close-knit family, he learned about values, tradition, and the art of authentic Italian cuisine. As a tribute to his grandparents, Francis blended the two family names – DeRosa and Cuomo – to establish DeRomo’s.</p>
                    <p>DeRomo’s Gourmet Market and Restaurant brings the flavor and feel of Little Italy to Southwest Florida. A warm, friendly, and creative environment coupled with a fresh,  authentic home-style cuisine, will make you feel right at home!</p>

                </div>

			</div>	
				
				
		</div>
		
		<!-- end what ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- restaurant ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="restaurant" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu2">
						<ul id="menu2">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/restaurant.jpg"  alt style="padding-left:10px;padding-top: 10px;">
					<h3>RESTAURANT</h3>
                    <p><strong>RESTAURANT HOURS</strong></p>
                    <p>Lunch: Mon-Sun |   11:00 a.m. – 3:00 p.m.
                        Dinner: Mon-Sun |   3:00 p.m. – 10:00 p.m.</p>
                    <p><strong>FOOD IS THE WAY TO THE HEART, AND OUR HEART IS IN IT!</strong></p>
                    <p>At DeRomo’s Restaurant, we offer a fun, sophisticated, and casual dining atmosphere like no other in Southwest Florida with an open-style kitchen design, private dining room to accommodate small in-house private parties up to 30 guests. In our private dining room, we offer various party menu packages, as well as the ability to customize any menu.

                        Our warm, inviting café is a place where you can enjoy dinner or a glass of wine and a delicious appetizer while lounging on our outside comfortable couches. In addition, the beautiful weather in Bonita Springs, Florida allows people visiting our restaurant to enjoy our indoor-outdoor, full liquor bar.

                        All of our dishes are prepared with our fresh-cut meats, seafood, produce and other ingredients straight from our Gourmet Market. From innovative, decadent entrees to your favorite comfort foods and traditional dishes, our trained chefs are sure to satisfy the most discretionary palette and keep your “heart” coming back for more!</p>
                        <p><a href="http://www.deromos.com/wp-content/themes/deromos/menus/DeRomos-Lunch-Menu.pdf" rel="external"><strong>LUNCH MENU</strong></p></a>
                        <p><a href="http://www.deromos.com/wp-content/themes/deromos/menus/DeRomos-Dinner-Menu.pdf" rel="external"><strong>DINNER MENU</strong></p></a>
                        <p><a href="http://www.deromos.com/wp-content/themes/deromos/menus/Mothers-Day.pdf" rel="external"><strong>MOTHERS DAY MENU</strong></p></a>

                </div>

			</div>	
				
				
		</div>
		
		<!--end restaurant ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!--pizzeria ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="pizzeria" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu3">
						<ul id="menu3">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/pizza.jpg"  alt style="padding-left:10px;padding-top: 10px;">
					<h3>PIZZERIA</h3>
                    <p>A PIECE OF THE BRONX IN EVERY PIE!</p>
                    <img src="img/bronx-pizza.jpg"  alt style="padding-left:10px;">
                   <p>The word <strong>delicious</strong> is not strong enough to describe our hand-tossed brick oven pizza. In fact, we offer the best tasting, traditional NY-style pizza in Southwest Florida! Our pizza mirrors what our owner grew up eating in the Bronx, where there’s a pizzeria on every corner. With a taste coming straight from the old neighborhood, DeRomo’s pizza starts with our traditional recipe for our dough, as well as our homemade tomato sauce, fresh basil, and creamy mozzarella cheese. No matter which combination of toppings you choose, whether it’s our own in-house fire-roasted peppers, fresh marinated artichokes, grilled eggplant, homemade sausage, or other unique selections, we always ensure the best and freshest ingredients.</p>
                    <img src="img/pizza-bread1.jpg"  alt style="padding-left:10px;">
                    <p><strong>DeRomo’s</strong> brick oven pizzeria also offers many additional pizza-related items made fresh to order. These items include stuffed pizza, Stromboli, calzones, fresh baked garlic knots, and a variety of focaccia breads, just to mention a few.</p>
                </div>

			</div>	
				
				
		</div>
		
		<!-- end pizzeria///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!--clearance ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="clearance" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu4">
						<ul id="menu4">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
					<h3>Clearance</h3>
                    <p>DESIGN IS COMING TO GRIPS WITH ONES REAL LIFESTYLE, ONES REAL PLACE IN THE WORLD. ROOMS SHOULD NOT BE PUT TOGETHER FOR SHOW BUT TO NOURISH ONES WELL BEING. ALBERT HADLEY</p>
                     <img src="img/slika6.jpg" alt style="padding-left:10px;">
                   	 <img src="img/slika7.jpg" alt style="padding-left:10px;">
                   	 <img src="img/slika8.jpg" alt style="padding-left:10px;">

                </div>

			</div>	
				
				
		</div>
		
		<!-- end clearance ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- bake///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="bake" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu6">
						<ul id="menu6">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/bakery.jpg" alt style="padding-left:10px;padding-top: 10px;">
					<h3>BAKE SHOP & COFFEE BAR</h3>
                    <p>THERE ARE NO BAKED GOODS LIKE ITALIAN BAKED GOODS AND THERE IS NO ITALIAN BAKERY LIKE DEROMO’S!</p>
                   <img src="img/bread.jpg" alt style="padding-left:10px;">
                    <p>Is a meal truly complete without dessert? One glance at <strong> DeRomo’s</strong> fresh baked goods will answer that.

                        Master Baker Mike Caforio, originally from Brooklyn, NY, blends his own recipes with Nonna Roseanne’s family recipes to create authentic Italian breads, pastries, and cakes. In our bakery, we take pride using these recipes to create:</p>
                    <h3>Breads</h3>
                    <ul>
                        <li>Ciabata</li>
                        <li>Foccacia</li>
                        <li>Semolina</li>
                        <li>Classic Italian</li>
                        <li>Classic Olive Bread</li>
                        <li>Chocolate Cherry Bread</li>
                        <li>French Baguettes</li>
                        <li>Prosciutto Bread</li>
                        <li>and more!</li>

                    </ul>
                    <h3>SWEETS</h3>
                    <ul>
                        <li>Authentic pastries</li>
                        <li>Cannoli</li>
                        <li>Napoleons</li>
                        <li>Tiramisu</li>
                        <li>Cream puffs</li>
                        <li>Raspberry tarts</li>
                        <li>Our popular éclairs</li>
                        <li>Biscottis</li>
                        <li>Butter cookies</li>
                        <li>Nonna’s famous cheesecakes</li>
                    </ul>
                    <p>We also carry most of the traditional and all-time favorite Italian cakes including cassata cake and rainbow cake, as well as a decadent line of chocolate cakes, assorted fruit-flavored mousse cakes and other specialty cakes.

                        Stop by our bakery to watch our bakers, including Nonna Rose Ann, making fresh baked goods daily, where they’re always willing to hand out samples!</p>
                    <p>LET US BREW YOUR FIRST CUP!</p>
                    <p>DeRomo’s full coffee and juice bar will open its doors before the sun even rises, providing a variety of fresh roasted coffee flavors, espressos, cappuccinos, lattes, hot teas, and more, paired with fresh baked muffins, scones, danishes, and panini breakfast sandwiches. We also offer a variety of fresh juice drinks made to order using our local and organic produce products.</p>

                </div>

			</div>	
				
				
		</div>
		
		<!-- end bake ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- career ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="career" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu7">
						<ul id="menu7">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/oppurtinitas.jpg" alt style="padding-left:10px;padding-top: 10px;">
					<h3>CAREER OPPORTUNITIES</h3>
                    <p>BE PART OF OUR GROWING TEAM</p>
                    <p>At <strong>DeRomo’s Gourmet Market and Restaurant</strong>, we strive for exceptional taste and consistency, as well as unparalleled customer service. We recognize that our employees are our most valuable resource to make this happen. Our team members make us who we are by being who they are and by bringing their passion for great food and great service into the workplace.</p>
                    <p>If you are interested in a position at <strong>DeRomo’s</strong>, please fill out the job application below and email the completed application, along with your résumé, to jobs@deromos.com.</p>
                </div>

			</div>	
				
				
		</div>
		
		<!-- end career ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- chees ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="chees" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu8">
						<ul id="menu8">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/chessss.jpg" alt style="padding-left:10px;padding-top: 10px;">
                    <h3>CHEESE SHOP</h3>
                    <p>CAPTURING THE FLAVORS OF THE WORLD THROUGH CHEESE!</p>
                    <img src="img/cheese.jpg" alt style="padding-left:10px;">
                    <p><strong>DeRomo’s</strong> captures the flavors of the world with a selection of over a hundred international and domestic cheeses. Our European cheese selection reflects age-old pastoral traditions of free range grazing and hormone-free milk production. You can taste Italian Organic Trugole, French Triple Cream BrillatSavarin, or Spanish Manchego, hand cut to provide you with the best texture and flavor. Enjoy fresh, soft-ripened and semi-soft cheeses, as well as our distinctive Sharp Auricchio Provolone, Swiss, Gouda, aged Granas, Reggiano Parmesan, or Gran Pecorino.<strong>DeRomo’s</strong> fresh mozzarella is one of the most popular in our store because of its unrivaled milkiness and fluffiness using the finest whole milk curds. One taste of our fresh, silky-soft mozzarella and you’ll be hooked for life!</p>
                    <p>LET US EDUCATE YOU!</p>
                    <p>Our cheese staff can help you select the perfect cheese for your palette, or offer suggestions for any event. Let your taste buds take you from simple to exotic.

                        Looking for a great pairing? Our cheeses pair wonderfully with our infused balsamic vinaigrettes and extra virgin olive oils, preserves and fruit spreads, domestic and imported crackers, or our fresh baked breads. Give it a try, you won’t regret it!</p>
                    <img src="img/cheese-wine.jpg" alt style="padding-left:10px;">
                </div>

			</div>	
				
				
		</div>
		
		<!-- end chees ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- deli ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="deli" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu9">
						<ul id="menu9">
							<<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/deli.jpg" alt style="padding-left:10px;padding-top: 10px;">
					<h3>DELI</h3>
                    <p>AUTHENTIC  ITALIAN  DELICATESSEN</p>
                    <img src="img/DeRomos-deli-meats.jpg" alt style="padding-left:10px;">
                    <p><strong>DeRomo’s</strong> authentic Italian deli provides a generous selection of premium imported Italian and international smoked and cured meats, cold cuts, sliced cheeses and other specialties. Some of our most popular deli items explode with flavor to excite your taste buds with every bite including our delicate prosciutto, our tangy salamis, hot or sweet capicola, and sopressata, just to mention a few.

                        Customers can savor our juicy homemade roasted turkey and our slow-roasted pork or roast beef all hand cut and trimmed by our in-house butchers. We also offer delicious healthy choice alternatives that are 98% fat free with no nitrates. Customers can also choose from more traditional meats including chicken breast, ham, corned beef and pastrami. In addition, we offer a wide selection of freshly made deli salads, fresh mozzarella, our own in-house roasted peppers, marinated fresh artichoke hearts, olives and much more in our unique antipasto and soup bar.</p>
                    <p>THE BREAD MAKES THE SANDWICH, AND WE MAKE THE BREAD!</p>
                    <p>Our fresh baked sandwich breads come straight from our bakery to make the best hot and cold sandwiches, perfect for lunch on the go or to sit outside and enjoy with a cappuccino at our casual market cafe. Our international sandwich bar features a made-to-order selection of sandwiches with a variety of health-conscious options perfect for any diet needs.</p>

                </div>

			</div>	
				
				
		</div>
		
		<!-- end deli ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- fish ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="fish" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu10">
						<ul id="menu10">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/fishh.jpg" alt style="padding-left:10px;padding-top: 10px;">
					<h3>FISH & SEAFOOD</h3>
                    <p>ONLY THE FRESHEST FISH & SEAFOOD!</p>
                     <img src="img/fresh-seafood2.jpg" alt style="padding-left:10px;">
                    <p>Here at DeRomo’s, our customers expect four things from our seafood department:</p>
                    <ol>
                        <li>Quality</li>
                        <li>Freshness</li>
                        <li>Variety</li>
                        <li>Value</li>

                    </ol>
                    <p>If it’s not the freshest seafood available, we don’t put it in our cases. Our broad selection of fish and seafood includes Sea Bass, Tuna, Snapper, Swordfish, Scallops, Steamers, Clams, Mussels, Conch, Crab, Shrimp and Lobster to mention a few. All of our seafood is delivered to our market fresh daily.

                        From an Italian-style gourmet fish dinner to a bucket of mussels or steamed lobster, our seafood compares to what you’re served in the finest restaurants, and at a great value. For that matter, we serve all of our fresh fish and seafood in our own restaurant!</p>


                </div>

			</div>	
				
				
		</div>
		
		<!-- end fish///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- meet ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="meet" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu11">
						<ul id="menu11">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/meettt.jpg" alt style="padding-left:10px;padding-top: 10px;">
					<h3>MEAT & POULTRY</h3>
                    <p>HOW YOU LIKE IT – IS HOW WE CUT IT!</p>
                    <img src="img/lamb-chops.jpg" alt style="padding-left:10px;">
                    <p>At <strong>DeRomo’s Butcher Shop</strong>, we offer many selections of meats including the finest in Prime meats (Certified Angus Beef), as well as poultry, pork, and lamb. Allow our in-house butchers to assist you in selecting the best cuts of meat, ensuring you get the most tender and flavorful product available. All of our meats are carved by professionally-trained butchers on-site each day who are more than willing to accommodate your specific needs. Our wide variety of fresh sausages are made in-house every day using our tried and true recipes including our famous cheese and parsley sausage (Chevrolat), as well as many others.</p>
                    <img src="img/seasoned-pepper-meat.jpg" alt style="padding-left:10px;">
                    <p>COOKING MADE EASY</p>
                    <p>Create a nearly effortless meal for your family. Cooking is made easy with our pre-marinated, ready-to-cook items such as our boneless rosemary leg of lamb, balsamic flank steak, chicken dijon, stuffed pork chops, a variety of stuffed chicken breasts, beef pinwheels, marinated steaks, filet mignon roasts, ready-to-grill kabobs, and gourmet burger patties, just to name a few.</p>
                </div>

			</div>	
				
				
		</div>
		
		<!-- end meet ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!--food ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="food" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu12">
						<ul id="menu12">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/prepared.jpg" alt style="padding-left:10px;padding-top:10px;">
                    <h3>PREPARED FOODS</h3>
                    <p>APPETIZING PREPARED FOOD, FULL OF MOUTH-WATERING FLAVOR!</p>
                   <img src="img/deromo-prepared.jpg" alt style="padding-left:10px;">
                    <p>At DeRomo’s Gourmet Market, we combine quality dining with convenience by offering our chefs’ award-winning freshly prepared “ready to go” meals. Our Prepared Food Department has over 50 enticing, authentic, and creative dishes! Customers can take home traditional Italian dishes like chicken or veal parmigiana, turkey tetrazzini, chicken pomodoro, veal scaloppini, pork florentine and some of our ultimate comfort foods like rice balls, eggplant rollantini, meatballs made four different ways, cheese lasagna, veggie lasagna, baked ziti, and more. Our freshly-prepared sides include creamy risotto, broccoli rabe, fresh roasted potatoes & vegetables, and pasta salads made fresh daily with our homemade pasta.

                        Each day, our Prepared Food Department offers a special meal package featuring Dinner for 2 or 4, which will include a main entree, 2 side dishes, and a house or Caesar salad.</p>
                    <p>LET US TAKE THE HEAT AND COOK FOR YOU!</p>
                    <p>As an alternative, visit our hot food station where chefs prepare and offer up to five entrees a day that you can take home ready to eat.

                        A fresh, delicious family meal is just a step away!</p>

                </div>

			</div>	
				
				
		</div>
		
		<!-- end tables ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!--gourmet ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="gourmet" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu13">
						<ul id="menu13">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
						</ul>
					</section>
                    <img src="img/Screenshot_134.jpg" alt style="padding-left:10px;padding-top:10px;">
					<h3>GOURMET TO-GO</h3>
                    <p>ENJOY OUR FABULOUS FOOD IN THE COMFORT OF YOUR OWN HOME!</p>
                    <img src="img/gourmet-platter.jpg" alt style="padding-left:10px;">
                    <p>We invite you to try our gourmet food, right in the comfort of your own home! From party platters and trays including veggie trays, shrimp cocktail, and a variety of fresh, hot and cold foods, DeRomo’s Gourmet To-Go offers the convenience of our chefs’ award-winning freshly prepared meals ready to take home and enjoy with your family.

                        Our Gourmet To-Go food is perfect for:</p>
                    <ul>
                        <li>Having the whole family over</li>
                        <li>Catching up with your friends</li>
                        <li>Special occasions</li>
                        <li>Whenever you want!</li>
                    </ul>
                    <p>Check back to see our full Gourmet To-Go menu, and also be sure to find out about our full catering services for any size event!</p>

                </div>

			</div>	
				
				
		</div>
		
		<!-- end gourmet ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!-- event ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="event" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu14">
                        <ul id="menu14">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                            <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                            <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <img src="img/eventt.jpg" alt style="padding-left:10px;padding-top: 10px;">
                    <h3>EVENT CALENDAR</h3>

                </div>

            </div>


        </div>

        <!-- end event ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Market</a></li>
                                <li><a href="#restaurant" data-transition="<?php echo $transitionefect ?>">Restaurant</a></li>
                                <li><a href="#catering" data-transition="<?php echo $transitionefect ?>">Catering</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Articles</a></li>
							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>
					
				</div>
			</div>
		
		</div>
<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
		<script src="js/easing.js" type="text/javascript"></script>
		<!-- UItoTop plugin -->
		<script src="js/jquery.ui.totop.js" type="text/javascript"></script>
		<!-- Starting the plugin -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
	</body>
</html>
