@extends('layouts.admin')


@section('content')
<head>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<style>
  .img-box
  {
    width: 100%;
    height: 70vh;
  }
  .home
  {
    height: 80vh;
    width: 100%
  }
  .hometext h1
  {
    font-size: 50px;
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif
  }
  .hometext p
  {
    font-size: 12px;
  }
  

</style>

</head>
<title>Homepage</title>
<body>
  <section class="home">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="hometext pl-5 pt-5">
            <h1 class="">What to Do</h1>
          
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sequi molestias mollitia molestiae iusto ad cum quas soluta amet, dolor, nobis in repellat inventore obcaecati pariatur numquam sunt placeat deserunt animi repudiandae reprehenderit possimus? Magni aut facilis laborum doloremque beatae vel facere! Exercitationem earum sed ut laboriosam fugit dicta obcaecati in dignissimos numquam laudantium, non fuga quasi labore ducimus eos? lorem20</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo esse consectetur eos aut numquam sapiente fugiat odit quo repudiandae, sint ad impedit eligendi atque fuga id eaque, voluptatem ipsa neque!</p>
          <button class="btn btn-primary">Read more..</button>

          </div>
          
        </div>
        <div class="col-md-6">
          <img class="img-box pt-5 pl-4" src="{{ asset('/image/man.png') }}" alt="">
        </div>
        
      </div>
    </div>
  </section>
</body>
    
@endsection