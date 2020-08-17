@extends('layouts.admin')

@section('styles')

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
  .card-user .img-fluid
  {
    color: white;
    height: 70px;
    width: 70px;
    background-color: white;
  }
</style> 


    
@endsection

@section('content')


<title>Homepage</title>
<body>
    <div class="container ">
      <div class="container pt-3 mt-5">
        <div class="card mt-5 ">
          <div class="row">
            <div class=" col-md-2 user-img mt-3 mb-3">
              <img src="{{ asset('/image/icon.png') }}" alt="" class="img-fluid ml-5">
            </div>
            <div class="col-md-8 mt-4 user-name">
              <p >HENRY PATRICK LYIMO</p>
            </div>  
            <div class="col-md-2 mt-5 ">
              <a href="" class="btn btn-outline-primary">Edit Profile</a>
            </div>           
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row">
          <div class="col-md-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
              {{-- <div class="card-header">Header</div> --}}
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p>150</p>
                    <p>Total Complaint</p>
                  </div>
                  <div class="col-md-4 card-user">
                    <img src="{{ asset('/image/1.png') }}" alt="" class="img-fluid">
                  </div>
                </div>
                {{-- <h5 class="card-title" style="font-weight: 800">Primary card title</h5> --}}
                {{-- <div class="card-footer text-muted">
                  2 days ago
                </div> --}}
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-3"></div>
          <div class="col-md-3"></div>

        </div>
      </div>
    </div> 

</body>
    
@endsection