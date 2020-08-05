@extends('layouts.admin')

@section('styles')
<style>

  body{
    background-color: whitesmoke;
  }
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
  {{-- @if(count($opinions) > 0) --}}
    <div class="container pt-5">

      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae debitis perspiciatis animi explicabo quidem eveniet. Temporibus deleniti tempore magni suscipit.</p>
              <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3  ">
                  <button class="btn btn-outline-primary ml-auto">Read more...</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10">
                  <div class="dropdown show">
                    <a class="btn btn-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Contact                 
                    </a>
                  
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">0785130009</a>
                    </div>
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
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae debitis perspiciatis animi explicabo quidem eveniet. Temporibus deleniti tempore magni suscipit.</p>
              <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3  ">
                  <button class="btn btn-outline-primary ml-auto">Read more...</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10">
                  <div class="dropdown show">
                    <a class="btn btn-transparent dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Contact                 
                    </a>
                  
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">0785130009</a>
                    </div>
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
        </div>
      </div>
      

       {{-- @foreach ($opinions as $opinion)
          
      <div class="card m-3 mb-5  mt-5">
        <div class="card-body">
            <div class="box">
              <h4 class="text-center font-weight-bold"></h4>
            <p>{{ $opinion->body }}</p>
            </div>
            
          <div class="row">
            <div class="col-md-10">             
            <button type="text" class="btn btn-transparent">{{ $opinion->contact_no }}</button>                        
            </div>
            <div class="col-md-2 ml-auto">
              
            </div>
          </div>
          
          <br>
          <div class="row">
            <div class="col-md-10">
                          
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
      @endforeach  --}}
    </div>
  {{-- @endif --}}
  {{-- reply modal --}}
  <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label for=""></label>
              <textarea class="form-control" name="reply" id="" cols="30" rows="10"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>
  
</body>


    
@endsection