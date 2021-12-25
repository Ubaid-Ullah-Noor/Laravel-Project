@include('blood-theme.head')
<body>
	<!Top Address Bar-->
	<div class="row navbar"style="margin: 0px; height: auto; background-color: #380303;">
		<div class="col-lg-1 "></div>
		<div class="col-lg-10 " style="font-family: serif; color: white;margin-top: 8px;  text-align: center;">
			<div class="row">
				<div class="col-lg-2 logo" >
					<div class="row" style="width: 175px;">
						<img src="img/logo.png">
					</div>
				</div>
				<div class="col-lg-8" >
					<div class="top-address">
						<p  ><b class="address-heading" style="font-size: 20px; ">Address:  </b >Gulzar e Quaide, Rawalpindi,  Pakistan   </p>
					</div>
					<div class="top-address">
						<p  ><b class="address-heading" style="font-size: 20px; ">Contact:  </b >+92 123 4567899</p>
					</div>
				</div>
				
				<div class="col-lg-2 top-bar-social" style="margin-top:8px;">
					<div class="top-icons">
						<a href="#"><i class="fa fa-facebook rounded-box"></i></a>
					</div>
					<div class="top-icons">
						<a href="#"><i class="fa fa-twitter rounded-box"></i></a>
					</div>
					<div class="top-icons">
						<a href="#"><i class="fa fa-google-plus rounded-box"></i></a>
					</div>
					<div class="top-icons">
						<a href="#"><i class="fa fa-instagram rounded-box"></i></a>
					</div>
					<div class="top-icons">
						<a href="#"><i class="fa fa-youtube rounded-box"></i></a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-lg-1 "></div>
	</div>
	<section class="header"     style="height: 696px; ">
		
		<!--header-->
		
		<div class="row" style=" margin: 0px;">
			<div class="row" style="margin-top: 80px;" >
				<div class="col-lg-1"></div>
				<div class="col-lg-2" style=" color: #930909; background: white;  border-radius: 5px; width: 244px; margin-left: 13px; text-align: center;">
					<h3 style="margin-top: 7px;">BLOOD BUDDIES</h3>
				</div>
				<div class="col-lg-9"></div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-5">
				<div class="row " style="font-family: serif; color: white; font-size: 50px; margin-top: 20px; ">
					<p class="main-heading"><b>DONATE BLOOD AND GET REAL BLESSINGS.</b></p>
				</div>
				<div class="row" style="font-family: serif; color: white; font-size: 20px; margin-bottom: 40px;">
					<p>Blood is the most precious gift that anyone can give to another person.
					Donating blood not only saves the life also save donor's lives.</p>
				</div>
				<div class="row">
					<div class="col-lg-10" >
						<a href="{{route('donate-form')}}"><button  type="button" class=" donate-button" >Donate Today</button></a>
						
					</div>
				</div>
				
			</div>
			<div class="col-lg-5 ">
				<div class="image-column"  style="background-image: url(img/blood.png); background-repeat: no-repeat; ">
					
				</div>
				
			</div>
			<div class="col-lg-1"></div>
		</div>
		
	</section>
	<!--Services-->
	<section class="services">
		<div class="row" style="height: 80px; margin: 0px;">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<h2 style="font-family: serif; text-align: center; margin-top: 20px;">Our Services</h2>
			</div>
			<div class="col-lg-4"></div>
		</div>
		
		<div class="row " style="margin: 0px;">
			<div class="col-lg-2"></div>
			<div class="col-lg-2 col-md-6">
				<div class="card" >
					<div class="card-body1">
						<i class="fas fa-clinic-medical fa-5x"></i>
						<h5 class="card-title"><br><br>Blood Storage</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<div class="row">
							
							<a href="{{route('donate-form')}}"><button type="button" class=" register-btn" >Register Now</button></a>
						</div>
					</div>
				</div>
			</div>
			<!-- 2nd-->
			<div class="col-lg-2 col-md-6">
				<div class="card" >
					<div class="card-body2">
						<i class="fas fa-burn fa-5x"></i>
						<h5 class="card-title"><br><br>Blood Donation</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<div class="row">
							<a href="{{route('donate-form')}}"><button type="button" class=" register-btn" >Register Now</button></a>
						</div>
					</div>
				</div>
				
			</div>
			<!-- 3rd-->
			<div class="col-lg-2 col-md-6">
				<div class="card" >
					<div class="card-body3">
						<i class="fas fa-dna fa-5x"></i>
						<h5 class="card-title"><br><br>Provision of RBC</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<div class="row">
							<a href="{{route('donate-form')}}"><button type="button" class=" register-btn" >Register Now</button></a>
						</div>
					</div>
				</div>
			</div>
			<!-- 4th-->
			<div class="col-lg-2 col-md-6">
				<div class="card" >
					<div class="card-body4">
						<i class="fas fa-diagnoses fa-5x"></i>
						<h5 class="card-title"><br><br>Save Lives</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<div class="row">
							<a href="{{route('donate-form')}}"><button type="button" class=" register-btn" >Register Now</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2"></div>
		</div>
		<div class="row" style="height: 80px; margin: 0px;"></div>
	</section>




	<!-- Counts Section -->
<section class="counts-section" >
    <h1 class="mx-auto d-table my-5 " style="font-family: serif; font-size: 2rem;">Our Achievement</h1>
    <div class=" text-white py-5" style="background-image: radial-gradient( #930909,#380303);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6 text-center">
                    <h2 data-toggle="counterUp">142</h2>
                    <h6>Donors</h6>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <h2 data-toggle="counterUp">455</h2>
                    <h6>Patients</h6>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <h2 data-toggle="counterUp">4,262</h2>
                    <h6>Hours Of Support</h6>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <h2 data-toggle="counterUp">25</h2>
                    <h6>Hard Workers</h6>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="row" style="margin: 0px; height: 40px; background-color: white;"></div>
<!--About-->
<section style="background-image: radial-gradient( #930909,#380303);">
	<div class="row" style="margin: 0px; height: 80px;"></div>
	<div class="row" style="margin: 0px; ">
		<div class="col-lg-2"></div>
		<div class="col-lg-4 col-md-6 about-img">
			<img src="{{asset('img/about.jpg')}}" style=" width:100%; ">
		</div>
		<div class="col-lg-4  col-md-6" style=" text-align: center;">
			<div class="row about-text-column">
				
				<h1 style="font-family: serif; color: white;">About Us</h1>
				<p style="font-family: serif; color: white; font-size: 20px;">
				We, Blood Donation Organization at Islamabad, Pakistan, aim to provide prompt, economical and reliable services of the safest blood and other blood products like RBCs, platelets, etc. Offering the industry-leading, advanced technology and well-equipped inventory, we make all types of blood available for the patients and many hospitals. We contribute in saving many lives in the time of need or in an emergency. </p>
				
			</div>
			
		</div>
		<div class="col-lg-2"></div>
	</div>
	<div class="row" style="margin: 0px; height: 80px;"></div>
</section>
<!--Why Donate Blood-->
<hr>
<section style="background-image: radial-gradient( #930909,#380303);">
	<div class="row" style="margin: 0px; height: 80px;"></div>
	<div class="row" style="margin: 0px; ">
		<div class="col-lg-2"></div>
		<div class="col-lg-4  col-md-6" style=" text-align: center;">
			<div class="row about-text-column">
				
				<h1 style="font-family: serif; color: white;">Why donate blood?</h1>
				<p style="font-family: serif; color: white; font-size: 20px;">
					Everyday, there are many emergency cases or other treatments that require blood. But unfortunately, the requirement of blood is exponentially more than its supply. This, at times, leads to loss of life. An act of kindness and a selfless service of donating blood can make a big difference and save and prolong someone's life.
				</p>
				
			</div>
			
		</div>
		<div class="col-lg-4 col-md-6 about-img">
			<img src="{{asset('img/about.jpg')}}" style=" width:100%; ">
		</div>
		
		<div class="col-lg-2"></div>
	</div>
	<div class="row" style="margin: 0px; height: 80px;"></div>
</section>
<section>
	<div class="row" style="margin: 0px; height: 80px;"></div>
	<div class="row" style="margin:0px;">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner" >
							<div class="carousel-item active" style="width:640; height:390;">
								<img src="{{asset('img/img1.jpg')}}" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item" style="width:640; height:390;">
								<img src="{{asset('img/img2.jpg')}}" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="{{asset('img/img3.jpg')}}" class="d-block w-100" alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
						</button>
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<iframe class="video" width="635" height="385" src="https://www.youtube.com/embed/fW-iqa-H1AM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin: 0px; height: 80px;"></div>
</section>


<!--footer-->


<section style="background-image: radial-gradient( #930909,#380303);">
			<div class="row " style="margin: 0px;">
				<footer class=" text-center text-lg-start text-white">
					<!-- Grid container -->
					<div class="container p-4">
						<!--Grid row-->
						<div class="row my-4">
							<!--Grid column-->
							<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
								<img src="img/logo.png" width="170px" alt="logo" class="center">
								
								<p style="text-align: justify; text-justify: inter-word;">We, Blood Donation Organization at Islamabad, Pakistan, aim to provide prompt, economical and reliable services of the safest blood and other blood products like RBCs, platelets, etc. We contribute in saving many lives in the time of need or in an emergency.</p>
								<ul class="list-unstyled d-flex flex-row justify-content-center">
									<li>
										<a class="text-white px-2" href="#!">
											<i class="fab fa-facebook-square fa-2x"></i>
										</a>
									</li>
									<li>
										<a class="text-white px-2" href="#!">
											<i class="fab fa-instagram fa-2x"></i>
										</a>
									</li>
									<li>
										<a class="text-white ps-2" href="#!">
											<i class="fab fa-youtube fa-2x"></i>
										</a>
									</li>
								</ul>
							</div>
							<!--Grid column-->
							<!--Grid column-->
							<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
								<h5 class="text-uppercase mb-4">Contributors</h5>
								<ul class="list-unstyled">
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>Peshawar</a>
									</li>
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>Islamabad</a>
									</li>
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>Karachi</a>
									</li>
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>Haidarabad</a>
									</li>
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>Lahore</a>
									</li>
									
								</ul>
							</div>
							<!--Grid column-->
							<!--Grid column-->
							<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
								<h5 class="text-uppercase mb-4">Information</h5>
								<ul class="list-unstyled">
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>General information</a>
									</li>
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>About the shelter</a>
									</li>
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>About Contributors</a>
									</li>
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>Helpers</a>
									</li>
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>Patients</a>
									</li>
									<li class="mb-2">
										<a href="#!" class="text-white"><i class="fas fa-tint pe-3"></i>Contact</a>
									</li>
								</ul>
							</div>
							<!--Grid column-->
							<!--Grid column-->
							<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
								<h5 class="text-uppercase mb-4">Contact</h5>
								<ul class="list-unstyled">
									<li>
										<p><i class="fas fa-map-marker-alt pe-2"></i>Chaklala Airbase, Gulzar e Quaide Street 2, Islamabad.</p>
									</li>
									<li>
										<p><i class="fas fa-phone pe-2"></i>+92336 9749287</p>
									</li>
									<li>
										<p><i class="fas fa-envelope pe-2 mb-0"></i>ubaidullahnoor57143@gmail.com</p>
									</li>
								</ul>
							</div>
							<!--Grid column-->
						</div>
						<!--Grid row-->
					</div>

					<section class="home-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="single">
							
							<div class="input-group">
								<input type="email" class="form-control" placeholder="Enter your email">
								<span class="input-group-btn">
									<button class="btn btn-theme" type="submit">Subscribe</button>
								</span>
							</div>
						</div>
					</div>
					<div class="row" style="height:25px;"></div>
				</div>
			</div>
		</section>
					<!-- Grid container -->
					<!-- Copyright -->
					<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
						© 2021 Copyright:
						<a class="text-white" href="https://mdbootstrap.com/">Ubaid Ullah Noor</a>
					</div>
					<!-- Copyright -->
				</footer>
			</div>

		</section>

<script type="text/javascript">
    // jQuery counterUp
    $('[data-toggle="counterUp"]').counterUp({
        delay: 15,
        time: 1500
    });
</script>
</body>