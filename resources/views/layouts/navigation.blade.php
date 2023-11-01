<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
    <a class="navbar-brand" href="#">Taskaty App</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('task.all') }}">all tasks</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('task.create') }}">create task</a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }} ">
                        @csrf
                        <button type="submit" class="btn btn-secondary">LOGOUT</button>
                    </form>

                </li>

                @if (!auth()->user()->email_verified_at)
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <button class="btn btn-danger">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </div>
                    </form>
                @endif
            @endauth

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endguest

        </ul>
    </div>
</nav>
