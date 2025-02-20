@extends('layouts.app')
@section('content')
    <h1 class="page-header">Criar Acomodacao</h1>
    <div class="panel panel-inverse">
        <div class="panel-body">
            <form action="{{ route('acomodacao.store') }}" method="POST">
               @csrf
               @include('acomodacao._form')
            </form>
        </div>
    </div>
@endsection
