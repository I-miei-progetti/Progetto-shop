<x-layout>
    <div class="container my-5 pt-5">
        <div class="row justify-content-center">
            <h3 class="text-center my-3 text-light mb-2">Carica qui la tua auto</h3>
            <div class="col-12 col-md-6 border shadow rounded mt-2 blurred-bg">

                {{-- inserisco nel form: method, action in cui inserisco la rotta ed enctype + csrf token --}}
                <form method="POST" action="{{route('car.store')}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3 text-white mt-2">
                        <label class="form-label">Marca</label>
                        <input type="text" class="form-control" placeholder="es.Abarth" name="brand">
                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label">Modello</label>
                        <input type="text" class="form-control" placeholder="es.500" name="name">
                    </div>


                    <div class="mb-3 text-white">
                        <label type="number">Anno di immatricolazione</label>
                        <input type="number" name="year" class="form-control" min="1900" max="2100"
                            step="1" placeholder="Es. 2005" name="year">
                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label">Inserisci qui la foto della tua auto</label>
                        <input type="file" class="form-control" placeholder=".img .jpeg"name="img">
                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label">A quanto vuoi vendere</label>
                        <input type="number" class="form-control" placeholder="€" name="price">
                    </div>

                    <button type="submit" class="btn btn-outline-success btnSearch m-2">Carica</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
