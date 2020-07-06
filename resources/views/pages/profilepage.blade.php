@extends('layouts.admin')

@section('content')
<style>
.image-profile {
	height: 180px;
	width: 180px;
	background-color: whitesmoke;
	position: relative;
	border-radius: 50%
}
.image2 {
	height: 170px;
	width: 170px;
	position: absolute;
	border-radius: 180px;
	background-color: blueviolet;
margin-left: 5px;
margin-top: 5px
}

</style>

</head>
<title>Profile Form</title>
    <body>
			<div class="container pt-4">
				<div class="row ml-5">
					<div class="col-xl-10 col-md-8">
						<div class="card">
							<div class="card-header bg-dark">
                  <div class="row">
										<div class="col-lg-6">
											<div class="image-profile">
												
													<img src="{{ asset('/image/avatar.jpg') }}" alt="" class="img-fluid image2">
										
											</div>
										</div>
										<div class="col-lg-5 pt-5 pr-5">
											<h4 class="display-5 ">
													MY PROFILEp
											</h4>
											<h5 class="display-5 text-muted">
												Please fill In The Text Below
											</h5>
										</div>
									
									</div>
							</div>
							<div class="card-body">
								<form action="">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="name">FirstName</label>
										<input type="text" class="form-control" placeholder="lyimo">
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<label for="name">MiddleName</label>
										<input type="text" class="form-control" placeholder="Patrick">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="name">LastName</label>
										<input type="text" class="form-control" placeholder="Henry">
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<label for="name">E-mail</label>
										<input type="text" class="form-control" placeholder="eg. henry@gmail.com">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="name">Date Of Birth</label>
										<input type="text" class="form-control" placeholder="1997-04-22">
										</div>

									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="name">Phone -No</label>
										<input type="text" class="form-control" placeholder="eg. +255">
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="name">Old Password</label>
										<input type="text" class="form-control" placeholder="********">
										</div>

									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="name">New Password</label>
										<input type="text" class="form-control" placeholder="********">
										</div>

									</div>
								</div>
								  <div class="row">
									<div class="col-lg-3 ml-auto mr-4 mb-3" >
										<button class="btn btn-lg btn-primary">
											Save Changes
										 </button>
									  </div>
								  </div>
	
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
@endsection