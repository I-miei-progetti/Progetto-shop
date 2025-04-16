<div class="table-responsive-md">

    <table class="table border table-dark table-striped table-striped table-bordered align-middle">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Codice UPC</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Marca</th>
                <th scope="col">Descrizione</th>
                <th scope="col"> Azioni
            </tr>

            </tr>
        </thead>
        <tbody class="text-align-center">
            @foreach ($components as $component)
                <tr>
                    <td scope="row">
                        <img src="{{ asset('storage/' . $component->img) }}" alt="" class=" rounded"
                            style="min-width:50px; width: 120px; height:100px;">
                    </td>
                    <td>{{ $component->name }}</td>
                    <td>{{ $component->category }}</td>
                    <td>{{ $component->upc }}</td>
                    <td>{{ $component->price }},00€</td>
                    <td>{{ $component->brand }}</td>
                    <td>{{ $component->description }}</td>
                    <td> <button wire:click="deleteComponenti({{ $component->id }})"
                            class="btn btn-danger">Elimina</button>
                           <a href="{{route('component.modifica',['id'=>$component->id])}}" class="btn btn-warning">Modifica</a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>
