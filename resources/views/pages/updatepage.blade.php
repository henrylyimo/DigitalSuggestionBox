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
<div class="container pt-5">
   <h1 class="text-center font-weight-bold pt-4">News and Updates</h1>
   @if(count($creates) > 0)
   <div class="container pt-5">
    @foreach ($creates as $createnews)
    <div class="card">
      <div class="card-body">
        <div class="box">
        <h4 class="text-center font-weight-bold">{{$creates->header}}</h4>
        <p>{{$creates->news}}</p>
        </div> 
        <div class="row">
          <div class="col-md-10"></div>
          @role('Secretary')
          <div class="col-md-2">
            <form class="d-inline" action="{{ url('updatepage/'.$user->id ) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-transparent"><i class="fas fa-trash-alt"></i></button>
            </form>
          </div>
          @endrole
        </div>
        
      </div>
    </div>
    @endforeach
  </div>
  @else
  <p>no message</p>
  @endif

</div>

</body>

@endsection