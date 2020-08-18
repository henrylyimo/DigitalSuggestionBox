@extends('layouts.admin')

@section('content')
<style>
	 body
  {
    background-color: #e6ffff;
  }
  
  .user-img
  {
    height: 100px;
    width: 100px;
    border-radius: 50%;
  }
  .user-img .img-fluid
  {
    height: 100px;
    width: 100px;
    border-radius: 50%;
  }

  .user-name
  {
    font-size: 50px;
    font-weight: .bold;
  }
/* .image-profile {
	height: 130px;
	width: 130px;
	background-color: whitesmoke;
	position: relative;
	border-radius: 50%
}
.image2 {
	height: 120px;
	width: 120px;
	position: absolute;
	border-radius: 50%;
	background-color: blueviolet;
margin-left: 5px;
margin-top: 5px
} */

</style>

</head>
<title>Profile Form</title>
    <body>
			<div class="container">
				<div class="container pt-3 mt-5">
					<div class="card mt-5">
						<div class="row">
							<div class=" col-md-2 user-img mt-3 mb-3">
								<img src="{{ asset('/image/icon.png') }}" alt="" class="img-fluid ml-5">
							</div>
							<div class="col-md-8 mt-4 user-name">
								<p >HENRY PATRICK LYIMO</p>
							</div>  
							{{-- <div class="col-md-2 mt-5 ">
								<a href="" class="btn btn-outline-primary">Edit Profile</a>
							</div>            --}}
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<form action="">
							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">First name</label>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-lg" id="" placeholder=" LYIMO HENRY PATRICK">
								</div>
							</div>

							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">Reg-No</label>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-lg" id="" placeholder="2017-04-01597">
								</div>
							</div>

							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">Course</label>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-lg" id="" placeholder="Bsc With Computer Science">
								</div>
							</div>

							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">Email</label>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-lg" id="" placeholder="abc@abcd.com">
								</div>
							</div>

							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">Contact_no</label>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-lg" id="" placeholder="">
								</div>
							</div>

							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">City/Town</label>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-lg" id="" placeholder="">
								</div>
							</div>

							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">Old Password</label>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-lg"  placeholder="">
								</div>
							</div>

							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">New password</label>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-lg"  placeholder="">
								</div>
							</div>	
						</form>
						<div class="row">
							<div class="col-md-9"></div>
							<div class="col-md-1">
								<a href="" class="btn btn-primary ml-4">Edit</a>
							</div>
							<div class="col-md-2">
								<a href="" class="btn btn-primary">Save changes</a>
							</div>
						</div>
					</div>
				</div>
			</div>













			{{-- <div class="container pt-5 mt-5">
				<div class="row ">
					<div class="col-lg-1"></div>
					<div class="col-lg-10">
						<div class="card">
							<div class="card-header ">
                  <div class="row">
										<div class="col-lg-6">
											<div class="image-profile">
												
													<img src="{{ asset('/image/avatar.jpg') }}" alt="" class="img-fluid image2">
										
											</div>
										</div>
										<div class="col-lg-5 pt-5 pr-5">
											<h1 class="display-5 ">
													MY PROFILE
											</h1>
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
					<div class="col-lg-1 "></div>
				</div>
			</div> --}}
		</body>
@endsection