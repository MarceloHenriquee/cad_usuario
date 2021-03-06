@extends('layout')
@section('title') Cadastro de clientes @endsection
@section('cabecalho') <h1>Criar novo Cliente</h1> @endsection
  
@section('conteudo')
    <div class="container">

       <form method="post">
           @csrf
            <div class="form-group col-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group col-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group col-6">
                <label for="date_birth">Data de nascimento</label>
                <input type="date" class="form-control" id="date_birth" name="date_birth">
            </div>
            <div class="form-group col-6">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="row">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success"name="btn-gravar" id="btn-gravar">Cadastrar</button> 
                </div>
                <div class="col-md-2">
                    <a href="/" name="btn-voltar" id="btn-voltar" class="btn btn-danger"> Voltar </a>
                </div>              
            </div>           
         </form> 
    </div>
 @endsection

