@extends('layout.base')
@section('title', 'Cadastrar')
@section('content')
  <h2>Cadastrar Musica</h2>
  
  <form action="{{ route('salvar') }}"method="post">
  {{csrf_field()}}
     <div>
           <label> Nome da Musica</label>
           <input type="text" name="nome_musica" placeholder="Nome da Musica">
     </div>
     <div>
          <label> Nome do Artista</label>
          <input type="text" placeholder="Nome da Artista">
     </div>
     <div>
          <label> Rank da Musica</label>
          <input type="number" name="rank_musica"placeholder="Rank da Musica">
     </div>

     <button type="submit" name="rank_musica"  placeholder="Rank da Musica" >Salvar</button>
  </form>
@endsection