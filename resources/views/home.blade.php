@extends('adminlte::page')

@section('title', 'Painel Administrativo')

@section('content_header')
    <h1>Informações Gerais</h1>
@stop

@section('content')
 	@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
     @endif
@stop