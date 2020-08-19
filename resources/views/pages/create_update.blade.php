@extends('layouts.admin')

@section('styles')
   
@endsection


@section('content')
<body>
  <div class="container pt-5 mt-5">
     <div class="card">
       <div class="card-body">
         <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-9 ml-4">
            <div class="form-group">
              <label for="text-centre">WRITE UPDATE HEADER</label>
              <input type="text" class="form-control " id=""  placeholder="" required>

              <div class="row mt-5">
                {{-- <div class="col-lg-1"></div> --}}
                <div class="col-lg-12">
                    <label for="">POST NEW UPDATE </label>
                  <textarea   class="form-control" name="opinion" rows="10" required> </textarea>
                    <div class="row">
                      <div class=" ml-auto mb-3 mt-4" >
                        <button  type="submit" class="btn btn-primary" >SUBMIT</button>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>         
         </div>
        

       


       </div>
     </div>
  </div>
  
</body>

@endsection