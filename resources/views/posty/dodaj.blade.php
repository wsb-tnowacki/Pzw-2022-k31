@extends('layout.layout')
@section('naglowek')
<h1>Dodaj posta</h1>
@endsection
@section('tresc')
<form method="POST" action="{{ route('posty.store') }}">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" id="tytul" name="tytul" placeholder="Podaj tytuł posta">
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor" placeholder="Podaj autora posta">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Podaj email">
    </div>
    <div class="form-group">
      <label for="tresc">Example textarea</label>
      <textarea class="form-control" id="tresc" rows="4" name="tresc"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

