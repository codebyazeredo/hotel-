<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="form-box">
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf

            <a href="/">
                <p class="title">Hotel+</p>
            </a>

            <p class="message">Faça login na sua conta</p>

            <label>
                <input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="E-mail" />
            </label>

            <label>
                <input id="password" class="input" type="password" name="password" required autocomplete="current-password" placeholder="Senha" />
            </label>

            <button class="submit">Entrar</button>

            <div class="signin">
                <p>Não tem uma conta? <a href="{{ route('register') }}">Cadastre-se</a></p>
            </div>
        </form>
    </div>
</x-guest-layout>
