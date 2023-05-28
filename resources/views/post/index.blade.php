@extends('layouts.adm')

@section('admin')
@parent
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Таблица Журналов
                </button>
                <!-- Modal -->
                <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Таблица журналов</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover">


                                    <tr class="text-center">
                                        <th scope="col">id</th>
                                        <th scope="col">Название</th>
                                        <th scope="col">Изображение</th>
                                        <th scope="col">Описание</th>
                                        <th scope="col">Полное описание</th>
                                        <th scope="col">Цена</th>
                                        <!-- <th scope="col">Категория</th> -->
                                        <th scope="col">
                                            Управление
                                        </th>
                                    </tr>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post-> title}}</td>
                                        <td>{{$post-> image}}</td>
                                        <td>{{$post-> content}}</td>
                                        <td>{{$post-> full_content}}</td>
                                        <td>{{$post-> price}}</td>
                                        <!-- <td>{{$post->category_id}}</td> -->
                                        <td class="text-center">
                                            <form class="btn " action="{{route('table.delete', $post->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-success" value="Удалить">
                                            </form>

                                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">
                                                Изменить
                                            </button>

                                        </td>
                                    </tr>

                                    @endforeach

                                </table>
                                <form class="btn " action="{{route('table.export')}}" method="post">
                                    @csrf
                                    @method('GET')
                                    <input type="submit" class="btn btn-secondary" value="Отчёт">
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Модальное изменение постов -->
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Изменение</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid my-2 mx-2">
                                    <div class="row mb-2">
                                        <div class="col-sm-12">
                                            <form action="{{route('table.update', $post->id)}}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Название</label>
                                                    <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Изображение</label>
                                                    <input type="text" name="image" class="form-control" id="image" value="{{$post->image}}"></input>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="content" class="form-label">Информация</label>
                                                    <textarea type="text" name="content" class="form-control" id="content" value="{{$post->content}}">{{$post->content}}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="full_content" class="form-label">Полная информация</label>
                                                    <textarea type="text" name="full_content" class="form-control" id="full_content" value="{{$post->full_content}}">{{$post->full_content}}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="price" class="form-label">Цена</label>
                                                    <input name="price" type="number" class="form-control" id="price" value="{{$post->price}}">
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" type="submit">Сохранить</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <button type="button" class="btn btn-secondary my-5" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    Таблица Сотрудников
                </button>
                <!-- Modal -->
                <div class="modal fade modal-lg" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel1">Сотрудники</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover">
                                    <tr class="text-center">
                                        <th scope="col">id</th>
                                        <th scope="col">ФИО</th>
                                        <th scope="col">Должность</th>
                                        <th scope="col">Изображение</th>
                                        <th scope="col">Телефон</th>
                                        <th scope="col">Адресс</th>
                                        <th scope="col">
                                            Управление
                                        </th>
                                    </tr>
                                    @foreach($workers as $date)
                                    <tr>
                                        <td>{{$date->id}}</td>
                                        <td>{{$date-> name}} {{$date-> first_name}} {{$date-> last_name}}</td>
                                        <td>{{$date-> description}}</td>
                                        <td>{{$date-> image}}</td>
                                        <td>{{$date-> phone}}</td>
                                        <td>{{$date-> adress}}</td>
                                        <td class="text-center">

                                            <form class="btn " action="{{route('table.deleteW', $date->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-success" value="Удалить">
                                            </form>
                                            <!-- 
                                            <button class="btn btn-primary" data-bs-target="#exampleModalToggleUpdateW" data-bs-toggle="modal">
                                                Изменить
                                            </button> -->


                                        </td>
                                    </tr>

                                    @endforeach

                                </table>
                                <form class="btn " action="{{route('table.exportW')}}" method="post">
                                    @csrf
                                    @method('GET')
                                    <input type="submit" class="btn btn-secondary" value="Отчёт">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Изменение сотрудников -->
                <div class="modal fade" id="exampleModalToggleUpdateW" aria-hidden="true" aria-labelledby="exampleModalToggleUpdateWorker" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalToggleUpdateWorker">Изменение сотрудника</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid my-2 mx-2">
                                    <div class="row mb-2">
                                        <div class="col-sm-12">
                                            <form action="{{route('table.update', $post->id)}}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Имя</label>
                                                    <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Фамилия</label>
                                                    <input type="text" name="image" class="form-control" id="image" value="{{$post->image}}"></input>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="content" class="form-label">Отчество</label>
                                                    <textarea type="text" name="content" class="form-control" id="content" value="{{$post->content}}">{{$post->content}}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="full_content" class="form-label">Должность</label>
                                                    <textarea type="text" name="full_content" class="form-control" id="full_content" value="{{$post->full_content}}">{{$post->full_content}}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="price" class="form-label">Цена</label>
                                                    <input name="price" type="number" class="form-control" id="price" value="{{$post->price}}">
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" type="submit">Сохранить</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <button type="button" class="btn btn-secondary my-5" data-bs-toggle="modal" data-bs-target="#exampleModalUser">
                    Таблица Пользователей
                </button>
                <!-- Modal -->
                <div class="modal fade modal-lg" id="exampleModalUser" tabindex="-1" aria-labelledby="exampleModalLabelUser" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabelUser">Пользователи</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover">
                                    <tr class="text-center">
                                        <th scope="col">id</th>
                                        <th scope="col">Имя</th>
                                        <th scope="col">Фамилия</th>
                                        <th scope="col">Почта</th>
                                        <th scope="col">Роль</th>
                                        <th scope="col">Пароль</th>
                                        <th scope="col">
                                            Управление
                                        </th>
                                    </tr>
                                    @foreach($users as $us)
                                    <tr>
                                        <td>{{$us->id}}</td>
                                        <td>{{$us-> name}}</td>
                                        <td>{{$us-> name}}</td>
                                        <td>{{$us-> email}}</td>
                                        <td>{{$us-> role}}</td>
                                        <td>{{$us-> password}}</td>
                                        <td class="text-center">

                                            <form class="btn " action="{{route('table.deleteU', $us->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-success" value="Удалить">
                                            </form>

                                        </td>
                                    </tr>

                                    @endforeach

                                </table>
                                <form class="btn " action="{{route('table.exportU')}}" method="post">
                                    @csrf
                                    @method('GET')
                                    <input type="submit" class="btn btn-secondary" value="Отчёт">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- <button type="button" class="btn btn-secondary my-5" data-bs-toggle="modal" data-bs-target="#exampleModalCategory">
                    Таблица Категорий
                </button> -->
                <!-- Modal Категорий -->
                <div class="modal fade " id="exampleModalCategory" tabindex="-1" aria-labelledby="exampleModalLabelCategoty" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabelCategory">Пользователи</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover">
                                    <tr class="text-center">
                                        <th scope="col">id</th>
                                        <th scope="col">Название</th>

                                    </tr>
                                    @foreach($categories as $cat)
                                    <tr>
                                        <td>{{$cat->id}}</td>
                                        <td class="text-center">{{$cat-> name}}</td>
                                    </tr>

                                    @endforeach

                                </table>
                                <form class="btn " action="{{route('table.exportU')}}" method="post">
                                    @csrf
                                    @method('GET')
                                    <input type="submit" class="btn btn-secondary" value="Отчёт">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection