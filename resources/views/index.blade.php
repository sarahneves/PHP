@extends('layout.base')
@section('title', 'Index')
@section('content')
<p>Top 10 Minhas Músicas</p>
<div>
  <table id="customers">
      <tr>
        <th>Rancking</th>
        <th>Música</th>
        <th>Artista</th>
      
      </tr>
      
      <tbody>
            @foreach($musicas as $musica)
              <tr>
                <td class="rank">{{ $musica->rank}}</td>
                <td>{{$musica->nome_musica}}</td>
                <td>{{$musica->nome_artista}}</td>
              </tr>
            @endforeach
      </tbody>
  </table>
  <a href="{{ route('cadastrar' )}}">Cadastrar</a>
</div>
@endsection