@extends('layouts.admin')

@section('styles')

<style>  
  body
  {
    background-color: #e6ffff;
  }
  .box-home h2
  {
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    font-style: italic;
  }

  .box-home h4
  {
    font-weight: 700;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
 
  }
  .box-home1 h5
  {
    font-weight: 700;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
  }
  .login-img
     {
         width: 80%;
         margin-top: 150px;
         padding-left: 50px;
         size: 70
         
     }

  
 
</style> 


    
@endsection

@section('content')


<title>Homepage</title>
<body>
    <div class="container ">
      <div class="container pt-3 mt-5">
        <div class="row">
          <div class="col-md-7">
            <div class="row box-home pt-4">
              <h2 >Welcome to Students opinions and challenges information system</h2 >
              <h4 class="pt-4">What Platform does?</h4>
              <p>Students opinion and challenges information system allow students to complain about challanges their facing in University of Dar es Salaam, <br>Also allow students to provide opinions about positive things that may be implemented in University of Dar es Salaam. </p> 
               
              <div class="box-home1">
                <h5 class="pl-4">Students</h5>
                <p class="pl-5">.Compaint about challanges facing in University of Dar es Salaam</p>
                <p class="pl-5">.Provide opinion about positive things </p>
              </div>

              <div class="box-home1">
                <h5 class="pl-4">UDSM staff on Duty</h5>
                <p class="pl-5">.View compalaint and opinion of students</p>
                <p class="pl-5">.Provide feedback to the students</p>
              </div>

            </div>
          </div>
          <div class="col-md-5">
            <img src="{{ asset('/image/box-image.png') }}" alt="" class="login-img">
          </div>
        </div>
      </div>
    </div> 

</body>
    
@endsection