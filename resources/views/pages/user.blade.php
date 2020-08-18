{{-- @extends('layouts.admin')

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
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Reg-no</th>
          <th scope="col">Password</th>
          <th scope="col">Course</th>
          <th scope="col">Role</th>
          <th scope="col">Action</th>  
        </tr>
      </thead>
      <tbody>


        <tr>
              
        <th scope="row">1</th>
        <td>Lyimo Henry Patrick</td>
          <td>2017-04-01597</td>
          <td>Coict2019</td>
          <td>Bsc with Computer Science</td>
          <td>Student</td>
          <td><button class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
          </td>
          
        </tr>
        
    </table>
  
  </div>

  {{-- reply modal --}}
  {{-- <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new resolver</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
          <form action="">
            @csrf
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Name</label>
              <div class="col-sm-7">
                <input required type="text" name="name" class="form-control form-control-sm ml-4" id="" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Reg-no</label>
              <div class="col-sm-7">
                <input required type="text" name="reg-no" class="form-control form-control-sm ml-4" id="" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">password</label>
              <div class="col-sm-7">
                <input required type="password" name="password" class="form-control form-control-sm ml-4" id="" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Course</label>
              <div class="col-sm-7">
                <input required type="text" name="course" class="form-control form-control-sm ml-4" id="" placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label ml-3">Role</label>
              <div class="input-group col-sm-7 ml-4">
                <select class="custom-select  " name="role" id="inputGroupSelect01" required>
                  <option selected>Choose Role</option>
                  <option value="1">Student</option>
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
  
</body> --}}

    
{{-- @endsection  --}}