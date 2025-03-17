<x-layout>
    <div class="container my-5 pt-5">
        <div class="row justify-content-center">
            <h1 class="text-light text-center">Dettaglio</h1>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <div class="col-6">
                            <img src="{{ Storage::url($car->img) }}" alt="{{ $car->name }}" class="img-fluid mb-2">
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center flex-column">
                            <h3 class="card-title mb-2 text-light text-align-center">{{ $car->brand }}</h3>
                            <p class="card-text text-light mb-2">Modello: {{ $car->name }}</p>
                            <p class="card-text  text-light">Anno: {{ $car->year }}</p>
                            <p class="card-text text-light">Prezzo: {{ $car->price }}€</p>
                            <p class="card-text text-light">Pubblicato da: {{ $car->seller }}</p>
                            <a href="{{ route('car.index', compact('car')) }}" class="btn btnSearch mb-2">Torna in dietro</a>
                            <a href="{{ route('car.update', compact('car'))}}" class="btn btn-warning">Modifica</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
