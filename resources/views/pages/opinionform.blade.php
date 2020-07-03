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
  <div class="container">
    <section class="header">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
          <div class="img-box ">
            <img src="{{ asset('/image/logo.png') }}" height="200px" alt="" class="header-img">
          </div>         
        </div>
        <div class="col-md-8">
          <div class="header-box text-center mt-2 ">
            <h1 class="font-weight-bold" >UNIVERSITY OF DAR ES SALAAM</h1>
            <h2 class="font-weight-200">Digital SuggestionBox</h2>
            <p class="font-size-30">All person detail remain  <span class="text-danger font-weight-bold" >CONFIDENTIAL</span> </p>
            <p>Place showed by <i class="fas fa-star"></i>  must be filled</p>
            <P>Your opinion will be acknowledged wait for feedback</P>

          </div>
        </div>
        
      </div>
      
    </section>
    <section class="cont pt-5 ">
       <div class="row ml-5 ">
        <i class="fas fa-star"></i>
        <h6 class="display-12 ">Name:</h6>
          <form action=""> 
            <input type="text" class="inputform ml-5 " id="name" name="name" required >  
          </form>
      </div>
      <div class="row ml-5 ">
        <h6 class="display-12 ">Reg no:</h6>
          <form action="">            
            <input type="text" class="inputform ml-5" id="reg-no" name="Reg-no" required >            
          </form>
      </div>

      <div class="row ml-5 ">
        <h6 class="display-12 ">Course:</h6>
          <form action="">        
            <input type="text" class="inputform ml-5" id="course" name="course" required >       
          </form>
      </div>
      <div class="row ml-5 ">
        <i class="fas fa-star"></i>
        <h6 class="display-12 ">Contact No:</h6>
          <form action="">
           
            <input type="text" class="inputform ml-5" id="contact" name="course" required >
            
          </form>
      </div>

      <div class="row ml-5 ">
        <i class="fas fa-star"></i>
        <h6 class="display-12 ">Email:</h6>
          <form action="">
           
            <input type="text" class="inputform ml-5" id="contact" name="course" required >
            
          </form>
      </div>
      <div class="form-group mr-5 pt-5 text-center ">
        <label for="exampleFormControlTextarea1">Please describe your opinion in detail:</label>
        <textarea class="form-control " id="" rows="15"></textarea>
      </div>
      <form>
        <div class="form-group">
          <label for="exampleFormControlFile1">For more detail upload your explaination document</label>
          <input type="file" class="form-control-file" id="">
        </div>
      </form>


      <div class="row">
        <div class="mr-5 ml-auto mb-3" >
          <a href="#" class="btn btn-primary active" role="button" aria-pressed="true">SUBMIT</a>
        </div>
      </div>
    </section>
  </div>
</body>



    
@endsection