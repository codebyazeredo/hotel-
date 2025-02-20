<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="card shadow-lg rounded-lg">
        <div class="card-header bg-zinc-700 text-white p-4 rounded-t-lg">
            <h4 class="text-2xl font-bold">Gerenciamento de Acomodações</h4>
        </div>

        <div class="mb-4">
            <label for="hotel_id" class="block text-sm font-medium text-gray-700">Hotel</label>
            <select name="hotel_id" id="hotel_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                <option value="">Selecione um Hotel</option>
                @foreach($hoteis as $hotel)
                    <option value="{{ $hotel->id }}" {{ old('hotel_id', $acomodacao->hotel_id ?? '') == $hotel->id ? 'selected' : '' }}>
                        {{ $hotel->nome }}
                    </option>
                @endforeach
            </select>
        </div>


        <div class="mb-4">
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome', $acomodacao->nome ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="acomodacao_tipo_id" class="block text-sm font-medium text-gray-700">Tipo de Acomodação</label>
            <select name="acomodacao_tipo_id" id="acomodacao_tipo_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                <option value="">Selecione o tipo</option>
                @foreach($tiposAcomodacao as $tipo)
                    <option value="{{ $tipo->id }}" {{ old('acomodacao_tipo_id', $acomodacao->acomodacao_tipo_id ?? '') == $tipo->id ? 'selected' : '' }}>
                        {{ $tipo->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="capacidade" class="block text-sm font-medium text-gray-700">Capacidade</label>
            <input type="number" name="capacidade" id="capacidade" value="{{ old('capacidade', $acomodacao->capacidade ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="preco_diaria" class="block text-sm font-medium text-gray-700">Preço da Diária</label>
            <input type="text" name="preco_diaria" id="preco_diaria" value="{{ old('preco_diaria', $acomodacao->preco_diaria ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="disponivel" class="block text-sm font-medium text-gray-700">Disponível</label>
            <select name="disponivel" id="disponivel" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                <option value="1" {{ (old('disponivel', $acomodacao->disponivel ?? '') == 1) ? 'selected' : '' }}>Sim</option>
                <option value="0" {{ (old('disponivel', $acomodacao->disponivel ?? '') == 0) ? 'selected' : '' }}>Não</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
            <textarea name="descricao" id="descricao" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('descricao', $acomodacao->descricao ?? '') }}</textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Salvar</button>
        </div>
    </div>
</div>



