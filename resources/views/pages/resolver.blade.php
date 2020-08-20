@extends('layouts.admin')

@section('styles')
<style>
  .fa-trash-alt
{
  color: whitesmoke;
}
.fa-trash-alt:hover
{
  color: ;
  cursor: pointer;
}

</style>

@endsection

@section('content')
<body>
  <div class="container pt-5 mt-5 ">
    <div class="row">
      <div class="col-md-10"></div>
    <div class="col-md-2">
      <a href="#" class="btn btn-primary mb-3 ml-1" data-toggle="modal" data-target="#replyModal">Add Resolver</a>
    </div>
    </div>
    @if(count($resolvers) > 0)
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          {{-- <th scope="col">#</th> --}}
          <th scope="col">Name</th>
          <th scope="col">Professional/Role</th>
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
          <th scope="col">Action</th>  
        </tr>
      </thead>
      <tbody>
        @foreach ($resolvers as $resolver)
        <tr>
              
        <td>{{ $resolver->name }}</td>
          <td>{{ $resolver->professional }}</td>
          <td><a href="http://gmail.com">{{ $resolver->email}}</a></td>
          <td>{{ $resolver->contact}}</td>
        <td>
          {{-- <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_resolver" data-resolver="{{($resolver)}}">
            <i class="fas fa-pencil-alt"></i></a> --}}
          <form class="d-inline" action="{{ url('resolver/'.$resolver->id ) }}" method="post">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
           </form>
          </td>
          
        </tr>
        
        @endforeach

        @else 

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Professional</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>
              <td><strong><p>No resolver found!</p></strong></td>
          </tbody>
        </table>
         @endif
       
    </table>
  
  </div>

  {{-- reply modal --}}
  <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new resolver</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
          <form action="postResolver" method="POST">
            @csrf
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Name</label>
              <div class="col-sm-7">
                <input required type="text" name="name" class="form-control form-control-sm ml-4" id="" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Professional</label>
              <div class="col-sm-7">
                <input required type="text" name="professional" class="form-control form-control-sm ml-4" id="" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Email</label>
              <div class="col-sm-7">
                <input required type="text" name="email" class="form-control form-control-sm ml-4" id="" placeholder="abc@abcd.com">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Contact_no</label>
              <div class="col-sm-7">
                <input required type="text" name="contact" class="form-control form-control-sm ml-4" id="" placeholder="">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  {{-- edit form modal --}}
  {{-- <div class="modal fade" id="edit_resolver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new resolver</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        

        <form action="{{url("/resolver/{id}")}}" method="POST">
          @csrf
        <div class="modal-body">
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Name</label>
              <div class="col-sm-7">
                <input required type="text"  name="name" class="form-control form-control-sm ml-4" id="name" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Professional</label>
              <div class="col-sm-7">
                <input required type="text" name="professional" class="form-control form-control-sm ml-4" id="professional" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Email</label>
              <div class="col-sm-7">
                <input required type="text" name="email" class="form-control form-control-sm ml-4" id="email" placeholder="abc@abcd.com">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Contact_no</label>
              <div class="col-sm-7">
                <input required type="text" name="contact" class="form-control form-control-sm ml-4" id="contact" placeholder="">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div> --}}
  
</body>

    
@endsection

@section('scripts')
<script>
  $('#edit_resolver').on('show.bs.modal' , function(event)){
    var button = $(event.relatedTarget)
    var resolver = button.data('resolver')



    var modal =$(this)
    modal.find('#name').val(resolver['name'])
    modal.find('#professional').val(resolver['professional'])
    modal.find('#email').val(resolver['email'])
    modal.find('#contact').val(resolver['contact'])
  }
</script>
    
@endsection