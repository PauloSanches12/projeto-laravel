@extends('app')

@section('titulo', 'Detalhes do Cliente')

@section('conteudo')
<div class="card">
   <div class="card-body">
      <h5 class="card-title">Detalhes do cliente {{ $client->nome }}</h5>
      <p class="card-text">ID: <strong>{{ $client->id }}</strong></p>
      <p class="card-text">Nome: <strong>{{ $client->nome }}</strong></p>
      <p class="card-text">Endereco: <strong>{{ $client->endereco }}</strong></p>
      <p class="card-text">Observacao: <strong>{{ $client->observacao }}</strong></p>
      <br/>
      <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar para lista</a>
   </div>
</div>
</div>
@endsection