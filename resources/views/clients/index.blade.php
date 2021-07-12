@extends('layout')
@section('title')Controle de clientes @endsection
@section('cabecalho') <h1>Controle de Clientes</h1> @endsection
 
@section('conteudo')
<div class="container">
    <div class="row">
        <a href="/clients/create" class="btn btn-primary">Cadastrar Novo Cliente</a>
    </div><hr />
</div>
  
   <div class="container-fluid">
      <div class="row">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Alterar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            @foreach ($clients as $client )
            <tbody>
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email}}</td>
                    <td>{{ $client->date_birth }}</td>
                    <td>{{$client->password }}</td>
                    <td><button class="btn btn-success">Alterar</button></td>
                    <td><button class="btn btn-danger">Excluir</button></td>
                </tr>
            </tbody>
            @endforeach
           
        </table>
      </div>
   </div>
@endsection

