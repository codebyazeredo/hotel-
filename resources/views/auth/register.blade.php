<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="form-box">
        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf

            <a href="/">
                <p class="title">Hotel+</p>
            </a>

            <p class="message">Crie sua conta</p>

            <label>
                <input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nome" />
            </label>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <label>
                <input id="email" class="input" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="E-mail" />
            </label>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <label>
                <input id="password" class="input" type="password" name="password" required autocomplete="new-password" placeholder="Senha" />
            </label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <label>
                <input id="password_confirmation" class="input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Senha" />
            </label>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            <button class="submit">Cadastrar</button>

            <div class="signin">
                <p>Já tem uma conta? <a href="{{ route('login') }}">Faça login</a></p>
            </div>
        </form>
    </div>
</x-guest-layout>
