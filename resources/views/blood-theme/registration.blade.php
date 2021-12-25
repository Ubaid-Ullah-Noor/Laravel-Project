	@include('blood-theme.head')	
	<body style="background-image: url(img/back.jpg); background-repeat: no-repeat; background-size: cover;">
	<section class="h-100 h-custom" >
	<div class="container py-5 h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-lg-8 col-xl-6">
				<div class="card rounded-3">
					<i class="fas fa-tint fa-5x"></i>
					<div class="card-body p-4 p-md-5">
						<h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration</h3>
						<form action="add" method="post" class="px-md-2">
							@csrf
							<div class="form-outline mb-4">
								<input type="text" class="form-control" placeholder="Name" id="name" name="name" />
							</div>
							<div class="form-outline mb-4">
								<input type="email" class="form-control" placeholder="Email" id="emai" name="email" />
							</div>
							<div class="form-outline mb-4">
								<input type="text" class="form-control" placeholder="Phone # " id="phone" name="phone" />
							</div>
							<div class="form-outline mb-4">
								<input type="text" class="form-control" placeholder="Address"  id="address" name="address" />
							</div>



							<div class="row">
								<div class="col-md-6 mb-4">
									<div class="form-outline datepicker">
										<label for="exampleDatepicker1" class="form-label">Blood Group</label>
										<input type="text" class="form-control" id="blood" name="blood_group" />
										
									</div>
								</div>
								<div class="col-md-6 mb-4"><div class="form-outline datepicker">
										<label for="exampleDatepicker1" class="form-label">Select last donate</label>
										<input type="date" class="form-control" id="date" name="date" />
										
									</div></div>
							</div>

							<div class="row">
									<div class="form-outline">
										<label class="form-label" for="form3Example1w">Any Disease</label>
										<input type="text" id="form3Example1w" class="form-control" id="disease" name="disease" />
										
									</div>
								</div>
								<div class="row" style="margin:0px; height:20px;">
									
								</div>
							
							<input type="submit" name="submit" id="submit"  class="btn btn-success btn-lg mb-1" style="background-color: #930909; border-color: white;">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
