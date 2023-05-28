@extends('layouts.adm')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@section('admin')
@parent


<div class="content-wrapper my-5">
    <div class="container text-center container-fluid">
        <div class="row">
            <div class="col my-5">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Добавление данных в таблицу Журналов
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Журнал</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('table.store')}}" method="POST">
                                    @csrf
                                    
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Название</label>
                                        <input type="text" name="title" class="form-control" id="title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Изображение</label>
                                        <input name="image" class="form-control" id="image"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Содержиое</label>
                                        <textarea type="text" name="content" class="form-control" id="content"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="f_content" class="form-label">Полное содержимое</label>
                                        <textarea type="text" name="full_content" class="form-control" id="f_content"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Цена</label>
                                        <input name="price" type="number" class="form-control" id="price">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Создать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col my-5">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    Добавление данных в таблицу Сотрудников
                </button>

                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel1">Сотрудник</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('table.store_worker')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Имя</label>
                                        <input type="text" name="name" class="form-control" id="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">Фамилия</label>
                                        <input type="text" name="first_name" class="form-control" id="first_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">Отчество</label>
                                        <input type="text" name="last_name" class="form-control" id="last_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Должность</label>
                                        <input type="text" name="description" class="form-control" id="description">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Изображение</label>
                                        <input name="image" class="form-control" id="image"></input>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Номер телефона</label>
                                        <textarea type="text" name="phone" class="form-control" id="phone"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="adress" class="form-label">Адресс проживания</label>
                                        <textarea type="text" name="adress" class="form-control" id="adress"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Создать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                
            </div>
        </div>
    </div>
</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@endsection