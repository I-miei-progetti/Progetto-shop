<x-layout>
    <div class="container my-5 pt-5">
        <div class="row justify-content-center">
            <h3 class="text-center my-3 text-light mb-2">Modifica Insersione</h3>
            <div class="col-12 col-md-6 border shadow rounded mt-2 blurred-bg">


                <form method="POST" action="{{route('car.edit', $car)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 text-white mt-2">
                        <label class="form-label">Marca</label>
                        <input type="text" class="form-control" placeholder="es.Abarth" name="brand"
                            value="{{ $car->brand }}">
                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label">Modello</label>
                        <input type="text" class="form-control" placeholder="es.500" name="name"
                            value="{{ $car->name }}">
                    </div>


                    <div class="mb-3
                            text-white">
                        <label type="number">Anno di immatricolazione</label>
                        <input type="number" name="year" class="form-control" min="1900" max="2100"
                            step="1" placeholder="Es. 2005" name="year" value="{{ $car->year }}">
                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label">Immagine Precedente:</label>
                        <img src="{{ Storage::url($car->img) }}" alt="" class="img-fluid"
                            style="width: 120px; height:100px;">

                        <div class="mb-3 text-white">
                            <label class="form-label">Inserisci qui la foto della tua auto</label>
                            <input type="file" class="form-control" placeholder=".img .jpeg"name="img">
                        </div>
                    </div>
                    <div class="mb-3 text-white">
                        <label class="form-label">A quanto vuoi vendere</label>
                        <input type="number" class="form-control" placeholder="€" name="price" value="{{$car->price}}">
                    </div>

                    <button type="submit" class="btn  btnSearch m-2">Carica</button>
                    <a href="{{ route('car.index', compact('car')) }}" class="btn btnSearch mb-2 mt-2">Torna in dietro</a>
                </form>
            </div>
        </div>
    </div>

</x-layout>
