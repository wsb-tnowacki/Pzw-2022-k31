@extends('layout.layout')
@section('naglowek')
<h1>Dodaj posta</h1>
@endsection
@section('tresc')
<form method="POST" action="{{ route('posty.update', $post->id) }}">
    @csrf
    @method('PUT')
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
      <input type="text" class="form-control" id="tytul" value="@if(old('tytul') !== null){{ old('tytul') }}@else{{ $post->tytul }}@endif" name="tytul" >
    </div>
    @if ($errors->has('tytul'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('tytul') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" value="@if(old('autor') !== null){{ old('autor') }}@else{{ $post->autor }}@endif" name="autor" placeholder="Podaj autora posta">
    </div>
    @if ($errors->has('autor'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get('autor') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" value="@if(old('email') !== null){{ old('email') }}@else{{ $post->email }}@endif" name="email" placeholder="Podaj email">
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
      <textarea class="form-control" id="tresc" rows="4" name="tresc">@if(old('tresc') !== null){{ old('tresc') }}@else{{ $post->tresc }}@endif</textarea>
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
    <a href="{{ route('posty.index') }}"><button type="button" class="btn btn-primary">Powrót do listy</button></a>
    <button type="submit" class="btn btn-success">Zmień posta</button>
</form>
@endsection

