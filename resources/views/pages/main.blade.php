@extends('layouts.default')

@section('title')Linktome.ru
@endsection

@section('description')
    Сервисы помощи логистам.
@endsection

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!

@endsection