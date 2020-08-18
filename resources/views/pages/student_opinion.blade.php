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
  @if(count($opinions) > 0)
    <div class="container mt-5 pt-5">

      <div class="row">

            @foreach ($opinions as $opinion)
                
        <div class="col-md-6" id="accordion">
          <div class="card">
            <div class="card-body">
            <p>{{ $opinion->body }}</p>
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
                      <a class="dropdown-item" href="#">{{ $opinion->contact_no }}</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 ml-auto">
                  <div class="row">
                    <div><a href="#" class="btn btn-transparent"><i class="fas fa-trash-alt"></i></a></div> <br>
                  <div><a href="#" class="open-RequestDialog btn btn-transparent"><i class="fas fa-reply" data-toggle="modal"data-reply="" data-target="#replyModal"></i></a></div> 
                  {{-- <a href="/get" class="btn btn-link" id="{{ $opinion->id }}" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fas fa-reply"></i>
                  </a> --}}
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10">
                <div id="collapseOne" class="collapse" aria-labelledby="" data-parent="#accordion">
                    <div class="card-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                          <div>
                            <label for="">opinion number</label>
                        <input type="number" name="number" value="">
                          </div>
                          <input type="text" name="replyId" hidden>
                          <label for=""></label>
                          <textarea class="form-control" name="reply"  cols="50" rows="5"></textarea>
                        </div>
                        <div class="row">
                          <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     
        @endforeach
@else 
 <p>no opinion</p>
 @endif

      </div>
      

    </div>
  {{-- @endif --}}
  {{-- reply modal --}}
  <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Feedback</h5>
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
          <button type="button" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>  
  
</body>


    
@endsection
<script>
    // $(document).on("click", ".open-RequestDialog", function () {
    //  var myRequestId = $(this).data('id');
    //  console.log(myRequestId);
    //  $(".modal-body #replyId").val( myRequestId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');

//      $('#replyModal').on('show.bs.modal',function(event){
//        var button = $(event.relatedTarget)
//        var reply =button.data('reply')

//        var modal =$(this)
//        modal.find('#editForm').attr('action','edit/reply/'+ reply['id'])
//        modal.find('.replyNo').text(reply[number])
//      }
// });
</script>