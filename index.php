	
<?php 

/*
================================
== Sub Page
================================
*/
ob_start(); //Output Buffering Start
session_start();
$page_title='Home';
$HomeNavbar='';
include 'init.php';	

	?>
			<!--Start Slider -->

			<div id="slider" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
				</ul>


				<!-- The slideshow -->
				<div class="carousel-inner" id="cars-hover">
					

						<div class="carousel-item carousel-one active ">
						<div class="slider-info carousel-caption2 col-lg-6 ">
							<h1 >Foloral Casual Shirt <br> From Men's Summer Collection </h1>
							<p>Your one  stop fashion destinamtion! Shop now</p>
							<button class="btn btn-secondary btn-lg">Shop Now</button>
						</div>
					</div>

					<div class="carousel-item carousel-two  ">
						<div class="slider-info carousel-caption1  col-lg-6 ">
							<h1>Men's Mid Season Sale <br> Up to %50</h1>
							<p>Sneakers, Keds & much more...</p>
							<button class="btn btn-secondary btn-lg">Shop Now</button>
						</div>
					</div>
					
					<div class="carousel-item carousel-three ">
						<div class="slider-info carousel-caption2 col-lg-6 ">
							<h1 >Foloral Casual Shirt <br> From Men's Summer Collection </h1>
							<p>Your one  stop fashion destinamtion! Shop now</p>
							<button class="btn btn-secondary btn-lg">Shop Now</button>
						</div>
					</div>

				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" id="prev-hover" href="#slider" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#slider" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>

			</div>


			<!--End Slider -->	 

			<!--Start box-bottomCover -->
			<section class="container boxBtCover  mt-lg-n10">

				<div class="row">
					<div class="col-sm-12">
						<div class="card ">
							<div class="card-body ">

								<div class="row">
									<div class="col-sm-4 px-2">
										<a class="d-block text-center text-decoration-none mr-1" href="">
											<img class="card-img d-block rounded mb-3 w-100" src="images/b1.jpg" alt="Men">
											<h4 class="font-size-base pt-1 mb-0">Men</h4>
										</a>
									</div>

									<div class="col-sm-4 px-2 ">
										<a class="d-block text-center text-decoration-none mr-1" href="">
											<img class="card-img d-block rounded mb-3 w-100" src="images/b3.jpg" alt="Men">
											<h4 class="font-size-base pt-1 mb-0">Women</h4>
										</a>
									</div>

									<div class="col-sm-4 px-2">
										<a class="d-block text-center text-decoration-none mr-1" href="">
											<img class="card-img d-block rounded mb-3 w-100" src="images/b2.jpg" alt="Men">
											<h4 class="font-size-base pt-1 mb-0">Kids</h4>
										</a>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>

			</section>

			<!--End box-bottomCover -->


			<!--Start Trending-->
	
	<div class="trending pt-5">

		<div class="container">
			<h2 class="h3 text-center">Trending Products</h2>
			<div class="row">

				<div class="whole-card col-sm-6 col-md-4 col-lg-3" v-for = " cardItem in cardItems.slice(0, 8)">
					<div class="card">
						<div class="card-body">
							<button class="btn btn-secondary btnHeart">
								<i class="far fa-heart"></i>
							</button>
							<a href="#">
								<img class="card-img" v-bind:src="cardItem.image">
							</a>
							<span class="card-text">{{ cardItem.cardText }}</span>
							<h4 class="card-title">{{ cardItem.cardTitle }}</h4>
							<div class="price-stars d-flex justify-content-between">
								<span class="price ">{{cardItem.price}}<small>00</small></span>
								<div class="stars-icons "  >
									<i class="fas fa-star fa-x  " v-for="index in 5"  v-bind:class="[index <= cardItem.starNum? 'active' : ' ']" ></i>
								</div>
							</div>
						</div>

						<div class="card-body card-body-hidden text-center">

							<div class="radio-size ">
								<div class="radio-toolbar" v-if= "cardItem.radioNums.length!==0" v-for="radioNum in cardItem.radioNums">
									<input type="radio" v-bind:id="'radio' +cardItem.key+ radioNum" name="radioNums" value="radioNums"  >
									<label v-bind:for="'radio' +cardItem.key+ radioNum">{{radioNum}}</label>

								</div>
							</div>
							<div class="radio-color">
								<div class=" radioColor" v-if= "cardItem.radioColors.length!==0" v-for="radioColor in cardItem.radioColors" >
									<input type="radio" v-bind:id="'radio-'+cardItem.key+radioColor" name="radioColor" value="radioColor" >
									<label class="customColorRadio rounded-circle" v-bind:for="'radio-'+cardItem.key+radioColor">
										<span class="rounded-circle" v-bind:style="{ 'background-color' : radioColor }"></span>
									</label>

								</div>
							</div>

							<button class="btn btn-primary btn-block">
								<i class="fas fa-cart-plus pr-1"></i>Add to Cart
							</button>

							<div class="text-center">
								<a href="#"  class="quickView">
									<i class="far fa-eye"></i>
									Quick View
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="text-center pt-3"><a class="btn btn-outside" href="#">More products</a></div>

	</div>
	
	<!--End Trending-->

	<!--Start Adv-->

	<div class="adv">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="left-adv d-flex justify-content-between "style='background-color: #a6a8a3;'>
						<div class="py-4 my-2 text-center text-sm-left">
							<h4>Hurry up! Limited time offer</h4>
							<h3>Converse All Star on Sale</h3>
							<a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
						</div>
						<img  class="left-adv-img"src="images/ad5.jpg">
					</div>
				</div>
				<div class="col-sm-4">
					<div class=" right-adv-img d-flex ">
						<div class="py-1 text-center">
							<h5 class="mb-2">Your Add Banner Here</h5>
							<p class="font-size-sm text-muted">Hurry up to reserve your spot</p><a class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Adv-->
	
	
	

	<!-- start sliderProduct -->
	
	<div class="sliderProduct">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 overflow-hidden rounded " style="background-color: rgb(226, 233, 240);z-index: 4;">
					<div class="d-flex flex-column">
						<div class="d-flex py-5 px-2 justify-content-between">
							<div>
								<h2>Hoodie day</h2>
								<a href="#" style="color:#fe686a;font-size: 16px;">Shop hoodies  <span class="ml-2">&gt;</span></a>
							</div>
							<div class="btn-sliderProduct">
								<button type="button" class="rounded-circle" onclick="sliderButton('next')">&lt;</button>
								<button type="button" class="rounded-circle" onclick="sliderButton('prev')">&gt;</button>
							</div>
						</div>
						<a href="#" class="sliderSideImg">					
						</a>
					</div>
				</div>
				<div class="product-slider col-sm-7 ">
					<div class="" v-for = "cardItem , index in 3">
						<span style="display: none;">	{{index}}
							{{ index2=index*6 }}
						{{ index3 = index2+6 }} </span>
						<div class="row ">
							<div class="whole-card col-sm-6 col-md-4 mb-5 " v-for = " cardItem in cardItems.slice(index2,index3)" >
								<div class="card">
									<div class="card-body">
										<button class="btn btn-secondary btnHeart">
											<i class="far fa-heart"></i>
										</button>
										<a href="#">

											<img class="card-img" v-bind:src="cardItem.image">
										</a>

										<span class="card-text">{{ cardItem.cardText }}</span>
										<h4 class="card-title">{{ cardItem.cardTitle }}</h4>
										<div class="price-stars d-flex justify-content-between">
											<span class="price ">{{cardItem.price}}<small>00</small></span>
											<div class="stars-icons "  >
												<i class="fas fa-star fa-x  " v-for="index in 5"  v-bind:class="[index <= cardItem.starNum? 'active' : ' ']" ></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- end sliderProduct -->




	<div class="container">
		<div class="woman-ads">
			<a href="#" class="image-anchor"><img src="images/s7.jpg"></a>
			<div class="content">
	            <h3 class="title">Women Spring/Summer Lookbook</h3>
	                <p class="subtitle">Limited time, while out of stock!</p>
	           			 <a href="#"  class="button btn btn-primary">
	               	 		Shop Women
	            		</a>
   		 	</div>
		</div>
	</div>
	

	<!-- start socialHeader -->
	

	<!-- end socialHeader -->
	<!-- start brands -->
	<div class="brands">
		<div class="container">
			<div class="row justify-content-between" >
				
				<div class="brandsHeader col " v-for="brand in brands">
						<a href="#"><img v-bind:src="brand.image" width="150" height="80"  ></a>
				</div>
			</div>
		</div>
	</div>

	<!-- start newletters -->
	<div class="news-email">
		<div class="container position-relative">
		<h1>Sign Up Now!</h1>
		<small>Sign up for our Newsletter to get more events, promotions & news from us!</small>
		<label class="enter-email my-4">
			<input type="text" name="email" class="form-control form-control-lg" autocomplete="off">
		</label>
		<button class="btn-lg my-4"><i class="fa fa-arrow-right"></i></button>
	</div>
	</div>



    <?php
    include $tpl . 'homeFooter.php';
	ob_end_flush();
?>

