@extends('layout.layout')

@section('title', 'Prihlasenie')

@section('content')
<main class="form-signin w-100 m-auto">
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="h3 mb-3 mt-3 fw-normal">Prosím prihláste sa</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Prihlasovacie meno</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Heslo</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    Zapamätať si ma
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Prihlásiť sa</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
    </div>
</main>


@endsection
