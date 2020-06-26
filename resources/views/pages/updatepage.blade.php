@extends('layouts.admin')

@section('content')
<style>
  .box
  {
    background-color: black;
    height: 3px;
    width: 140px;
    margin-left: 67vh;
    
  }
  .box1
  {
    background-color: black;
    height: 5px;
    width: 50px;
    margin-left:74vh;  
  }
  
</style>
</head>
<body>
<div class="container">
   <h5 class="display-6 text-center pt-5 pr-4">
     News & Update
   </h5>
   <div class="box1 pl-5"></div>
   <div class="box pl-5"> </div>
   <div class="box1 pl-5 mb-4 "></div>
   <div class="row ml-5 pt-4">
     <div class="col-xl-10 col-md-8">
       <div class="card">
         <div class="card-header bg-dark text-light text-center">
           <h5 class="display-6">
             Newslater
           </h5>
         </div>
         <div class="card-body">
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga itaque eveniet dolor? Eaque,
               recusandae sapiente! Accusantium ipsum harum ab dignissimos odio sint obcaecati totam esse 
               culpa excepturi ipsam, facilis necessitatibus nulla accusamus rem ullam cumque praesentium soluta?
                Voluptas, assumenda sunt!
            </p>
         </div>
        <div class="row">
          <div class="col-lg-2 ml-auto mr-5 mb-5">
            <button class="btn btn-block btn-primary">
              Read More
            </button>
          </div>
        </div>
       </div>
     </div>
   </div>

   <div class="row ml-5">
    <div class="col-xl-10 col-md-8">
      <div class="card">
        <div class="card-header bg-dark text-light text-center">
          <h5 class="display-6">
            Newslater
          </h5>
        </div>
        <div class="card-body">
           <p class="lead">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga itaque eveniet dolor? Eaque,
              recusandae sapiente! Accusantium ipsum harum ab dignissimos odio sint obcaecati totam esse 
              culpa excepturi ipsam, facilis necessitatibus nulla accusamus rem ullam cumque praesentium soluta?
               Voluptas, assumenda sunt!
           </p>
        </div>
       <div class="row">
         <div class="col-lg-2 ml-auto mr-5 mb-5">
           <button class="btn btn-block btn-primary">
             Read More
           </button>
         </div>
       </div>
      </div>
    </div>
  </div>

  <div class="row ml-5">
    <div class="col-xl-10 col-md-8">
      <div class="card">
        <div class="card-header bg-dark text-light text-center">
          <h5 class="display-6">
            Newslater
          </h5>
        </div>
        <div class="card-body">
           <p class="lead">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga itaque eveniet dolor? Eaque,
              recusandae sapiente! Accusantium ipsum harum ab dignissimos odio sint obcaecati totam esse 
              culpa excepturi ipsam, facilis necessitatibus nulla accusamus rem ullam cumque praesentium soluta?
               Voluptas, assumenda sunt!
           </p>
        </div>
       <div class="row">
         <div class="col-lg-2 ml-auto mr-5 mb-5">
           <button class="btn btn-block btn-primary">
             Read More
           </button>
         </div>
       </div>
      </div>
    </div>
  </div>
</div>

</body>

@endsection