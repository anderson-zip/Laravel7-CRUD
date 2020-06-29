@extends('layouts.admin')

@section('title','Editar Tarefa')

@section('content')
    <h1>Editar tarefas</h1>

    @if($errors->any())
        <x-alert>
            @foreach($errors->all() as $error)
                {{ $error  }}<br>
            @endforeach
        </x-alert>
    @endif
    <form method="post">
        @csrf

        <input type="text" name="titulo" value="{{$data->titulo}}">
        <input type="submit" value="Salvar">

    </form>

@endsection
