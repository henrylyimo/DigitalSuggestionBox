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
                <h2 class="font-weight-200">OPINION FORM</h2>
                <p class="font-size-30">All person detail remain  <span class="text-danger font-weight-bold" >CONFIDENTIAL</span>  </p>
                <P>Your suggestion will be acknowledged wait for feedback</P>
              </div>
            </div>
            
          </div>
          
        </section>
        <section class="cont pt-5 ">
          <form action="postOpinion" method="POST" enctype="multipart/form-data">  
            @csrf  
            <div class="row pl-3">
              <div class="col-md-5">
                <div class="input-group ">
                  <select class="custom-select" name="category" id="inputGroupSelect01" required> 
                    <option selected>Nature of Opinion</option>
                    @foreach ($opinionTypes as $opinionType)
                  <option value="{{$opinionType->id }}">{{ $opinionType->category }}</option>
                    @endforeach
                  
                  </select>
                </div>
              </div>
  
              <div class="col-md-5">
                <div class="form-group">
                <input type="text" class="form-control" name="contact" value="{{ $opinionType->contact }}" placeholder="eg +255 765 63 173" >
                <small id="" class="form-text text-muted">It is an option to fill it.</small>
                </div>
              </div>
            </div>
              
            <div class="row">
              <div class="col-lg-11">
                <div class="form-group mr-5 pt-5 text-center ">
                  <label for="">Please describe in detail about your opinion</label>
                <textarea   class="form-control" name="opinion" rows="10" required>{{ $opinionType->body }}  </textarea>
                </div>
  
                  <div class="row">
                    <div class="mr-5 ml-auto mb-3" >
                      <button  type="submit" class="btn btn-primary" onclick="toastr.success('OPINION SENT');" data-toggle="modal" >SUBMIT</button>
                    </div>
                  </div>
              </div>
            </div>  
        </form>
    
        </section>
      </div>
    </div>  

  </div>

  {{-- reply modal --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
</body>   
@endsection
@section('scripts')
    {{-- <script>
      CKEDITOR.replace( 'opinion' );
    </script> --}}
@endsection

<script>

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>