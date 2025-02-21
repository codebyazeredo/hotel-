<style>
    .navbar-dark.bg-dark {
        background-color: royalblue !important;
    }

</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-full">
    <a class="navbar-brand" href="#">Hotel+</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="btn-sm btn-info nav-link text-white">
                            Painel do Usuário
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-white">
                            Acesse
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="btn-sm btn-warning nav-link text-white">
                                Cadastre-se
                            </a>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>
    </div>
</nav>
