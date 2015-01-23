@extends('layout.front')
@section('title') Usuarios @stop
@section('content')

    <h1 xmlns="http://www.w3.org/1999/html">Admnistración de usuarios</h1>
    <div class="search">
        <form action="">
        <button  class="icon-search"></button>
        {{Form::input('text','search','',['class' => 'search-input'])}}
        </form>
    </div>

    <div class="Table-content">
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido</th>
                <th>Segundo Apellido</th>
                <th>E-mail</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->user_name}}</td>
                    <td>{{$user->user_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="" class="icon-folder-open "></a>
                        <a href="" class="icon-trash-empty "></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    {{  $users->links(); }}
@stop