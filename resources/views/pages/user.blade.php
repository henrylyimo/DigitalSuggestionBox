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
      <a href="#" class="btn btn-primary mb-3 ml-1" data-toggle="modal" data-target="#replyModal">Add User</a>
    </div>
    </div>
    
    <table class="table table-hover">
      <thead class="thead-dark">

        <tr>

          <th scope="col">Name</th>
          <th scope="col">Reg-no</th>
          <th scope="col">Course/Role</th>
          <th scope="col">UserRole</th>
          <th scope="col">Action</th>  
        </tr>
      </thead>
      <tbody>

       @foreach ($users as $user)
       <tr>      
       <td>{{$user->name}}</td>
       <td>{{$user->reg_no}}</td>
       <td>{{$user->course}}</td>
       <td>{{$user->roles[0]->name}}</td>
          <td>
            {{-- <button class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button> --}}
            <form class="d-inline" action="{{ url('user/'.$user->id ) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
          </td>
          
        </tr> 
       @endforeach
      
        
    </table>
  
  </div>

  {{-- reply modal --}}
  <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <form method="post" action="register_user">
            @csrf
            {{-- <div>
              @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach($error->all()as $error)
                </ul>
              </div>
            </div> --}}
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Name</label>
              <div class="col-sm-7">
                <input required type="text" name="name" class="form-control form-control-sm ml-4" id="" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Reg-no</label>
              <div class="col-sm-7">
                <input required type="text" name="reg_no" class="form-control form-control-sm ml-4" id="" placeholder="">
              </div>
            </div>


            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Course</label>
              <div class="input-group col-sm-7 ml-4">
                <select class="custom-select  " name="course" id="inputGroupSelect01" required>
                  <option selected>Choose Course</option>
                  <option value="Bsc with Computer">Bsc with Computer</option>
                  <option value="Bsc in Computer Science">Bsc in Computer Science</option>
                  <option value="Bsc in Computer Engineering">Bsc in Computer Engineering</option>
                  <option value="Bsc in Telecommunication">Bsc in Telecommunication</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Role</label>
              <div class="input-group col-sm-7 ml-4">
                <select class="custom-select  " name="role" id="inputGroupSelect01" required>
                  <option selected> Choose Role</option>
                  <option  value="3">Student</option>
                  <option value="2">Secretary</option>
                </select>
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

    
