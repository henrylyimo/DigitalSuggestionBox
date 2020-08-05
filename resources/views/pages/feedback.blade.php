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
</style>
@endsection

@section('content')

<body>
  {{-- @if(count($challenges) > 0) --}}
<div class="container">
  {{-- @foreach ($challenges as $challenge) --}}
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-body mt-5 mb-3">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor molestias ab expedita numquam ex at exercitationem animi nostrum incidunt rerum, voluptate culpa molestiae laboriosam. Suscipit earum ullam corrupti fugiat. Optio, a? Eveniet, expedita ex! Alias reprehenderit veniam commodi quae ipsam quaerat ipsa, minima tempora recusandae aut consequuntur magnam dolor iure.</p>
            <div class="row mt-3">
              <div class="col-md-11">
              </div>
              <div class="col-md-1 ml-auto">
                <div><a href="#" class="btn btn-transparent"><i class="fas fa-trash-alt"></i></a></div> <br>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
      
    </div>
    
  </div>
  {{-- @endforeach --}}
</div>
  {{-- @endforeach --}}

</body>

@endsection