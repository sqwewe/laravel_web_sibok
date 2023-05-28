@extends('layouts.main')
@section('Сибиряк', 'Page Title')
@section('header')
@parent

<div class="container mx-auto">
    <div class="row">
        <div class="col text-center">
            <h1>Сотрудники</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($date as $row)
        <div class="col-6 col-sm-4 mx-2 my-3" style="width: 18rem;">
            <div class="card h-100">
                <img src="{{$row->image}}" class="card-img-top, " alt="...">
                <div class="card-body ">

                    <h3 class="card-title">{{$row->name}} {{$row->first_name}} {{$row->last_name}}</h3>
                    <p class="card-text">{{$row->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

</html>