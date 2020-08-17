@extends('layouts.admin')

@section('styles')
<style>
  .fa-trash-alt
  {
    color: grey
  }
  .fa-trash-alt:hover
  {
    color: red;
    cursor: pointer;
  }
  .fa-reply
  {
    color: grey
  }
  .fa-reply:hover
  {
    color: black;
    cursor: pointer;
  }

</style>    
@endsection

@section('content')
<body>
  @if(count($complaints) > 0 )
  <div class="container pt-5 mt-5">
    <div class="container pt-5">
      @foreach ($complaints as $complaint)
      <div class="card m-3 mb-5 mt-5">
        <div class="card-body">
              
          <div class="box">
            <h4 class="text-center font-weight-bold">Complaint</h4>
          <p>{{ $complaint->complaint }}</p>
          </div>
          <br>
          <div class="box">
            <h4 class="text-center font-weight-bold">Suggested Solution</h4>
          <p>{{ $complaint->solution }}</p>
          </div>
          <br>
          <div class="row">
            <div class="col-md-10">
              <div class="row">
                <div class="dropdown show">
                  <a class="btn btn-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contact                
                  </a>
                
                  <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">{{ $complaint->contact_no }}</a>
                  </div>
                </div>
                <div><a href="#" class="btn btn-transparent">Evidence</a></div>               
              </div>
              
            </div>
            <div class="col-md-2 ml-auto">
              <div class="row">
                <div><a href="#" class="btn btn-transparent"><i class="fas fa-trash-alt"></i></a></div> <br>
                <div><a href="#" class="btn btn-transparent"><i class="fas fa-reply" data-toggle="modal" data-target="#replyModal"></i></a></div> 
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @else 
       <p>no complaint</p>
      @endif
    </div>
  
  
  </div>
  {{-- reply modal --}}
  <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label for="body"></label>
              <textarea class="form-control" name="body" id="body" cols="30" rows="10"> </textarea>
            </div>
          </form>
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