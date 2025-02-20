@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="card shadow-lg rounded-lg">
            <div class="card-header bg-zinc-700 text-white p-4 rounded-t-lg">
                <h4 class="text-2xl font-bold">Gerenciamento de Acomodações</h4>
            </div>
            <div class="card-body p-4">
                <a href="{{ route('acomodacao.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 inline-flex items-center">
                    <i class="bi bi-building-add mr-2"></i> Adicionar
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 shadow-sm rounded-lg">
                    <thead class="bg-gray-100">
                    <tr class="card-header bg-gray-400 text-white p-4 rounded-t-lg">
                        <th class="px-4 py-2 border-b text-left">Tipo</th>
                        <th class="px-4 py-2 border-b text-left">Nome</th>
                        <th class="px-4 py-2 border-b text-left">Descrição</th>
                        <th class="px-4 py-2 border-b text-left">Capacidade</th>
                        <th class="px-4 py-2 border-b text-left">Endereço</th>
                        <th class="px-4 py-2 border-b text-left">Telefone</th>
                        <th class="px-4 py-2 border-b text-left">Email</th>
                        <th class="px-4 py-2 border-b text-left">Disponibilidade</th>
                        <th class="px-4 py-2 border-b text-left">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($acomodacoes as $acomodacao)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b">{{ $acomodacao->tipo->nome }}</td>
                            <td class="px-4 py-2 border-b">{{ $acomodacao->nome }}</td>
                            <td class="px-4 py-2 border-b">{{ $acomodacao->descricao }}</td>
                            <td class="px-4 py-2 border-b">{{ $acomodacao->capacidade }}</td>
                            <td class="px-4 py-2 border-b">{{ $acomodacao->hotel->endereco }}</td>
                            <td class="px-4 py-2 border-b">{{ $acomodacao->hotel->telefone }}</td>
                            <td class="px-4 py-2 border-b">{{ $acomodacao->hotel->email }}</td>
                            <td class="px-4 py-2 border-b">
                                @if($acomodacao->disponivel)
                                    <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Disponível</span>
                                @else
                                    <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">Indisponível</span>
                                @endif
                            </td>
                            <td class="px-4 py-2 border-b flex space-x-2">
                                <a href="{{ route('hoteis.edit', $acomodacao->hotel->id) }}" class="text-blue-500 hover:text-blue-700" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('hoteis.destroy', $acomodacao->hotel->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" title="Excluir">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
