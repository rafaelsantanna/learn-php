@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe abaixo as informações do cliente
                    <a class="pull-right" href="{{ url('clientes') }}">Listagem de cliente</a>
                </div>

                <div class="panel-body">
                    <!-- Se a Sessão tiver uma várial chamada mensagem_sucesso então a DIV vai ser inserida, essa váriavel está sendo enviada pelo Controller -->
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif

                    <!-- Estamos utilizando o mesmo formulario para Salvar e editar, porém o form deve ser diferente, e por isso estou utilizando um IF para diferenciar. -->
                    <!-- O Metodo PATCH se refere ao UPDATE -->
                    @if(Request::is('*/editar'))
                        {!! Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]) !!}
                    @else
                        {!! Form::open(['url' => 'clientes/salvar']) !!}
                    @endif

                    <!-- Estou passando null nos inputs porque se não passar o editar não funciona -->
                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}

                    {!! Form::label('endereco', 'Endereço') !!}
                    {!! Form::input('text', 'endereco', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço']) !!}

                    {!! Form::label('numero', 'Número') !!}
                    {!! Form::input('text', 'numero', null, ['class' => 'form-control', '', 'placeholder' => 'Número']) !!}

                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
