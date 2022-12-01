@extends('layout.layout')
@section('naglowek')
<h1>Szczegóły posta</h1>
@endsection
@section('tresc')
<form method="POST" action="{{ route('posty.destroy', $post->id) }}">
    @csrf
    @method('DELETE')
    <div class="form-group">
      <label for="tytul">Tytuł</label>
      <input type="text" class="form-control" id="tytul" disabled="disabled" value="{{ $post->tytul }}" name="tytul">
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" disabled="disabled" value="{{ $post->autor }}"  name="autor">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" disabled="disabled" value="{{ $post->email }}"  name="email" >
    </div>
    <div class="form-group">
      <label for="tresc">Treść</label>
      <textarea class="form-control" id="tresc" rows="4" disabled="disabled" name="tresc">{{ $post->tresc }} </textarea>
    </div>
    <a href="{{ route('posty.index') }}"><button type="button" class="btn btn-primary">Powrót do listy</button></a>
    @auth
    <a href="{{ route('posty.edit', $post->id) }}"><button type="button" class="btn btn-success">Edytuj</button></a>
    <button type="submit" class="btn btn-danger">Usuń</button>
    @endauth
  </form>
@endsection

