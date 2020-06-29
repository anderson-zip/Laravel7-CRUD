@extends('layouts.admin')

@section('title', "Adicionar Tarefa")

@section('content')
    <h1>Adicionar tarefas</h1>

    @if($errors->any())
        <x-alert>
            @foreach($errors->all() as $error)
                {{ $error  }}<br>
            @endforeach
        </x-alert>
    @endif

    <form method="post">
        @csrf

        <input type="text" name="titulo">
        <input type="submit" value="Adicionar">
    </form>

@endsection
