@extends('layout')
@section('naglowek')
<h1>O nas</h1>
@endsection
@section('tresc1')
Treść 1 o nas - dane treści 1
@endsection
@section('tresc2')
@isset($zadanka)
<ol>
@foreach ($zadanka as $zadanie)
    <li>{{ $zadanie }}</li>
@endforeach
</ol>
@endisset
@endsection
@section('tresc3')
@isset($taski)
<ol>
@foreach ($taski as $task)
    <li>{{ $task }}</li>
@endforeach
</ol>
@endisset
@endsection

