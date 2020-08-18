{{-- @extends('layouts.admin')
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
</style>
@endsection

@section('content') --}}

<body>
  {{-- @if(count($messages) > 0) --}}
{{-- <div class="container">
  
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        @foreach ($opinionTypes as $opinion)
        <div class="card">
          <div class="card-body mt-5 mb-3">
          <p>{{$opinion->reply}}</p>
            <div class="row mt-3">
              <div class="col-md-11">
              </div>
              <div class="col-md-1 ml-auto">
                <div><a href="#" class="btn btn-transparent"><i class="fas fa-trash-alt"></i></a></div> <br>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="col-md-2"></div>
      
    </div>
    
  </div>
  
</div> --}}
  {{-- @endforeach --}}

</body>

@endsection