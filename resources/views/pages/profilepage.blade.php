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
	.info .name-info
{
	color: black;
	font-size: 50px;
  font-weight: .bold;
}
.box
{
	border: 1px solid #C0C0C0;
	border-radius: 5px;
	font-size: 18px;
	color: gray;
	font-weight: bold;


}
.box .box1
{
	
}



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

							<div class="info " aria-labelledby="dropdownMenuLink">
								<p class="d-block name-info mt-4 ml-3"  >{{ Auth::user()->name }}</p>                   
						</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<form action="">
							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">Full name</label>
								<div class="col-sm-6">
									<div class="box">
										<p class="d-block box1 mt-2 ml-3 "  >{{ Auth::user()->name }}</p> 
									</div>
									{{-- <input type="text" class="form-control form-control-lg" id="" placeholder=" LYIMO HENRY PATRICK"> --}}
								</div>
							</div>

							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">Reg-No</label>
								<div class="col-sm-6">
									<div class="box">
										<p class="d-block box1 mt-2 ml-3 "  >{{ Auth::user()->reg_no }}</p> 
									</div>								 
									{{-- <input type="text" class="form-control form-control-lg" id="" placeholder="2017-04-01597"> --}}
								</div>
							</div>

							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label ml-5">Course/Role</label>
								<div class="col-sm-6">
									<div class="box">
										<p class="d-block box1 mt-2 ml-3 "  >{{ Auth::user()->course}}</p> 
									</div>	
									
									{{-- <input type="text" class="form-control form-control-lg" id="" placeholder="Bsc With Computer Science"> --}}
								</div>
							</div>	
						</form>
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