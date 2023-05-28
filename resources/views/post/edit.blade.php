@extends('layouts.adm')
@section('admin')
@parent


<div class="content-wrapper">

    <div class="container-fluid my-5 mx-5">
        <div class="row mb-2">
            <div class="col-sm-6">
                <form action="{{route('table.update', $post->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input  name="image" class="form-control" id="image"></input>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">content</label>
                        <textarea type="text" name="content" class="form-control" id="content"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="f_content" class="form-label">fuul content</label>
                        <textarea type="text" name="full_content"  class="form-control" id="f_content"></textarea>
                    </div>
                    <div class="mb-3">  
                        <label for="price" class="form-label">price</label>
                        <input name="price" type="number" class="form-control" id="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </form>
            </div>

        </div>
    </div>


</div>

@endsection