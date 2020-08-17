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
  <div class="container mt-5 pt-5">
    <div class="card">
      <div class="card-body">
        <section class="header">
          <div class="row col-md-11">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <div class="img-box ">
                <img src="{{ asset('/image/logo.png') }}" height="200px" alt="" class="header-img">
              </div>         
            </div>
            <div class="col-md-7">
              <div class="header-box text-center mt-2 ">
                <h1 class="font-weight-bold" >UNIVERSITY OF DAR ES SALAAM</h1>
                <h2 class="font-weight-200">COMPLAINT FORM</h2>
                <p class="font-size-30">All person detail remain  <span class="text-danger font-weight-bold" >CONFIDENTIAL</span>  </p>
                <P>Your complain will be acknowledged wait for feedback</P>
              </div>
            </div>
            
          </div>
          
        </section>
        <section class="cont pt-5 ">
          <form action="postComplaint" method="POST">  
            @csrf
            <div class="row pl-3">
              <div class="col-md-5">
                <div class="input-group mb-3">
                  <select class="custom-select" name="category" id="inputGroupSelect01" required>
                    <option selected>Nature of Complaint</option>
                    @foreach ($complaintTypes as $complaintType)
                  <option value="{{ $complaintType->id }}">{{ $complaintType->category }}</option>
                    @endforeach
                  
                  </select>
                </div>
              </div>
  
              <div class="col-md-5">
                <div class="form-group">
                <input type="text" class="form-control" value="{{ $complaintType->contact_no }}" name="contact" placeholder="Phone no:" required>
                </div>
              </div>
            </div>
    
            <div class="row">
              <div class="col-md-11">
                <div class="form-group mr-5 pt-5 text-center ">
                  <label for="complain">Please describe in detail about your complain and provide or identify all known person and document to your concerns:</label>
                <textarea class="form-control" name="complaint" id="" rows="10" required="">{{ $complaintType->complaint }}</textarea>
                </div>
                <div class="form-group mr-5 text-center pt-5">
                  <label for="solution">Please describe any positive solution you believe can help to solve your complaint</label>
                  <textarea required class="form-control" name="solution" id="" rows="10" >{{ $complaintType->solution }}</textarea>
                </div>
          
                
                  {{-- <div class="form-group">
                    <label for="">Upload evidence</label>
                    <input type="file" name="evidence" class="form-control-file" id="">
                  </div> --}}
  
                  <div class="row">
                    <div class="mr-5 ml-auto mb-3" >
                      <button href="#" type="submit" class="btn btn-primary active" role="button" aria-pressed="true">Submit</button>
                    </div>
                  </div>
              </div>
            </div>
        </form>
        </section>
      </div>
    </div>
  </div>
    
</body>

@endsection
@section('scripts')
    {{-- <script>
      CKEDITOR.replace( 'complain' );
      CKEDITOR.replace( 'solution' );

    </script> --}}
@endsection