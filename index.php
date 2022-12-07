<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>ZenBlog Bootstrap Template - Index</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS Files -->
	<link href="assets/css/variables.css" rel="stylesheet">
	<link href="assets/main.css" rel="stylesheet">


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<link href="assets/css/variables.css" rel="stylesheet">
	<link href="search.css" rel="stylesheet">

</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header d-flex align-items-center fixed-top">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<a href="index.html" class="logo d-flex align-items-center">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="assets/img/logo.png" alt=""> -->
				<h1>Niera</h1>
			</a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="shop.php">Diskon</a></li>
					<li class="dropdown"><a href="about.php"><span>Kategori</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
						<ul>
							<li><a href="services.php">Pesanan</a></li>
							<li><a href="#">Drop Down 1</a></li>
							<li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
								<ul>
									<li><a href="#">Deep Drop Down 1</a></li>
									<li><a href="#">Deep Drop Down 2</a></li>
									<li><a href="#">Deep Drop Down 3</a></li>
									<li><a href="#">Deep Drop Down 4</a></li>
									<li><a href="#">Deep Drop Down 5</a></li>
								</ul>
							</li>
							<li><a href="#">Drop Down 2</a></li>
							<li><a href="#">Drop Down 3</a></li>
							<li><a href="#">Drop Down 4</a></li>
						</ul>
					</li>

					<li><a href="services.php">Pesanan</a></li>
					<li><a href="contact.php">Riwayat Pembelian</a></li>
					<li><a href="login.php">Masuk</a></li>
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="account.php"><img src="images/user.svg"></a></li>
				</ul>
				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>
				</ul>
			</nav><!-- .navbar -->

			<div class="position-relative">

				<a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
				<i class="bi bi-list mobile-nav-toggle"></i>

				<!-- ======= Search Form ======= -->
				<div class="search-form-wrap js-search-form-wrap">
					<form action="search-result.html" class="search-form">
						<span class="icon bi-search"></span>
						<input type="text" placeholder="Search" class="form-control">
						<button class="btn js-search-close"><span class="bi-x"></span></button>
					</form>
				</div><!-- End Search Form -->


			</div>

		</div>

	</header><!-- End Header -->

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<p>.</p>
					<p>.</p>
					<p>.</p>
					<div class="intro-excerpt">
						<h1>Modern Interior <span clsas="d-block">EKTORP</span></h1>
						<p class="mb-4">Sofa 3 dudukan, totebo krem muda</p>
						<p><a href="" class="btn btn-secondary me-2">Beli Sekarang</a><a href="#" class="btn btn-white-outline">Detail</a></p>
					</div>
				</div>
				<div class="col-lg-7">
					<p>.</p>
					<p>.</p>
					<div class="hero-img-wrap">
						<img src="images/couch.png" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->

	<!-- Start Product Section -->
	<div class="product-section">
		<div class="container">
			<div class="row">

				<!-- Start Column 1 -->
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
					<h2 class="mb-4 section-title">Di buat dengan kualitas terbaik.</h2>
					<p class="mb-4">Perlu diketahui bahwa kami menyediakan bahan baku kualitas terbaik dengan proses pembuatan yang panjang demi mendapatkan kepuasan pelanggan </p>
					<p><a href="shop.html" class="btn">Rincian</a></p>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="cart.html">
						<img src="images/product-1.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Nordic Chair</h3>
						<strong class="product-price">Rp 900.000</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="cart.html">
						<img src="images/product-2.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Kruzo Aero Chair</h3>
						<strong class="product-price">Rp 1.200.000</strong>

						<span class="icon-cross">
							<img src="images/cross.svg" class="img-fluid">
						</span>
					</a>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<a class="product-item" href="cart.html">
						<img src="images/product-3.png" class="img-fluid product-thumbnail">
						<h3 class="product-title">Ergonomic Chair</h3>
						<p<strong class="product-price"><s>Rp 800.000</s></strong></p>
							<strong class="product-price">Rp 640.000</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
					</a>
				</div>
				<!-- End Column 4 -->

				<div class="product-section">
					<div class="container">
						<div class="row">

							<!-- Start Column 5 -->
							<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
								<a class="product-item" href="cart.html">
									<img src="images/product-1.png" class="img-fluid product-thumbnail">
									<h3 class="product-title">Nordic Chair</h3>
									<strong class="product-price">Rp 900.000</strong>

									<span class="icon-cross">
										<img src="images/cross.svg" class="img-fluid">
									</span>
								</a>
							</div>
							<!-- End Column 5 -->

							<!-- Start Column 6 -->
							<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
								<a class="product-item" href="cart.html">
									<img src="images/product-2.png" class="img-fluid product-thumbnail">
									<h3 class="product-title">Kruzo Aero Chair</h3>
									<strong class="product-price">Rp 1.200.000</strong>

									<span class="icon-cross">
										<img src="images/cross.svg" class="img-fluid">
									</span>
								</a>
							</div>
							<!-- End Column 6 -->

							<!-- Start Column 7 -->
							<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
								<a class="product-item" href="cart.html">
									<img src="images/product-3.png" class="img-fluid product-thumbnail">
									<h3 class="product-title">Ergonomic Chair</h3>
									<p<strong class="product-price"><s>Rp 800.000</s></strong></p>
										<strong class="product-price">Rp 640.000</strong>

										<span class="icon-cross">
											<img src="images/cross.svg" class="img-fluid">
										</span>
								</a>
							</div>
							<!-- End Column 7 -->

							<!-- Start Column 8 -->
							<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
								<a class="product-item" href="cart.html">
									<img src="images/product-1.png" class="img-fluid product-thumbnail">
									<h3 class="product-title">Nordic Chair</h3>
									<strong class="product-price">Rp 900.000</strong>

									<span class="icon-cross">
										<img src="images/cross.svg" class="img-fluid">
									</span>
								</a>
							</div>
							<!-- End Column 8 -->

							<div class="product-section">
								<div class="container">
									<div class="row">

										<!-- Start Column 1 -->
										<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
											<a class="product-item" href="cart.html">
												<img src="images/product-1.png" class="img-fluid product-thumbnail">
												<h3 class="product-title">Nordic Chair</h3>
												<strong class="product-price">Rp 900.000</strong>

												<span class="icon-cross">
													<img src="images/cross.svg" class="img-fluid">
												</span>
											</a>
										</div>
										<!-- End Column 1 -->

										<!-- Start Column 2 -->
										<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
											<a class="product-item" href="cart.html">
												<img src="images/product-2.png" class="img-fluid product-thumbnail">
												<h3 class="product-title">Kruzo Aero Chair</h3>
												<strong class="product-price">Rp 1.200.000</strong>

												<span class="icon-cross">
													<img src="images/cross.svg" class="img-fluid">
												</span>
											</a>
										</div>
										<!-- End Column 2 -->

										<!-- Start Column 3 -->
										<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
											<a class="product-item" href="cart.html">
												<img src="images/product-3.png" class="img-fluid product-thumbnail">
												<h3 class="product-title">Ergonomic Chair</h3>
												<p<strong class="product-price"><s>Rp 800.000</s></strong></p>
													<strong class="product-price">Rp 640.000</strong>

													<span class="icon-cross">
														<img src="images/cross.svg" class="img-fluid">
													</span>
											</a>
										</div>
										<!-- End Column 3 -->

										<!-- Start Column 4 -->
										<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
											<a class="product-item" href="cart.html">
												<img src="images/product-1.png" class="img-fluid product-thumbnail">
												<h3 class="product-title">Nordic Chair</h3>
												<strong class="product-price">Rp 900.000</strong>

												<span class="icon-cross">
													<img src="images/cross.svg" class="img-fluid">
												</span>
											</a>
										</div>
										<!-- End Column 4 -->

									</div>
								</div>
							</div>
							<!-- End Product Section -->

							<!-- Start Why Choose Us Section -->
							<div class="why-choose-section">
								<div class="container">
									<div class="row justify-content-between">
										<div class="col-lg-6">
											<h2 class="section-title">Why Choose Us</h2>
											<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

											<div class="row my-5">
												<div class="col-6 col-md-6">
													<div class="feature">
														<div class="icon">
															<img src="images/truck.svg" alt="Image" class="imf-fluid">
														</div>
														<h3>Fast &amp; Free Shipping</h3>
														<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
													</div>
												</div>

												<div class="col-6 col-md-6">
													<div class="feature">
														<div class="icon">
															<img src="images/bag.svg" alt="Image" class="imf-fluid">
														</div>
														<h3>Easy to Shop</h3>
														<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
													</div>
												</div>

												<div class="col-6 col-md-6">
													<div class="feature">
														<div class="icon">
															<img src="images/support.svg" alt="Image" class="imf-fluid">
														</div>
														<h3>24/7 Support</h3>
														<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
													</div>
												</div>

												<div class="col-6 col-md-6">
													<div class="feature">
														<div class="icon">
															<img src="images/return.svg" alt="Image" class="imf-fluid">
														</div>
														<h3>Hassle Free Returns</h3>
														<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
													</div>
												</div>

											</div>
										</div>

										<div class="col-lg-5">
											<div class="img-wrap">
												<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- End Why Choose Us Section -->

							<!-- Start We Help Section -->
							<div class="we-help-section">
								<div class="container">
									<div class="row justify-content-between">
										<div class="col-lg-7 mb-5 mb-lg-0">
											<div class="imgs-grid">
												<div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
												<div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
												<div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
											</div>
										</div>
										<div class="col-lg-5 ps-lg-5">
											<h2 class="section-title mb-4">We Help You Make Modern Interior Design</h2>
											<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada</p>

											<ul class="list-unstyled custom-list my-4">
												<li>Donec vitae odio quis nisl dapibus malesuada</li>
												<li>Donec vitae odio quis nisl dapibus malesuada</li>
												<li>Donec vitae odio quis nisl dapibus malesuada</li>
												<li>Donec vitae odio quis nisl dapibus malesuada</li>
											</ul>
											<p><a herf="#" class="btn">Explore</a></p>
										</div>
									</div>
								</div>
							</div>
							<!-- End We Help Section -->

							<!-- Start Popular Product -->
							<div class="popular-product">
								<div class="container">
									<div class="row">

										<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
											<div class="product-item-sm d-flex">
												<div class="thumbnail">
													<img src="images/product-1.png" alt="Image" class="img-fluid">
												</div>
												<div class="pt-3">
													<h3>Nordic Chair</h3>
													<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
													<p><a href="#">Read More</a></p>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
											<div class="product-item-sm d-flex">
												<div class="thumbnail">
													<img src="images/product-2.png" alt="Image" class="img-fluid">
												</div>
												<div class="pt-3">
													<h3>Kruzo Aero Chair</h3>
													<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
													<p><a href="#">Read More</a></p>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
											<div class="product-item-sm d-flex">
												<div class="thumbnail">
													<img src="images/product-3.png" alt="Image" class="img-fluid">
												</div>
												<div class="pt-3">
													<h3>Ergonomic Chair</h3>
													<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
													<p><a href="#">Read More</a></p>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- End Popular Product -->

							<!-- Start Testimonial Slider -->
							<div class="testimonial-section">
								<div class="container">
									<div class="row">
										<div class="col-lg-7 mx-auto text-center">
											<h2 class="section-title">Testimonials</h2>
										</div>
									</div>

									<div class="row justify-content-center">
										<div class="col-lg-12">
											<div class="testimonial-slider-wrap text-center">

												<div id="testimonial-nav">
													<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
													<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
												</div>

												<div class="testimonial-slider">

													<div class="item">
														<div class="row justify-content-center">
															<div class="col-lg-8 mx-auto">

																<div class="testimonial-block text-center">
																	<blockquote class="mb-5">
																		<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
																	</blockquote>

																	<div class="author-info">
																		<div class="author-pic">
																			<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
																		</div>
																		<h3 class="font-weight-bold">Maria Jones</h3>
																		<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
																	</div>
																</div>

															</div>
														</div>
													</div>
													<!-- END item -->

													<div class="item">
														<div class="row justify-content-center">
															<div class="col-lg-8 mx-auto">

																<div class="testimonial-block text-center">
																	<blockquote class="mb-5">
																		<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
																	</blockquote>

																	<div class="author-info">
																		<div class="author-pic">
																			<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
																		</div>
																		<h3 class="font-weight-bold">Maria Jones</h3>
																		<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
																	</div>
																</div>

															</div>
														</div>
													</div>
													<!-- END item -->

													<div class="item">
														<div class="row justify-content-center">
															<div class="col-lg-8 mx-auto">

																<div class="testimonial-block text-center">
																	<blockquote class="mb-5">
																		<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
																	</blockquote>

																	<div class="author-info">
																		<div class="author-pic">
																			<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
																		</div>
																		<h3 class="font-weight-bold">Maria Jones</h3>
																		<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
																	</div>
																</div>

															</div>
														</div>
													</div>
													<!-- END item -->

												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Testimonial Slider -->

							<!-- Start Blog Section -->
							<div class="blog-section">
								<div class="container">
									<div class="row mb-5">
										<div class="col-md-6">
											<h2 class="section-title">Recent Blog</h2>
										</div>
										<div class="col-md-6 text-start text-md-end">
											<a href="#" class="more">View All Posts</a>
										</div>
									</div>

									<div class="row">

										<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
											<div class="post-entry">
												<a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
												<div class="post-content-entry">
													<h3><a href="#">First Time Home Owner Ideas</a></h3>
													<div class="meta">
														<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
													</div>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
											<div class="post-entry">
												<a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
												<div class="post-content-entry">
													<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
													<div class="meta">
														<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
													</div>
												</div>
											</div>
										</div>

										<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
											<div class="post-entry">
												<a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
												<div class="post-content-entry">
													<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
													<div class="meta">
														<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- End Blog Section -->

							<!-- Start Footer Section -->
							<footer class="footer-section">
								<div class="container relative">

									<div class="sofa-img">
										<img src="images/sofa.png" alt="Image" class="img-fluid">
									</div>

									<div class="row">
										<div class="col-lg-8">
											<div class="subscription-form">
												<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

												<form action="#" class="row g-3">
													<div class="col-auto">
														<input type="text" class="form-control" placeholder="Enter your name">
													</div>
													<div class="col-auto">
														<input type="email" class="form-control" placeholder="Enter your email">
													</div>
													<div class="col-auto">
														<button class="btn btn-primary">
															<span class="fa fa-paper-plane"></span>
														</button>
													</div>
												</form>

											</div>
										</div>
									</div>

									<div class="row g-5 mb-5">
										<div class="col-lg-4">
											<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Niera<span>.</span></a></div>
											<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

											<ul class="list-unstyled custom-social">
												<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
												<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
												<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
											</ul>
										</div>

										<div class="col-lg-8">
											<div class="row links-wrap">
												<div class="col-6 col-sm-6 col-md-3">
													<ul class="list-unstyled">
														<li><a href="#">About us</a></li>
														<li><a href="#">Services</a></li>
														<li><a href="#">Blog</a></li>
														<li><a href="#">Contact us</a></li>
													</ul>
												</div>

												<div class="col-6 col-sm-6 col-md-3">
													<ul class="list-unstyled">
														<li><a href="#">Support</a></li>
														<li><a href="#">Knowledge base</a></li>
														<li><a href="#">Live chat</a></li>
													</ul>
												</div>

												<div class="col-6 col-sm-6 col-md-3">
													<ul class="list-unstyled">
														<li><a href="#">Jobs</a></li>
														<li><a href="#">Our team</a></li>
														<li><a href="#">Leadership</a></li>
														<li><a href="#">Privacy Policy</a></li>
													</ul>
												</div>

												<div class="col-6 col-sm-6 col-md-3">
													<ul class="list-unstyled">
														<li><a href="#">Nordic Chair</a></li>
														<li><a href="#">Kruzo Aero</a></li>
														<li><a href="#">Ergonomic Chair</a></li>
													</ul>
												</div>
											</div>
										</div>

									</div>

									<div class="border-top copyright">
										<div class="row pt-4">
											<div class="col-lg-6">
												<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
														document.write(new Date().getFullYear());
													</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> <!-- License information: https://untree.co/license/ -->
												</p>
											</div>

											<div class="col-lg-6 text-center text-lg-end">
												<ul class="list-unstyled d-inline-flex ms-auto">
													<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
													<li><a href="#">Privacy Policy</a></li>
												</ul>
											</div>

										</div>
									</div>

								</div>
							</footer>
							<!-- End Footer Section -->


							<script src="js/bootstrap.bundle.min.js"></script>
							<script src="js/tiny-slider.js"></script>
							<script src="js/custom.js"></script>
</body>

</html>