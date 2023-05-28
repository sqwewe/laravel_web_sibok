@extends('layouts.main')
@section('Сибиряк', 'Page Title')
@section('header')
@parent


<body class="bg-primary p-2 text-dark bg-opacity-25">

  
  <div class="container mx-auto">
    <div class="row">
      <div class="col text-center">
        <h1>Каталог</h1>
      </div>
    </div>
    <div class="row">
      @foreach ($date as $row)
      <div class="col-6 col-sm-4 mx-2 my-3" style="width: 18rem;">
        <div class="card ">
          <div class="card-body">
            <img src="{{$row->image}}" class="card-img-top, img-thumbnail" style="width: 18rem;" alt="...">
            <h5 class="card-title">{{$row->title}}</h5>
            <p class="card-text">{{$row->content}}. {{$row->full_content}}. Стоимость: {{$row->price}} рублей.</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</body>

@endsection

</html>