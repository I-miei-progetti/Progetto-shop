<x-layout>
    <h3 class="text-center my-3 text-light">Registrati</h3>
    <div class="container my-1">
        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-12 col-md-7 border shadow rounded">
                <form class="m-5" method="POST" action="{{ route('register') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control" placeholder="Es. Mario Rossi" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email </label>
                        <input type="email" class="form-control" placeholder="Es. mariorossi@mail.it" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <div class="my-5 text-center">
                        <button type="submit" class="btn btn-primary">Registrati</button>
                        <p>Sei registrato? <a href="{{route('login')}}">Accedi</a></p>
                    </div>

                </form>
            </div>
        </div>

</x-layout>
