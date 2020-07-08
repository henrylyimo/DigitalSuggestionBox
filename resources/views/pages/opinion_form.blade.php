@extends('layouts.admin')

@section('styles') 
<style>

.cont{
  padding-left: 100px;
}

.inputform {
  border-top: none;
  border-right: none;
  border-left: none;
  background-color: transparent;
  border-bottom: 2px solid grey;
  padding-right: 450px;  
}
.header-img{
  padding-left: 80px;
}
.header-box{
  
}
.inputform:hover
{
  border-top: none;
  border-right: none;
  border-left: none;
  background-color: transparent;
  border-bottom: 2px solid grey;
}
.fa-star
{
	color: red;
	font-size: 5px
}
</style>

@endsection

@section('content')
<body>
  <div class="card">
    <div class="card-body">
      <section class="header">
        <div class="row col-lg-11">
          <div class="col-lg-1"></div>
          <div class="col-lg-3">
            <div class="img-box ">
              <img src="{{ asset('/image/logo.png') }}" height="200px" alt="" class="header-img">
            </div>         
          </div>
          <div class="col-lg-7">
            <div class="header-box text-center mt-2 ">
              <h1 class="font-weight-bold" >UNIVERSITY OF DAR ES SALAAM</h1>
              <h2 class="font-weight-200">STUDENTS SUGGESTION FORM</h2>
              <p class="font-size-30">All person detail remain  <span class="text-danger font-weight-bold" >CONFIDENTIAL</span> place showed by <i class="fas fa-star"></i>  must be filled   </p>
              <P>Your suggestion will be acknowledged wait for feedback</P>
            </div>
          </div>
          
        </div>
        
      </section>
      <section class="cont pt-5 ">
        <form action="postChallenges" method="POST" enctype="multipart/form-data">  
          @csrf 
          <div class="row pl-3">
            <div class="col-lg-5">
              <div class="form-group">
                <label for="name"><i class="fas fa-star"></i>Name:</label>
              <input type="text" class="form-control" name="name" placeholder="">
              </div>
            </div>

            <div class="col-lg-5">
              <div class="form-group">
                <label for="name"><i class="fas fa-star"></i>Reg No:</label>
              <input type="text" class="form-control" name="regNo" placeholder="">
              </div>
            </div>
          </div>
    
          <div class="row pl-3">
            <div class="col-lg-5">
              <div class="form-group">
                <label for="name"><i class="fas fa-star"></i>Course:</label>
              <input type="text" class="form-control" name="course" placeholder="">
              </div>
            </div>

            <div class="col-lg-5">
              <div class="form-group">
                <label for="name"><i class="fas fa-star"></i>Contact_No:</label>
              <input type="text" class="form-control" name="contact" placeholder="">
              </div>
            </div>
          </div>

          <div class="row pl-3">
            <div class="col-lg-5">
              <div class="form-group">
                <label for="name"><i class="fas fa-star"></i>Email:</label>
              <input type="email" class="form-control" name="Email" placeholder="">
              </div>
            </div>

            <div class="col-lg-5">
            </div>
          </div>
            
          <div class="row">
            <div class="col-lg-11">
              <div class="form-group mr-5 pt-5 text-center ">
                <label for="complain"><i class="fas fa-star"></i>Please describe in detail about your suggestion</label>
                <textarea class="form-control" name="complain" id=""   rows="10"></textarea>
              </div>

                <div class="form-group">
                  <label for="">Attach document for more explaination</label>
                  <input type="file" name="evidence" class="form-control-file" id="">
                </div>

                <div class="row">
                  <div class="mr-5 ml-auto mb-3" >
                    <button href="#" type="submit" class="btn btn-primary active" role="button" aria-pressed="true">SUBMIT</button>
                  </div>
                </div>
            </div>
          </div>

        
      
  
        
      </form>
  
      </section>
    </div>
  </div>  
</body>



    
@endsection