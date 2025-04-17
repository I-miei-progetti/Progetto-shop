<x-layout>
    <div class="container-fluid">
        <div class="row py-5 justify-content-center align-iteam-center text-cente">
            <div class="col-12">
                <h2 class=" text-white text-center">Risultati della ricerca <span class="fst-italic">{{ $query }}
                    </span>
                </h2>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-itens-center py-5">
            @forelse ($cars as $car)
                <div class="col-12 col-md-3 mb-4 d-flex justify-content-center">
                    <x-card :car="$car"/>
                </div>
            @empty
            <div class="col-12 text-center">
                <img src="/image/nophoto" alt="Auto non trovata" class="img-fluid">
            </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex-justify-conytent-center">
        <div class="col-12 d-flex justify-content-center"> 
            <div class="custom-pagination">
                {{ $cars->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</x-layout>
