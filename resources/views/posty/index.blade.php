@extends('layout.layout')
@section('naglowek')


                    <h1>Lista postów</h1>
@endsection
@section('tresc')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tytul</th>
        <th scope="col">Autor</th>
        <th scope="col">Data utworzenia</th>
        @auth
        <th scope="col">Akcja</th>  
        @endauth
      </tr>
    </thead>
    <tbody>
      @php
        $lp =1;
      @endphp
  @foreach ($posty as $post)
      <tr>
        <th scope="row">{{ $lp++ }} id: {{ $post->id }}</th>
        <td><a href="{{ route('posty.show', $post->id) }}"> {{ $post->tytul }} </a></td>
        <td>{{ $post->autor }}</td>
        <td>{{ date('j F Y', strtotime($post->created_at)) }}</td>
        @auth
        <td>
          <form class="form-inline" method="POST" action="{{ route('posty.destroy', $post->id) }}" >
            @csrf
            @method('DELETE')
          <a href="{{ route('posty.edit', $post->id) }}">
            <button class="btn btn-success m-1" type="button">E</button>
          </a>
          <button type="submit" class="btn btn-danger m-1">U</button>
          </form>
        </td>     
        @endauth
        </tr>
  @endforeach
    </tbody>
  </table>
  {{-- dump($posty) --}}
@endsection

