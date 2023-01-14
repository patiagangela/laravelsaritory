<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SARITORY</title>
	<link rel="stylesheet" href="./src/styles/css/main.min.css" />
	<link rel="shortcut icon" href="./src/images/SARITORY2.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body id="landing-page">

	<header>
		<!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg navbar-dark fw-bold" style="background-color: #0062be;">
			<div class="container sticky-top">
				<a class="navbar-brand" href="#"><img src="{{ URL::to('/images/inventory.png') }}" width="200px" id="landingpage-logo"/></a>

				{{-- <img src="{{ URL::to('/assets/img/default.jpg') }}"> --}}

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-light text-center" id="navbarText">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active mt-2" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item mt-2">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item mt-2">
							<a class="nav-link" href="#Features">Features</a>
						</li>
						<li class="nav-item mt-2">
							<a class="nav-link" href="#Reviews">Reviews</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./src/pages/register.html"> <button type="button" class="btn register fw-bold text-nowrap" style="border: 3px solid; border-color: #ff9800; color: white;" )>REGISTER</button></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="Register" href="./src/pages/login-signup.html"><button type="button" class="btn login fw-bold text-light" style="background-color: #ff914d; width: 100px; border: solid 3px #ff914d;">LOGIN</button></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!--CONTAINER-->
	<div class="bg-image sairsari-store-image" style="background-image: url('./src/images/banner-saritory\ 1.png'); background-size: cover; background-position: center; height: calc(100vh - 69px);">
		<div class="container d-flex align-items-center header-text__main" style="height: calc(100vh - 69px);">
			<div id="header-text__container">
				<h1 class="sarisari-store banner-text text-light fw-bold">
					SARI-SARI STORE <br />
					INVENTORY MADE EASY<br />
				</h1>
				<button type="button" class="btn learnmore fw-bold text-light" style="background-color: #ff914d;">
					<a href="#about">LEARN MORE</a> 
				</button>
			</div>
		</div>
		
	</div>
	<!--ABOUT-->
	<div class="bg-light" id="about">
		<div class="text-center text-primary pt-5 fw-bold"><h2>ABOUT SARITORY</h2></div>
		<div class="container text-start">
			<div class="row">
				<div class="col-md-6 pt-5 pb-2"><img class="img-fluid" src="./src/images/saritory dashboard 1.png" /></div>
				<div class="col-md-6 pt-5 mt-5 pb-5">
					<p>
						Saritoy's Inventory Management System is one of the best inventory system in the Philippines as it is designed to catch an array of details of your inventory, sales, item expiration and most sellable item so that you can make the right
						inventory replenishment decisions quickly. While the system provides an inventory alert, you can prevent any sort of inventory inefficiencies in the shortest possible time.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Features-->
	<div style="background-color: #0082fc;" class="pb-5">
		<div class="text-center text-light pt-5 pb-3" id="Features"><h2>FEATURES</h2></div>
		<div class="container d-flex justify-content-center">
			<div class="row p-1">
				<div class="inventory col pb-3">
					<div class="card card__container" style="width: 18rem;">
						<img src="./src/images/inventory.png" class="mx-auto card-icons d-flex justify-content-center pt-5 " alt="inventory" />
						<div class="card-body">
							<h5 class="card-title pt-1 text-center">Inventory Management</h5>
							<p class="card-text pt-1" style="display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; overflow: hidden;">
								Manage your inventory easily and affordably in this user friendly WebApp. The main inventory functions are viewing, adding, editing and deleting informations of the products.
							</p>
						</div>
					</div>
				</div>
				<div class="income col pb-3">
					<div class="card card__container" style="width: 18rem;">
						<img src="./src/images/price.png" class="mx-auto card-icons d-flex justify-content-center pt-5" alt="Income Tracker" />
						<div class="card-body">
							<h5 class="card-title pt-1 text-center">Income Tracker</h5>
							<p class="card-text pt-1" style="display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; overflow: hidden;">
								Track your cash flow easier using our Income Tracker feature. Advantages of this feature is it can help you stick to your budget. Reveal your speding issues and help you meet your financial objectives.

							</p>
						</div>
					</div>
				</div>
				<div class="expiring col pb-3">
					<div class="card card__container" style="width: 18rem;">
						<img src="./src/images/warning.png" class="mx-auto card-icons d-flex justify-content-center pt-5" alt="Tindera Account" />
						<div class="card-body">
							<h5 class="card-title pt-1 text-center">Expiring Items</h5>
							<p class="card-text pt-1" style="display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; overflow: hidden;">
								Don’t miss the expiration dates of your products. View the items that needs attention and track the number of items that will expire on your Dashboard with a particular days tracker.

							</p>
						</div>
					</div>
				</div>
				<div class="Tindera col pb-3">
					<div class="card card__container" style="width: 18rem;">
						<img src="./src/images/people.png" class="mx-auto card-icons d-flex justify-content-center pt-5" alt="Tindera Account" />
						<div class="card-body">
							<h5 class="card-title pt-1 text-center">Tindera Account</h5>
							<p class="card-text pt-1" style="display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; overflow: hidden;">
								Create a sub account for your Store Attendant, you can limit the access to your Saritory Account and monitor transaction. The Store attend can insert sales.

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Reviews-->
	<div class="bg-light">
		<div class="text-center text-primary pt-5" id="Reviews"><h2>REVIEWS</h2></div>
		<div class="container text-start p-5">
			<div class="row pb-5" id="reviews__container">
				<div class="col border border-dark mb-2 p-3">
					<h5 class="pb-2">Jhonnavelle Bartolome</h5>
					<p>
						Saritory helped me manage my inventory! I used to spend 3 hours a day to manually check the inventory. But now, it only takes few minutes to keep me on track. This is a life changer, I now have more time to spend with my twins! 

					</p>
					<img src="./src/images/star.png" style="height: 20px;" />
					<img src="./src/images/star.png" style="height: 20px;" />
					<img src="./src/images/star.png" style="height: 20px;" />
					<img src="./src/images/star.png" style="height: 20px;" />
					<img src="./src/images/star.png" style="height: 20px;" />
				</div>
				<div class="col border border-dark mb-2 p-3">
					<h5 class="pb-2">Carla Dela Cruz</h5>
					<p>
						I used to spend a lot of time on managing our expenses using Excel on my PC. But now, I can manage our Income using my mobile device! It’s easy to use and I don’t have to worry about incorrect formulas. 
					</p>
					<img src="./src/images/star.png" style="height: 20px;" />
					<img src="./src/images/star.png" style="height: 20px;" />
					<img src="./src/images/star.png" style="height: 20px;" />
					<img src="./src/images/star.png" style="height: 20px;" />
					<img src="./src/images/star.png" style="height: 20px;" />
				</div>
			</div>
		</div>
		<!-- CREATE AN ACCOUNT-->
		<div class="bg-primary">
			<div class="text-center text-light pt-5 pb-3 fw-bold container"><h2>Create a free account today!</h2></div>
			<p class="text-center text-light fw-bold pb-3 container">Keep track of your Sales and Inventory</p>
			<button type="button" class="btn learnmore fw-bold text-light" style="background-color: #ff914d;" id="CTA_Register">
				<a href="./src/pages/register.html">REGISTER NOW</a> 
			</button>
			<p class="text-center text-light fw-bold mt-3 pb-5 container">Get in touch if you have questions, we are happy to help! </p>
		</div>

		<footer>
			<div class="footer container text-start">
				<div class="row footer__container">
					<div class="col pb-3"><img src="./src/images/SARITORY with text v2 2.png" width="200px" id="footer-logo"/></div>
					<div class="col text-primary fw-bold pt-3 text-end" id="copyright">
						<p>© Copyright 2022 SARITORY | All Rights Reserved</p>
					</div>
				</div>
			</div>
		</footer>
	</div>


	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/date-fns/2.0.0-alpha0/date_fns.js"></script>
	<script type="module" src="./src/js/index.js"></script>
</body>
</html>