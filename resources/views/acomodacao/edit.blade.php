@extends('layouts.app')
@section('content')
    <h1 class="page-header">Editar Acomodação</h1>
    <div class="panel panel-inverse">
        <div class="panel-body">
            <form action="{{ route('acomodacao.update', $acomodacao->id) }}" method="POST">
                @csrf
                @method('PATCH')
                @include('acomodacao._form')
            </form>
        </div>
    </div>
@endsection
