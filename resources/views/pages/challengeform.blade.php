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
            <h2 class="font-weight-200">STUDENTS COMPLAINT FORM</h2>
            <p class="font-size-30">All person detail remain  <span class="text-danger font-weight-bold" >CONFIDENTIAL</span> </p>
            <P>Your complain will be acknowledged wait for feedback</P>
          </div>
        </div>
        
      </div>
      
    </section>
    <section class="cont pt-5 ">
       <div class="row ml-5 ">
        <h6 class="display-12 ">Name:</h6>
          <form action="">
            <input type="text" class="inputform ml-5 " >
          </form>
        <p >(Option)</p>
      </div>
      <div class="row ml-5 ">
        <h6 class="display-12 ">Reg no:</h6>
          <form action="">
            <input type="text" class="inputform ml-5 " >
          </form>
        <p >(Option)</p>
      </div>
      <div class="row ml-5 ">
        <h6 class="display-12 ">Course:</h6>
          <form action="">
            <input type="text" class="inputform ml-5 " >
          </form>
        <p >(Option)</p>
      </div>
      <div class="row ml-5 ">
        <h6 class="display-12 ">Contact No:</h6>
          <form action="">
            <input type="text" class="inputform ml-5 " >
          </form>
        <p >(Option)</p>
      </div>
      <div class="form-group mr-5 pt-5 text-center ">
        <label for="exampleFormControlTextarea1">Please describe in detail about your complain and provide or identify all known person and document to your concerns:</label>
        <textarea class="form-control " id="" rows="10"></textarea>
      </div>
      <div class="form-group mr-5 text-center pt-5">
        <label for="exampleFormControlSelect1">Please describe any positive solution you believe can help to solve your complaint</label>
        <textarea class="form-control " id="" rows="5"></textarea>
      </div>

      <form>
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload evidence</label>
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