@extends('layouts.adm')
@section('admin')

<div>
    <div>{{$post->id}}. {{$post->title}}</div>
    <div>{{$post->content}}</div>

</div>
@endsection