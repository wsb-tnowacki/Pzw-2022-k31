@extends('layout.layout')
@section('naglowek')
<h1>O nas</h1>
@endsection

@section('tresc')
@isset($zadanka)
<ol>
@foreach ($zadanka as $zadanie)
    <li>{{ $zadanie }}</li>
@endforeach
</ol>
@endisset

@isset($taski)
<ol>
@foreach ($taski as $task)
    <li>{{ $task }}</li>
@endforeach
</ol>
@endisset
@endsection

