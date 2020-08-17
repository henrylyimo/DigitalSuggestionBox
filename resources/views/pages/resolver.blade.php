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
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Professional</th>
          <th scope="col">Email</th>
          <th scope="col">Contact</th>
          <th scope="col">Role</th>
          <th scope="col">Action</th>  
        </tr>
      </thead>
      <tbody>
        @foreach ($resolvers as $resolver)
        <tr>
              
        <th scope="row">{{ $resolver->id }}</th>
        <td>{{ $resolver->name }}</td>
          <td>{{ $resolver->professional }}</td>
          <td>{{ $resolver->email}}</td>
          <td>{{ $resolver->contact}}</td>
          <td>{{ $resolver->role }}</td>
          <td><button class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
          </td>
          
        </tr>
        
        @endforeach

        @else 
         <p>no resolvers</p>
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

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Role</label>
              <div class="col-sm-7">
                <input required type="text" name="role" class="form-control form-control-sm ml-4" id="" placeholder="">
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
  
</body>

    
@endsection