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
      <input type="text" class="form-control" id="tytul" value="{{ old('tytul') }}" name="tytul" placeholder="Podaj tytuł posta">
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" value="{{ old('autor') }}" name="autor" placeholder="Podaj autora posta">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Podaj email">
    </div>
    @if ($errors->has('email'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('email') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
      <label for="tresc">Treść</label>
      <textarea class="form-control" id="tresc" rows="4" name="tresc">{{ old('tresc') }} </textarea>
    </div>
    @if ($errors->has('tresc'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('tresc') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif
    <button type="submit" class="btn btn-primary">Dodaj</button>
  </form>
@endsection

