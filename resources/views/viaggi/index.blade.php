@extends('layouts.default')

@section('title', 'Pagina principale')

@section('main_content')
    <h1>contenuto del main</h1>
    <a href="{{ route('viaggi.details') }}">Dettagli</a>
@endsection
@section('footer_content')
    <h1>contenuto del footer</h1>
@endsection
