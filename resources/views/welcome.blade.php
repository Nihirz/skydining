@extends('layouts.app')

@section('content')
		<!-- Banner -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="{{asset('front/images/banner-1.jpg')}}" alt="Los Angeles">
		    </div>

		    <div class="item">
		      <img src="{{asset('front/images/banner-2.jpg')}}" alt="Chicago">
		    </div>

		    <div class="item">
		      <img src="{{asset('front/images/banner-3.jpg')}}" alt="New York">
		    </div>
		  </div>
		</div>
		<!-- End-Banner -->

		<!-- What-we-give -->
		<div class="why-choose">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="services_box">
                            <img src="{{asset('front/images/group-icon.png')}}">
                            <span>Group Bookings</span>
                            <strong>MAKE IT AN OUTING TO REMEMBER !</strong>
                            <p>If you’re looking for a truly refreshing experience for your family or co-workers, SKY DINING is the answer! We facilitate corporate events, as well as family events. Formal or informal, gatherings are a 100% more exciting when you have the option to dine 160 feet in the sky! We provide a Family package, a Corporate Meetings package and Corporate Events package (see below), with customization available.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="services_box">
                            <img src="{{asset('front/images/metting-icon.png')}}">
                            <span>Corporate Meetings</span>
                            <strong>STRESS - FREE MEETINGS IN THE SKY !</strong>
                            <p>The corporate meetings package is designed to cater up to 22 business personnel for formal meetings, Board Meetings and Shareholder Meetings. We offer a discount of 10% if 10-15 seats are booked, and a discount of 20% if 16-22 seats are booked.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="services_box">
                            <img src="{{asset('front/images/family-icon.png')}}">
                            <span>Family Events</span>
                            <strong>FROM THE YOUNGSTERS TO THE ELDERLY, EVERY ONE ENJOYS !</strong>
                            <p>Family is always fun! Spice it up even more by hosting them at SKY DINING! Apart from dining in the</p>
                            <p>sky, we can organize games, and other team activities in our launch area. Once you have booked your</p>
                            <p>tickets, a representative shall get in touch and organize the perfect outing for you! We offer a discount</p>
                            <p>of 10% if 10-15 seats are booked, and a discount of 20% if 16-22 seats are booked.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- End-What-we-give -->


		<div class="fresh-section">
			<div class="container">
				<div class="fr-inner">
					<div class="inner-fresher">
						<div class="fr-img">
							<img src="{{asset('front/images/food-icon.png')}}" alt="Food">
						</div>
						<div class="fr-text">
							<h3>FRESH FOOD</h3>
							<p>Donec lacinia magna sit amet arcu aliquet luctus maecenas vehicula.</p>
						</div>
					</div>
					<div class="inner-fresher">
						<div class="fr-img">
							<img src="{{asset('front/images/chef-icon.png')}}" alt="Chef">
						</div>
						<div class="fr-text">
							<h3>CHEF'S SPECIALS</h3>
							<p>Donec lacinia magna sit amet arcu aliquet luctus maecenas vehicula.</p>
						</div>
					</div>
					<div class="inner-fresher">
						<div class="fr-img">
							<img src="{{asset('front/images/glass-icon.png')}}" alt="Glass">
						</div>
						<div class="fr-text">
							<h3>GOOD WINE</h3>
							<p>Donec lacinia magna sit amet arcu aliquet luctus maecenas vehicula.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- About-us -->
		<div class="about-us">
			<div class="container">
				<div class="custom-heading">
					<h1><span>SKY</span> DINING RESTAURANT</h1>
					<span class="elementor-divider-separator">
						<i aria-hidden="true" class="far fa-star"></i>
					</span>
				</div>

				<div class="row">
					<div class="col-md-7">
						<div class="about-left">
							<p>Here is a tribute to good life!</p>
							<p>SKY DINING owned and operated by SKY LOUNGE was born out of a desire to create an experience that combines the thrill of adventure with the delight of a good meal. SKY DINING is a unique concept that enables you  and your loved ones to eat, drink and be merry at the height of 50 meters above ground level and we promise that it shall be an affair to remember.</p>
							<h3>The Sky Is No Longer A Limit!</h3>
							<p>SKY DINING is a unique product both in terms of experience and as a communication tool. Appetisers, lunches, dinners, games, events, entertainment, press conferences, round tables, roadshow, talk show … anything imaginable around a table, you can do it “in the sky”, suspended 50 meters from the ground!</p>
							<div class="custom-button">
								<a href="#">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="about-right">
							<iframe width="100%" height="300" src="https://www.youtube.com/embed/R3jMZMmGcFY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End-About-us -->

		<div class="book-table">
			<div class="container">
				<p>BOOKING TABLE FOR YOUR & FAMILY MEMBERS</p>
				<h3>Need a Table On Skydining</h3>
				<div class="custom-button">
					<a href="#">Book Now</a>
				</div>
			</div>
		</div>

		
		<!-- What-we-give -->
		<div class="gallery-sec">
            <div class="container">
                <div class="custom-heading">
                	<h2><span>GALLERY</span></h2>
                	<span class="elementor-divider-separator">
						<i aria-hidden="true" class="far fa-star"></i>
					</span>
                </div>
                <div class="gallery-imgs">
                	<ul>
                		<li>
                			<img src="{{asset('front/images/gallery-img.png')}}" alt="">
                		</li>
                		<li>
                			<img src="{{asset('front/images/gallery-img.png')}}" alt="">
                		</li>
                		<li>
                			<img src="{{asset('front/images/gallery-img.png')}}" alt="">
                		</li>
                		<li>
                			<img src="{{asset('front/images/gallery-img.png')}}" alt="">
                		</li>
                		<li>
                			<img src="{{asset('front/images/gallery-img.png')}}" alt="">
                		</li>
                		<li>
                			<img src="{{asset('front/images/gallery-img.png')}}" alt="">
                		</li>
                		<li>
                			<img src="{{asset('front/images/gallery-img.png')}}" alt="">
                		</li>
                		<li>
                			<img src="{{asset('front/images/gallery-img.png')}}" alt="">
                		</li>
                	</ul>
                	<div class="custom-button">
						<a href="https://www.instagram.com/outofthebox.amazementpark/" target="_blank"> <i class="fab fa-instagram"></i> View more</a>
					</div>
                </div>
            </div>
        </div>
		<!-- End-What-we-give -->
		@endsection